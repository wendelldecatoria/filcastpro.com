@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/filcastpro-default.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/dhtmlxSuite/codebase/dhtmlx.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/dhtmlxSuite/codebase/fonts/font_roboto/roboto.css') }}">
@endsection

@section('content')
<div class="container">
    @include('partials.header')
    <div class="row content">
        @include('partials.menu')
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h3>Send us a message</h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

               
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

                <div class="form-group">
                    <label class="control-label">Message:</label>
                    {{ Form::textarea('message', null, array('class' => 'form-control', 'placeholder' => 'Enter Message')) }}
                </div>
                <button type="submit" class="btn btn-default btn-submit">Submit</button>
                
        </div>
        <div class="col-md-4"></div>
    </div>
    @include('partials.footer')
</div>
@endsection

@section('js')

<script src="{{ asset('vendor/dhtmlxSuite/codebase/dhtmlx.js') }}"></script>
<script src="{{ asset('js/helpers.js') }}"></script>
<script src="{{ asset('js/ajax-interceptor.js') }}"></script>
<script>

    $('document').ready(function(){
        $('.nav-contact').addClass('active');
    });

    function Initialize(){
        $('.form-control').val('');
    }

    $(".btn-submit").click(function(e){
	    	e.preventDefault();

	    	var _token = $("input[name='_token']").val();
	    	var name = $("input[name='name']").val();
            var email = $("input[name='email']").val();
            var contact = $("input[name='contact']").val();
            var message = $('textarea:input[name=message]').val();

	        $.ajax({
	            url: "{{ route('web.contact.store') }}",
	            type:'POST',
	            data: { _token:_token, name:name, email:email, contact:contact, message:message },
	            success: function(data) {
                    dhtmlx.alert({
                        title: 'Success',
                        text: 'We have recieved your message',
                       
                    });
                    Initialize();
                },
                error: function (err) {
								
				}
                   
	        });
	    }); 
</script>
@endsection

