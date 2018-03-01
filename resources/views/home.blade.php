@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/filcastpro-default.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    @include('partials.header')
    <div class="row content">
        @include('partials.menu')
        <div class="col-md-12 content-body">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">            
                <!-- <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube-nocookie.com/embed/3yYii5upMwA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLffqvbWIvMgQST8m_Ao31uBS_MtsWGCMX" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        
            </div>
        </div>
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