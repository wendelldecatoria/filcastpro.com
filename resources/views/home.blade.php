@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/filcastpro-default.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    @include('partials.header')
    <div class="row content">
        @include('partials.menu')
        <div class="col-md-8" style="text-align:center">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">            
            
               {!! htmlspecialchars_decode($default->url) !!}
            </div>
            <br><br>
        </div>
        <div class="col-md-4">
            <div class="item-vid-container">
                @foreach($videos as $video)
                <div class="row item-vid" title="{{$video->title}}" url="{{$video->url}}">
                    <img class="col-md-6 item-vid-thumb" src="{{asset('/storage/images/thumbnails/' . $video->thumbnail )}}">
                    <div class="col-md-6 item-vid-title">{{$video->title}}</div>
                </div>
                @endforeach
            </div>
            <br>
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

    $('.item-vid').click(function(){
        var url = $(this).attr('url');
        $('.embed-responsive').html(url);
    });

    $('.item-vid').hover(function(){
        $(this).css("-webkit-filter", "grayscale(1)");
    },function(){
        $(this).css("-webkit-filter", "grayscale(0)");
    });
    
</script>
@endsection