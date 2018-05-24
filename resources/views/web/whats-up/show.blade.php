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
            <div class="row">
                <div class="col-md-8" style="line-height:100px;"> 
                    <a href="{{route('web.whats-up.index')}}"><button type="button" class="btn btn-default">see all articles</button></a>
                </div>
                <div class="col-md-3" style="text-align: right; font-weight:bold;"> 
                    <p style="margin-top:10%;">{{ $article[0]->Writer->title }} <br> by <br> {{ $article[0]->Writer->name}}</p>
                </div>
                <div class="col-md-1" style="text-align: center; font-weight:bold;"> 
                    <img src="{{ asset('/storage/images/writers/'. $article[0]->Writer->image ) }}" height="100"/>
                </div>
            </div>
            <h3 id="headline"><strong>{{$article[0]->headline}}</strong></h3>
           <div class="row"> 
                <img class="img-responsive" src="{{ asset('/storage/images/writers/'. $article[0]->article_banner ) }}" />
           </div>
            <br>
            <p class="text-justify"> {!! htmlspecialchars_decode($article[0]->content) !!} </p>
            <br>
            <a href="{{route('web.whats-up.disclaimer')}}"><button type="button" class="btn btn-danger"><strong>Disclaimer</strong></button></a>
            <br><br>
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