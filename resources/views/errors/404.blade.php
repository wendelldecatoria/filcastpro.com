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
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Oops! The page you're looking for is not found.<h3> 
        </div>
        <div class="col-md-3"></div>
    </div>
    @include('partials.footer')
</div>
@endsection