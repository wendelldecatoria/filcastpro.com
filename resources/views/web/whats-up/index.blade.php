@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/filcastpro-default.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    @include('partials.header')
    <div class="row content">
        @include('partials.menu')
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12" style="width: 100%;text-align: center; margin-bottom: 20pt;">
                    <img class="img-responsive" src="images/whats-up-title2.png" style="display: inline-block;">
                </div>
            </div>
            @if(count($featured) > 1)
                @foreach($featured as $feature)
                            <div class="row article">   
                                <div class="col-md-1"></div>
                                <div class="col-md-4 article-image" style="text-align: center"> 
                                    <img src="{{asset('/storage/images/writers/'. $feature->image )}}" width="315" />
                                </div>
                                <div class="col-md-5  feature-body">
                                    <h3 id="headline">{{$feature->headline}}</h3>
                                    <h5 id="title">{{$feature->Writer->title}} by {{$feature->Writer->name}} </h5>
                                    <p> <small>Posted on {{ date_format($feature->created_at, 'M d, Y')}} </small></p>
                                    <p> {!! htmlspecialchars_decode(str_limit($feature->content, $limit = 150, $end = '...')) !!}</p>
                                    <p>   <a href="{{route('web.whats-up.show', $feature->id)}}">READ MORE...</a></p>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        <hr class="hr">
                @endforeach
            @endif
            @if(count($articles) > 1)
                <div class="row">
                    @foreach($articles as $article)
                        <div class="col-md-3">
                                <div class="row article">
                                    <div class="article-image" style="text-align: center"> 
                                        <img src="{{asset('/storage/images/writers/'. $article->image )}}" width="250" height="250" />
                                    </div>
                                    <div class="article-body" >
                                            <h4 id="headline">{{$article->headline}}</h4>
                                            <h5 id="title">{{$article->Writer->title}} by {{$article->Writer->name}} </h5>
                                            <p> <small>Posted on {{ date_format($article->created_at, 'M d, Y')}} </small></p>
                                            <p> {!! htmlspecialchars_decode(str_limit($article->content, $limit = 50, $end = '...')) !!}</p>
                                            <p> <a href="{{route('web.whats-up.show', $article->id)}}">READ MORE...</a></p>
                                    </div>
                                </div>
                        </div>
                    @endforeach
                </div>
                <hr class="hr">
            @endif

            @if(count($archives) > 1)
                <div class="row" style="text-align:center;"> 
                    <h2>Previous Articles</h2>
                    <br>
                </div>

                @foreach($archives as $archive)
                            <div class="row article">   
                                <div class="col-md-1"></div>
                                <div class="col-md-4 article-image" style="text-align: center">    
                                    <img src="{{asset('/storage/images/writers/'. $archive->image )}}" width="315" />
                                </div>
                                <div class="col-md-5  feature-body">
                                    <h3 id="headline">{{$archive->headline}}</h3>
                                    <h5 id="title">{{$archive->Writer->title}} by {{$archive->Writer->name}} </h5>
                                    <p> <small>Posted on {{ date_format($archive->created_at, 'M d, Y')}} </small></p>
                                    <p> {!! htmlspecialchars_decode(str_limit($archive->content, $limit = 150, $end = '...')) !!}</p>
                                    <p>   <a href="{{route('web.whats-up.show', $archive->id)}}">READ MORE...</a></p>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        <hr class="hr">
                @endforeach
            @endif
        </div>
        <div class="col-md-1"></div>
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