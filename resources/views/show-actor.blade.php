@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/filcastpro-default.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container">
    @include('partials.header')
    <div class="row content">
        @include('partials.menu')
       
        <div class="col-md-12 content-body showactor">
            @foreach ($actor as $actr)
                <div class="row">
                    <h3 class="ac-title">{{$actr->name}}</h3>
                </div>
                <div class="row">
                    <div class="col-sm-4 prf-img"><img src="{{asset('/storage/images/actors/'. $actr->profile_image)}}" width="220" height="330"></div>
                    <div class="col-sm-8">
                        <div>
                            <img class="sub-img" src="{{asset('/storage/images/actors/'. $actr->sub_image_1 )}}" width="100" height="160">
                            <img class="sub-img" src="{{asset('/storage/images/actors/'. $actr->sub_image_2 )}}" width="100" height="160">
                            <img class="sub-img" src="{{asset('/storage/images/actors/'. $actr->sub_image_3 )}}" width="100" height="160">
                            <img class="sub-img" src="{{asset('/storage/images/actors/'. $actr->sub_image_4 )}}" width="100" height="160">
                        </div>
                        <br><br>
                        <table class="table table-condensed ac-tbl" width="100%" role="grid" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th colspan="2">DETAILS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ONLINE PROFILE:</td>
                                    <td><a class="ac-olp" target="_blank" href="{{asset($actr->online_profile)}}" >{{$actr->online_profile}}</a></td>
                                </tr>
                                <tr>
                                    <td>MANAGER:</td>
                                    <td>{{$actr->manager}}</td>
                                </tr>
                                <tr>
                                    <td>HEIGHT:</td>
                                    <td>{{$actr->height}}</td>
                                </tr>
                                <tr>
                                    <td>EMAIL:</td>
                                    <td>{{$actr->email}}</td>
                                </tr>
                                <tr>
                                    <td>CONTACT:</td>
                                    <td>{{$actr->contact}}</td>
                                </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th colspan="2">WORKS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td colspan="2">
                                        <div>{{$actr->works}}</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('partials.footer')
</div>
@endsection

@section('js')
<script>
    $('document').ready(function(){
        $('.nav-actors').addClass('active');
    });
</script>
@endsection