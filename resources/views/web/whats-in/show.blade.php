@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/filcastpro-default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modal.css') }}" rel="stylesheet">

    <link rel="stylesheet"
          href="{{ asset('vendor/dhtmlxSuite/codebase/dhtmlx.css') }}">

    <link rel="stylesheet"
          href="{{ asset('vendor/dhtmlxSuite/codebase/fonts/font_roboto/roboto.css') }}">
@endsection

@section('content')
<div class="container">
    @include('partials.header')
    <div class="row content">
        @include('partials.menu')
        <div class="col-md-3"></div>
        <div class="col-md-6 showactor">
            <a href="{{route('web.whats-in.index')}}"><button type="button" class="btn btn-default">back to search</button></a>
            <br><br>
            
                <div class="row row-ac-title"> 
                    <p class="ac-title">  
                        {{$whatsin[0]->name}}  
                    </p> 

                </div>
            
                <div class="row">
                        <div class="col-sm-12 ac-dtl">
                        <br><br>
                        <table class="table table-condensed ac-tbl" width="100%" role="grid" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th colspan="2" class="ac-dtl-title">DETAILS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Contact:</td>
                                    <td>{{$whatsin[0]->contact}}</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>{{$whatsin[0]->email}}</td>
                                </tr>
                                <tr>
                                    <td>Website:</td>
                                    <td><a class="ac-olp" target="_blank" href="{{asset($whatsin[0]->url)}}" >{{$whatsin[0]->url}}</a></td>
                                </tr>
                                <tr>
                                    <td>Category:</td>
                                    <td>
                                        @foreach($categories as $category) 
                                        <span class="label label-primary">{{$category->category->name}}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tags:</td>
                                    <td>
                                        @foreach($tags as $tag) 
                                        <span class="label label-success">{{$tag->name}}</span>
                                        @endforeach
                                    </td>
                                </tr>
                               
                                </tbody>
                                <thead>
                                    <tr>
                                        <th colspan="2" style="background-color: #db2de6;">Map</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td colspan="2">
                                        <div style="text-align: center;">{!! htmlspecialchars_decode($whatsin[0]->map_url) !!}</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        
        </div> <!-- end of col-md6 -->
        <div class="col-md-3"></div>
    </div>
    @include('partials.footer')
</div> <!-- end of container -->
@endsection

@section('js')
<script src="{{ asset('vendor/dhtmlxSuite/codebase/dhtmlx.js') }}"></script>
<script src="{{ asset('js/helpers.js') }}"></script>
<script src="{{ asset('js/ajax-interceptor.js') }}"></script>
<script src="{{ asset('js/jquery.form-validator.min.js') }}"></script>
<script>
    $('document').ready(function(){
        $('.nav-whats-in').addClass('active');
    });
  

</script>
@endsection