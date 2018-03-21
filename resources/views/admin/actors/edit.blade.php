@extends('adminlte::page')

@section('title', 'Edit Artist')

@section('content_header')
	<h1>FilCaspro<small> Update Artist Information</small></h1>
@endsection

@section('ibillboard_css')
<!-- Froala Editor -->        
	
  <link rel="stylesheet" href="{{ asset('vendor/froala/css/froala_editor.min.css')}}">
  <link rel="stylesheet" href="{{ asset('vendor/froala/css/froala_style.min.css')}}">

  <link href="{{ asset('css/billboard.css') }}" rel="stylesheet">
@endsection

@section('content')
	<div class="box box-default">
		<div class="box-body">
			<div class="row">
				<div class="col-md-12">
                    @foreach($actor as $act)
                    @include('layouts/error_box')
                    {{Form::open(array('route' => array('artists.update', $act->id), 'method' => 'PUT', 'class' =>'form-horizontal', 'files' => true))}}
                    {{ csrf_field() }}
                    {{ Form::hidden('id', $act->id) }} 
                    <table class="table table-striped table-bordered table-hover table-sm datatable mdl-data-table dataTable" role="grid" style="width: 80%;">
							<tbody>
                            <tr>
                                <td>Name:</td>
                                <td>{{ Form::text('name', $act->name ,array('class' => 'form-control','placeholder' => 'Enter artist name')) }}</td>
                            </tr>
                            <tr>
                                <td>First name::</td>
                                <td>{{ Form::text('first_name', $act->first_name ,array('class' => 'form-control','placeholder' => 'Enter artist first name')) }}</td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td>{{ Form::text('last_name', $act->last_name ,array('class' => 'form-control','placeholder' => 'Enter artist last name')) }}</td>
                            </tr>
                            <tr>
                                <td>Contact:</td>
                                <td>{{ Form::text('contact', $act->contact ,array('class' => 'form-control','placeholder' => 'Enter artist contact')) }}</td>
                            </tr>
                            <tr>
                                <td>Age:</td>
                                <td>{{ Form::number('age', $act->age ,array('class' => 'form-control','placeholder' => 'Enter artist age')) }}</td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td>{{Form::select('gender', array('' => '-----', 'male' => 'Male', 'female' => 'Female'),  $act->gender,['class' => 'form-control'])}}</td>
                            </tr>
                            <tr>
                                <td>Height:</td>
                                <td>{{ Form::text('height', $act->height ,array('class' => 'form-control','placeholder' => 'Enter artist height')) }}</td>
                            </tr>
                            <tr>
                                <td>Vital:</td>
                                <td>{{ Form::text('vital', $act->vital ,array('class' => 'form-control','placeholder' => 'Enter artist vital stats')) }}</td>
                            </tr>
                            <tr>
                                <td>Manager:</td>
                                <td>{{ Form::text('manager', $act->manager ,array('class' => 'form-control','placeholder' => 'Enter artist manager')) }}</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>{{ Form::text('email', $act->email ,array('class' => 'form-control','placeholder' => 'Enter artist email')) }}</td>
                            </tr>
                            <tr>
                                <td>Online Profile:</td>
                                <td>{{ Form::text('online_profile', $act->online_profile ,array('class' => 'form-control','placeholder' => 'Enter artist online profile')) }}</td>
                            </tr>
                            <tr>
                                <td>Works:</td>
                                <td>{{ Form::textarea('works', $act->works ,array('class' => 'form-control','id' => 'froala-editor', 'placeholder' => 'Enter artist works')) }}</td>
                            </tr>
                            <tr>
                                <td>Is Active(?):</td>
                                <td>{{Form::select('is_active', array( '' => '-----', 1 => 'Yes', 0 => 'No'),  $act->is_active,['class' => 'form-control'])}}</td>
                            </tr>
                            <tr>
                                <td>Thumb Image:</td>
                                <td> {{ Form::file('thumb') }}</td>
                            </tr>
                            <tr>
                                <td>Profile Images:</td>
                                <td> <input type="file" name="photos[]" multiple /></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>       
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="btn-submit-container">
                    <button type="submit" class="btn btn-primary" placeholder="Submit"><i class="glyphicon glyphicon-check"></i> Save</button>
                        &nbsp;
                        <a href="{{ route('artists.index') }}" title="Cancel" class="btn btn-primary btn cancel_Btn">
                            <i class="glyphicon glyphicon-remove-circle"></i> Cancel
                        </a>
                    </div>
                </div>
            </div>
            {{ Form::close() }}
            @endforeach
        </div>
    </div>
@endsection

@section('ibillboard_js')

<script type='text/javascript' src="{{ asset('vendor/froala/js/froala_editor.min.js')}}"></script>
<script type="text/javascript">
				
    $(function() {
        $('textarea#froala-editor').froalaEditor({
            iframe: true,
        })
    });
</script>
@endsection
