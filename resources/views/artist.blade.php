@extends('layouts.app')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">

    <link href="{{ asset('css/filcastpro-default.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    @include('partials.header')
    <div class="row content">
        @include('partials.menu')
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h3>Search for an Artist</h3>
            <div class="ac-cont">
                @foreach($actors as $actor)
                    <a href="show-actor/{{$actor->id}}" title="View">
                        <div class="actor-tile">
                            <img class="img-thumbnail image-thumbnail" src="{{ asset('/storage/images/actors/' . $actor->thumb_image) }}" >
                            <p>{{$actor->name}}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    @include('partials.footer')
</div>
@endsection

@section('js')
 <!-- DataTables -->
 <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
    $('document').ready(function(){
        $('.nav-actors').addClass('active');

    }); // end of ready

</script>
@endsection