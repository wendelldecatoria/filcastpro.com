@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/filcastpro-default.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    @include('partials.header')
    <div class="row content">
        @include('partials.menu')
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <a href="{{route('web.whats-up.index')}}"><button type="button" class="btn btn-default">see all articles</button></a>
           <!--  <div class="col-md-12"> <img src="{{-- asset('/storage/images/writers/'. $article[0]->image ) --}}" class="img-thumbnail" width="180" height="180" /></div> -->
            <h3 id="headline"><strong>{{$article[0]->headline}}</strong></h3>
            <h5 id="title">{{$article[0]->title}} by {{$article[0]->writer}} </h5>
            <hr class="hr">
            <p class="text-justify"> <blockquote>{!! htmlspecialchars_decode($article[0]->content) !!} </blockquote></p>

            <div class="fb-like" data-href="{{route('web.whats-up.show', $article[0]->id)}}" data-width="500" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
            <div class="fb-comments" data-href="{{route('web.whats-up.show', $article[0]->id)}}" data-width="100%" data-numposts="5"></div>
        </div>
        <div class="col-md-2"></div>
    </div>
    @include('partials.footer')
</div>
@endsection

@section('js')
<script>
    $('document').ready(function(){
        $('.nav-whats-up').addClass('active');
    });
</script>
@endsection