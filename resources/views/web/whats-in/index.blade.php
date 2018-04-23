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
              <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.021120315872!2d121.03038766479253!3d14.65474257967649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7028377369f%3A0x6c0443649727a0a5!2sJollibee!5e0!3m2!1sen!2sph!4v1524493222519" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
          </div>
        <div class="col-md-1"></div>
    </div>
    @include('partials.footer')
</div>
@endsection

@section('js')
<script>
    $('document').ready(function(){
        $('.nav-whats-in').addClass('active');
    });
</script>
@endsection
