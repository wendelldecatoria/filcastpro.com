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
           Contact Page
        </div>

        @include('partials.footer')
    </div>
</div>
@endsection

@section('js')
<script>
    $('document').ready(function(){
        $('.nav-contact').addClass('active');
    });
</script>
@endsection