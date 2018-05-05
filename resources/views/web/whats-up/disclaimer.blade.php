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
            <a href="{{ url()->previous() }}"><button type="button" class="btn btn-default">back to article</button></a>
            <h3 id="headline"><strong>Disclaimer</strong></h3>
            
            <p class="text-justify">
                All views conveyed by the writers/authors of filCASpro are solely their current opinions and do not reflect the views of filCASpro management, their respective parent companies or affiliates or the companies with which the site is associated, and may have been previously disseminated by them. The article’s opinions are based upon information they consider reliable, but neither filCASpro nor its affiliates, nor the companies with which such participants are affiliated, warrant its completeness or accuracy, and it should not be relied upon as such.
            </p>
            <p class="text-justify">
                The management of filCASpro would also like to express that we do not condone or approve any monetary payment or favours for just any articles to be published in “WHAT’S UP?” page of the said site.
            </p>
            
            
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