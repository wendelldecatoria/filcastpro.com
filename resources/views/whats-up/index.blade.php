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
            @foreach($articles as $article)
                <a href="{{route('web.show-whats-up', $article->id)}}">
                    <div class="row article">
                        <div class="col-md-4"> <img src="{{asset('/storage/images/writers/'. $article->writer->image )}}" width="250px" /></div>
                        <div class="col-md-8 article-body">
                            <h2>{{$article->writer->title}} by {{$article->writer->name}} </h2>
                            <h3>{{$article->headline}}</h3>
                            <p> {!! htmlspecialchars_decode(str_limit($article->content, $limit = 100, $end = '...')) !!}</p>
                            <p> {{ date_format($article->created_at, 'M d, Y')}}</p>
                        </div>
                    </div>
                </a>
                @if(count($articles) > 1)
                    <hr class="hr">
                @endif
            @endforeach
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