@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/filcastpro-default.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    @include('partials.header')
    <div class="row content">
        @include('partials.menu')
        <div class="col-md-3"></div>
        <div class="col-md-6">
           
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{Form::open(array('action' => 'WebsiteController@store', 'method' => 'post','files' => true))}}
                {{ Form::hidden('_token', csrf_token() ) }}
                
                <div class="form-group">
                    <label class="control-label">Name:</label>
                    {{ Form::text('name', null ,array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    <label class="control-label">Email:</label>
                    {{ Form::text('email', null, array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    <label class="control-label">Contact:</label>
                    {{ Form::text('contact', null, array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    <label class="control-label">Message:</label>
                    {{ Form::textarea('message', null, array('class' => 'form-control')) }}
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            {!! Form::close() !!}
            <br><br>
        </div>
        <div class="col-md-3"></div>
    </div>
    @include('partials.footer')
</div>
@endsection

@section('js')
<script>
    $('document').ready(function(){
        $('.nav-contact').addClass('active');
    });
</script>
@endsection

