<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

use App\Role;
use App\RoleUser;
use App\User;
use App\Subscriber;
use App\SubscriberUser;
use Carbon\Carbon;
use Hash;
use Illuminate\Database\QueryException;
use App\MallUser;
use App\Mall;
use Validator;

class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function getRole(){

        //get id of logged in user
        $user_id = Auth::User()->id;
        $role_id = array();
        //get role of user. 1 => admin, 2 => subscriber
       
        $roles = RoleUser::where('user_id', '=', $user_id)->get();
        foreach ($roles as $role) {
            array_push($role_id, $role->role_id);
        }

        return $role_id;
    }

    public function ValidateFormInput($request){
        return $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
    }

    public function ShowItems(){

        $user_id = Auth::User()->id;
        $role_id = $this->getRole();

        if (in_array(1, $role_id)) { //pemi
            $items = User::with('Parent', 'RoleUser')->get();
            return view('.manage.user', ['items' => $items]);
            //return $items;
        } else {
            return view('no-permissions');
        }
    	
    }

    public function AddItems(){
        $user_id = Auth::User()->id;
        $role_id = $this->getRole();

        $items = Role::pluck('name','id')->reverse()->put('', '-----')->reverse();
        
        return view('manage.add-user', ['items' => $items]);
    }

    public function SaveItems(Request $request){
        
        $this->ValidateFormInput($request);

        $user_id = Auth::User()->id;
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $role_id = $request->input('role');
        $is_active = $request->input('is_active');
        $is_approved = $request->input('is_approved');
        $created_at = Carbon::now();
        $updated_at = Carbon::now();

        try{
                $user_id = User::insertGetId([
                    'name' => $name,
                    'email' => $email,
                    'password' => Hash::make($password),
                    'created_at' => $created_at,
                    'updated_at' => $updated_at,
                    'is_approved' => $is_approved,
                    'is_active' => $is_active,
                    'approver' => $user_id,
                ]);

                $roleuser = [
                    'user_id' => $user_id,
                    'role_id' => $role_id,
                    'created_at' => $created_at,
                    'updated_at' => $updated_at,          
                ];

                RoleUser::insert($roleuser);

            } catch (\Illuminate\Database\QueryException $e) {
                
                //TODO: make this work! will show error message
                //return Redirect::back()->withErrors(['User already exist!']);

            } catch (PDOException $e) {
                
            }  

        return redirect()->action('UserController@ShowItems');
    }

    public function ApproveItems(){
        $status = Input::get('status');
        $id = Input::get('id');
        
        $approver_id = Auth::id();

        User::where('id', '=', $id )->update(['is_approved' => $status, 'approver' => $approver_id]);

        return redirect()->action('UserController@ShowItems');

    }

    public function SaveUpdatedItems(Request $request){

        $this->ValidateFormInput($request);

        $id = $request->input('id');
        $user_id = Auth::User()->id;
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $role_id = $request->input('role');
        $is_active = $request->input('is_active');
        $is_approved = $request->input('is_approved');
        $created_at = Carbon::now();
        $updated_at = Carbon::now();

        $dataSet = [
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'updated_at' => $updated_at,
            'is_approved' => $is_approved,
            'is_active' => $is_active,
        ];

        User::where('id', '=' ,$id)->update($dataSet);

        $roleuser = [
            'user_id' => $id[0],
            'role_id' => $role_id,    
            'updated_at' => $updated_at,      
        ];

        RoleUser::where('user_id', '=' ,$id)->update($roleuser);

        return redirect()->action('UserController@ShowItems');

        //return $id[0];
    }

    public function AddSubscriber(Request $request){
        $user_id = $request->input('user_id');
        $subscriber_id = $request->input('selected');
        $created_at = Carbon::now();
        $updated_at = Carbon::now();
        $count = count($subscriber_id)-1;

        $i=0; //for loop counter
        for($i=0; $i <= $count; $i++){
                $dataSet[$i] = [
                    'subscriber_id' => $subscriber_id[$i],
                    'user_id' => $user_id,
                    'created_at' => $created_at,
                    'updated_at' => $updated_at, 
                    'is_active' => 1,
            ];
            //SubscriberUser::insert($dataSet[$i]);

            try{
                //TODO: make this work as expected. Currently, when record exists, it on being ignored. It should make is_active=1
                //SubscriberUser::updateOrCreate(['user_id' => $user_id, 'subscriber_id' => $subscriber_id[$i]], $dataSet[$i]);
                SubscriberUser::insert($dataSet[$i]);
            } catch (\Illuminate\Database\QueryException $e) {
                //TODO: make this work! will show error message
                //return Redirect::back()->withErrors(['Selected subscriber is already associated with the user!']);

            } catch (PDOException $e) {
                
            } 
        }

        return redirect()->action('UserController@ShowItems');
        
    }

    public function RemoveSubscriber($id){  
        $user = User::where('id','=', $id)->get();
        $items = SubscriberUser::with('Subscriber')->where('user_id','=', $id)->where('is_active','=','1')->get();
        return view('manage.remove-subscriber-from-user', ['items' => $items, 'user' => $user]);
        //return $items;
    }

    public function SaveRemovedSubscriber(Request $request){
        $deleted_by = Auth::User()->id;
        $user_id = $request->input('user_id');
        $subscriber_id = $request->input('selected');

        SubscriberUser::where('user_id', $user_id)->whereIn('subscriber_id',$subscriber_id)->update(['is_active' => 0, 'deleted_by' => $deleted_by]);
        return redirect()->action('UserController@ShowItems');

        //return $user_id;

    }

    public function AddMall(Request $request){

        $user_id = $request->input('user_id');
        $mall_id = $request->input('selected');
        $created_at = Carbon::now();
        $updated_at = Carbon::now();
        $count = count($mall_id)-1;

        $i=0; //for loop counter
        for($i=0; $i <= $count; $i++){
                $dataSet[$i] = [
                    'mall_id' => $mall_id[$i],
                    'user_id' => $user_id,
                    'created_at' => $created_at,
                    'updated_at' => $updated_at, 
                    'is_active' => 1,
                ];

            try{
                //TODO: make this work as expected. Currently, when record exists, it on being ignored. It should make is_active=1
                MallUser::insert($dataSet[$i]);
            } catch (\Illuminate\Database\QueryException $e) {
                
            } catch (PDOException $e) {
                
            } 
        }

        return redirect()->action('UserController@ShowItems');
        //return $count;
    }

    public function RemoveMall($id){
        $user = User::where('id','=', $id)->get();
        $items = MallUser::with('Mall')->where('user_id','=', $id)->where('is_active','=','1')->get();
        return view('manage.remove-mall-from-user', ['items' => $items, 'user' => $user]);
    }

    public function SaveRemovedMall(Request $request){
        $deleted_by = Auth::User()->id;
        $user_id = $request->input('user_id');
        $mall_id = $request->input('selected');

        MallUser::where('user_id', $user_id)->whereIn('mall_id', $mall_id)->update(['is_active' => 0, 'deleted_by' => $deleted_by]);
        return redirect()->action('UserController@ShowItems');
    }

    public function Update($id){
        $user_id = Auth::User()->id;
        $roles = Role::pluck('name','id')->reverse()->put('', '-----')->reverse();
        $items = User::where('id','=', $id)->orderBy('id', 'asc')->get();
        return view('.manage.update-user', ['items' => $items, 'roles' => $roles]);
    }

    public function Remove($id){
        $user_id = Auth::User()->id;
        User::where('id', '=', $id)->update(['is_active' => 0, 'deleted_by' => $user_id]);
        return redirect()->action('UserController@ShowItems');
    }

    public function ApproveUser($id){
        $items = User::where('id', '=', $id)->orderBy('id', 'asc')->get();
        return view('manage.admin-approveusers',['items' => $items]);
    }

    public function AssociateSubscriber($id){
        $user = User::where('id', '=', $id)->get();
        $subscribers = SubscriberUser::with('Subscriber', 'User')->where('is_active', '=' , 1)->where('user_id', '=', $id)->get();
        $items = Subscriber::where('is_active', '=' , 1)->orderBy('name')->get();
        return view('manage.add-subscriber-to-user', ['items' => $items, 'subscribers' => $subscribers, 'user' => $user]);
    }
               

    public function AssociateMall($id){
        $user = User::where('id', '=', $id)->get();
        $malls = MallUser::with('Mall', 'User')->where('is_active', '=' , 1)->where('user_id', '=', $id)->get();
        $items = Mall::orderBy('name')->get();
        return view('manage.add-mall-to-user', ['items' => $items, 'malls' => $malls, 'user' => $user]);
    }

}
