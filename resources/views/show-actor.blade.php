@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/filcastpro-default.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    @include('partials.header')
    <div class="row content">
        @include('partials.menu')
        <div class="col-md-3"></div>
        <div class="col-md-6 showactor">
            <a href="{{route('web.actors')}}"><button type="button" class="btn btn-link"><< Go back</button></a>
            @foreach ($actor as $actr)
                <div class="row row-ac-title">
                    <h3 class="ac-title">{{$actr->name}}</h3>
                </div>
                <div class="row row-ac-img">
                    <div class="col-sm-6" style="text-align:right;"><img class="prf-img img-thumbnail" src="{{asset('/storage/images/actors/'. $actr->profile_image)}}"></div>
                    <div class="col-sm-6" style="text-align:left;">
                        <img class="sub-img img-thumbnail" src="{{asset('/storage/images/actors/'. $actr->sub_image_1 )}}">
                        <img class="sub-img img-thumbnail" src="{{asset('/storage/images/actors/'. $actr->sub_image_2 )}}">
                        <img class="sub-img img-thumbnail" src="{{asset('/storage/images/actors/'. $actr->sub_image_3 )}}">
                        <img class="sub-img img-thumbnail" src="{{asset('/storage/images/actors/'. $actr->sub_image_4 )}}">
                    </div>
                </div>
                <div class="row">
                        <div class="col-sm-12 ac-dtl">
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
                                        <div>{{ html_entity_decode($actr->works) }}</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        </div> <!-- end of col-md6 -->
        <div class="col-md-3"></div>
    </div>
    @include('partials.footer')
</div> <!-- end of container -->
@endsection

@section('js')
<script>
    $('document').ready(function(){
        $('.nav-actors').addClass('active');
    });
</script>
@endsection