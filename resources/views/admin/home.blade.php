@extends('adminlte::page')

@section('ibillboard_css')
    <link href="{{ asset('css/billboard.css') }}" rel="stylesheet">
@endsection

@section('title', 'Filcaspro Admin')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>You are logged in!</p>
@stop
