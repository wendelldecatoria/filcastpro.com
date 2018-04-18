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
            <div class="col-md-2 col-md-offset-1 col-event">
              <h3 class="event-header">Today</h3>
              @foreach($today as $event)
              <div class="row">
                  @if(!empty($event->url))<a href="{{ $event->url }}" target="_blank"> @endif
                    <p class="event-title"> {{ $event->title }}</p>
                  @if(!empty($event->url))</a> @endif
                  <p>{{ date('h:i a', strtotime($event->date_from)) }}, {{ $event->venue }}</p>
              </div>
              @endforeach
            </div>
            <div class="col-md-2 col-event">
              <h3 class="event-header">This Week</h3>

              @foreach($thisWeek as $event)
                <div class="row">
                    @if(!empty($event->url))<a href="{{ $event->url }}" target="_blank"> @endif
                      <p class="event-title"> {{ $event->title }}</p>
                    @if(!empty($event->url))</a> @endif
                    <p>{{ date('l', strtotime($event->date_from)) }} , {{ date('h:i a', strtotime($event->date_from)) }}, {{ $event->venue }}</p>
                </div>
              @endforeach
            </div>
            <div class="col-md-2 col-event">
              <h3 class="event-header">Next Week</h3>

              @foreach($nextWeek as $event)
                <div class="row">
                    @if(!empty($event->url))<a href="{{ $event->url }}" target="_blank"> @endif
                      <p class="event-title"> {{ $event->title }}</p>
                    @if(!empty($event->url))</a> @endif
                    <p>{{ date('l', strtotime($event->date_from)) }} , {{ date('h:i a', strtotime($event->date_from)) }}, {{ $event->venue }}</p>
                </div>
              @endforeach
            </div>
            <div class="col-md-2 col-event">
              <h3 class="event-header">This Month</h3>

              @foreach($thisMonth as $event)
                <div class="row">
                    @if(!empty($event->url))<a href="{{ $event->url }}" target="_blank"> @endif
                      <p class="event-title"> {{ $event->title }}</p>
                    @if(!empty($event->url))</a> @endif
                    <p>{{ date('l', strtotime($event->date_from)) }} , {{ date('h:i a', strtotime($event->date_from)) }}, {{ $event->venue }}</p>
                </div>
              @endforeach
            </div>
            <div class="col-md-2 col-event">
              <h3 class="event-header">Next Month</h3>

              @foreach($nextMonth as $event)
                <div class="row">
                    @if(!empty($event->url))<a href="{{ $event->url }}" target="_blank"> @endif
                      <p class="event-title"> {{ $event->title }}</p>
                    @if(!empty($event->url))</a> @endif
                    <p>{{ date('l', strtotime($event->date_from)) }} , {{ date('h:i a', strtotime($event->date_from)) }}, {{ $event->venue }}</p>
                </div>
              @endforeach
            </div>
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
