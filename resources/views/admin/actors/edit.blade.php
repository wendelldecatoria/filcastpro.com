@extends('adminlte::page')

@section('title', 'Edit Artist')

@section('content_header')
	<h1>Filartpro<small> Artist Administration</small></h1>
@endsection

@section('css')
<!-- Froala Editor -->        
	
  <link rel="stylesheet" href="{{ asset('vendor/froala/css/froala_editor.min.css')}}">
  <link rel="stylesheet" href="{{ asset('vendor/froala/css/froala_style.min.css')}}">
@endsection

@section('content')
	<div class="box box-default">
		<div class="box-body">
			<div class="row">
				<div class="col-xs-12">
                @foreach($actor as $act)
				    @include('layouts/error_box')
                    {{Form::open(array('route' => array('artists.update', $act->id), 'method' => 'PUT', 'class' =>'form-horizontal'))}}
					{{ csrf_field() }}
                    {{ Form::hidden('id', $act->id) }}
                    <div class="form-group">
                        <label for="name" class="col-xs-2 control-label">Name:</label>
                        <div class="col-xs-8">
                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $act->name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="first_name" class="col-xs-2 control-label">First name:</label>
                        <div class="col-xs-8">
                            <input type="text" name="first_name" class="form-control" placeholder="First name" value="{{ $act->first_name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="last_name" class="col-xs-2 control-label">Last name:</label>
                        <div class="col-xs-8">
                            <input type="text" name="last_name" class="form-control" placeholder="Last name" value="{{ $act->last_name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contact" class="col-xs-2 control-label">Contact:</label>
                        <div class="col-xs-8">
                            <input type="text" name="contact" class="form-control" placeholder="contact" value="{{ $act->contact }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="age" class="col-xs-2 control-label">Age:</label>
                        <div class="col-xs-8">
                            <input type="text" name="age" class="form-control" placeholder="age" value="{{ $act->age }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gender" class="col-xs-2 control-label">Gender:</label>
                        <div class="col-xs-8">
                            <input type="text" name="gender" class="form-control" placeholder="gender" value="{{ $act->gender }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="height" class="col-xs-2 control-label">Height:</label>
                        <div class="col-xs-8">
                            <input type="text" name="height" class="form-control" placeholder="height" value="{{ $act->height }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="vital" class="col-xs-2 control-label">Vital:</label>
                        <div class="col-xs-8">
                            <input type="text" name="vital" class="form-control" placeholder="vital" value="{{ $act->vital }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="manager" class="col-xs-2 control-label">Manager:</label>
                        <div class="col-xs-8">
                            <input type="text" name="manager" class="form-control" placeholder="manager" value="{{ $act->manager }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-xs-2 control-label">Email:</label>
                        <div class="col-xs-8">
                            <input type="text" name="email" class="form-control" placeholder="email" value="{{ $act->email }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="online_profile" class="col-xs-2 control-label">Online profile:</label>
                        <div class="col-xs-8">
                            <input type="text" name="online_profile" class="form-control" placeholder="online_profile" value="{{ $act->online_profile }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="works" class="col-xs-2 control-label">Works:</label>
                        <div class="col-xs-8">
                            <!-- <input type="textarea" name="works" class="form-control" placeholder="works" value="{{ $act->works }}"> -->
                            <textarea name="works" id="froala-editor" placeholder="works" class="form-control">{{ $act->works }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="vital" class="col-xs-2 control-label">Vital:</label>
                        <div class="col-xs-8">
                            <input type="text" name="vital" class="form-control" placeholder="vital" value="{{ $act->vital }}">
                        </div>
                    </div>

					<div class="form-group">
						<div class="col-xs-1 col-xs-offset-2">
							<button type="submit" class="btn btn-primary" placeholder="Submit"><i class="glyphicon glyphicon-check"></i> Save</button>
						</div>
						<div class="col-xs-1">
							<a href="{{ route('artists.index') }}" title="Cancel" class="btn btn-primary btn cancel_Btn">
										<i class="glyphicon glyphicon-remove-circle"></i> Cancel
							</a>
						</div>
					</div>
					<input type="hidden" name="id" value="{{ $act->id }}">
                    @endforeach
					{{ Form::close() }}
				</div>
			</div>
		</div>
		
@endsection

@section('js')

<script type='text/javascript' src="{{ asset('vendor/froala/js/froala_editor.min.js')}}"></script>
<script type="text/javascript">
				
				$(function() {
					$('textarea#froala-editor').froalaEditor({
					  iframe: true,
					})
				  });
</script>
@endsection