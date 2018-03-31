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
        <a href="{{route('web.whats-up')}}"><button type="button" class="btn btn-default">see all articles</button></a>
            <!-- <div class="col-md-12"> <img src="{{-- asset('/storage/images/writers/'. $article->writer->image ) --}}" width="250px" /></div> -->
            <h2>{{$article[0]->writer->title}} by {{$article[0]->writer->name}} </h2>
            <h3>{{$article[0]->headline}}</h3>
            <hr class="hr">
            <p> {!! htmlspecialchars_decode($article[0]->content) !!}</p>
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