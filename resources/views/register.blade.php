@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/filcastpro-default.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    @include('partials.header')
    <div class="row content">
        @include('partials.menu')
        <div class="col-md-4"></div>
        <div class="col-md-4">
           <h3>Register as an Artist</h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{Form::open(array('action' => 'WebsiteController@storeRegister', 'method' => 'post','files' => true))}}
                {{ Form::hidden('_token', csrf_token() ) }}
                
                <div class="form-group">
                    <label class="control-label">Name:</label>
                    {{ Form::text('name', null ,array('class' => 'form-control', 'placeholder' => 'Enter Name')) }}
                </div>

                <div class="form-group">
                    <label class="control-label">Email:</label>
                    {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Enter Email')) }}
                </div>

                <div class="form-group">
                    <label class="control-label">Contact:</label>
                    {{ Form::text('contact', null, array('class' => 'form-control', 'placeholder' => 'Enter Contact')) }}
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            {!! Form::close() !!}
            <br><br>
        </div>
        <div class="col-md-4"></div>
    </div>
    @include('partials.footer')
</div>
@endsection

@section('js')
<script>
    $('document').ready(function(){
        $('.nav-register').addClass('active');
    });
</script>
@endsection

