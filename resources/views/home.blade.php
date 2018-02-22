@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/filcastpro-default.css') }}" rel="stylesheet">
@endsection

@section('content')

@include('partials.header')
<div class="container">

    <div class="row content">
        @include('partials.menu')
        
        <div class="col-md-12 content-body">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">            
                <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube-nocookie.com/embed/3yYii5upMwA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>

        @include('partials.footer')
    </div>
</div>
@endsection

@section('js')
<script>
    $('document').ready(function(){
        $('.nav-home').addClass('active');
    });
</script>
@endsection