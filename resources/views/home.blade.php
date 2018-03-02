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
        <div class="col-md-6">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">            
                <iframe width="560" height="315" src="https://www.youtube.com/embed/3yYii5upMwA?rel=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLffqvbWIvMgQST8m_Ao31uBS_MtsWGCMX" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->       
            </div>
            <br><br>
        </div>
        <div class="col-md-3"></div>
    </div>
    @include('partials.footer')
</div>
@endsection

@section('js')
<script>
    $('document').ready(function(){
        $('.nav-home').addClass('active');
    });
</script>
@endsection