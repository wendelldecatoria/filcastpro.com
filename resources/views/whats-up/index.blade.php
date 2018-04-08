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
                <div class="col-md-12" style="width: 100%;text-align: center; margin-bottom: 20pt;">
                    <img class="img-responsive" src="../images/whats-up-title2.png" style="display: inline-block;">
                </div>
            </div>
             @foreach($featured as $feature)
                        <div class="row article">   
                            <div class="col-md-1"></div>
                            <div class="col-md-4 article-image" style="text-align: center"> 
                                <img src="{{asset('/storage/images/writers/'. $feature->image )}}" width="315" />
                            </div>
                            <div class="col-md-5  feature-body">
                                <h3 id="headline">{{$feature->headline}}</h3>
                                <h5 id="title">{{$feature->title}} by {{$feature->writer}} </h5>
                                <p> <small>Posted on {{ date_format($feature->created_at, 'M d, Y')}} </small></p>
                                <p> {!! htmlspecialchars_decode(str_limit($feature->content, $limit = 150, $end = '...')) !!}</p>
                                <p>   <a href="{{route('web.show-whats-up', $feature->id)}}">READ MORE...</a></p>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    <hr class="hr">
            @endforeach
              
            <!-- @foreach($articles as $article)
                        <div class="row article">
                            <div class="col-md-3 article-image" style="text-align: center"> 
                                <img src="{{asset('/storage/images/writers/'. $article->image )}}" class="img-thumbnail" width="200" height="200" />
                            </div>
                            <div class="col-md-9  article-body" >
                                <h3 id="headline"><strong>{{$article->headline}}</strong></h3>
                                <h5 id="title">{{$article->title}} by {{$article->writer}} </h5>
                                <p> <small>Posted on {{ date_format($article->created_at, 'M d, Y')}} </small></p>
                                <p> {!! htmlspecialchars_decode(str_limit($article->content, $limit = 150, $end = '...')) !!}</p>
                                <p>   <a href="{{route('web.show-whats-up', $article->id)}}">Read More...</a></p>
                            </div>
                        </div>
                    <hr class="hr">
            @endforeach -->

            <div class="row">
                @foreach($articles as $article)
                    <div class="col-md-4">
                            <div class="row article">
                                <div class="article-image" style="text-align: center"> 
                                    <img src="{{asset('/storage/images/writers/'. $article->image )}}" width="150" height="150" />
                                </div>
                                <div class="article-body" >
                                        <h4 id="headline">{{$article->headline}}</h4>
                                        <h5 id="title">{{$article->title}} by {{$article->writer}} </h5>
                                        <p> <small>Posted on {{ date_format($article->created_at, 'M d, Y')}} </small></p>
                                        <p> {!! htmlspecialchars_decode(str_limit($article->content, $limit = 50, $end = '...')) !!}</p>
                                        <p> <a href="{{route('web.show-whats-up', $article->id)}}">READ MORE...</a></p>
                                </div>
                            </div>
                    </div>
                @endforeach

            </div>

            <hr class="hr">
            <div class="row">
                
            </div>
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