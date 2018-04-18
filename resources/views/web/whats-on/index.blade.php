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
                  <img class="img-responsive" src="images/whats-on-title.png" style="display: inline-block;">
              </div>
          </div>
          <div class="row">
            <div class="col-md-2 col-md-offset-1"><h3 class="event-title">Today</h3></div>
            <div class="col-md-2"><h3 class="event-title">This Week</h3></div>
            <div class="col-md-2"><h3 class="event-title">Next Week</h3></div>
            <div class="col-md-2"><h3 class="event-title">This Month</h3></div>
            <div class="col-md-2"><h3 class="event-title">Next Month</h3></div>
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
        $('.nav-whats-on').addClass('active');
    });
</script>
@endsection
