@extends('adminlte::page')

@section('title', 'Create Video')

@section('content_header')
	<h1>Filcaspro<small> Create What's Up Video</small></h1>
@endsection

@section('css')
<!-- Froala Editor -->        
	
  <link rel="stylesheet" href="{{ asset('vendor/froala/css/froala_editor.min.css')}}">
  <link rel="stylesheet" href="{{ asset('vendor/froala/css/froala_style.min.css')}}">

  <link rel="stylesheet"
          href="{{ asset('vendor/dhtmlxSuite/codebase/dhtmlx.css') }}">

    <link rel="stylesheet"
          href="{{ asset('vendor/dhtmlxSuite/codebase/fonts/font_roboto/roboto.css') }}">

  <link href="{{ asset('css/billboard.css') }}" rel="stylesheet">
@endsection

@section('content')
	<div class="box box-default">
		<div class="box-body">
			<div class="row">
				<div class="col-md-12">
                 
                    @include('layouts/error_box') 
                    {{Form::open(array('route' => array('video.store'), 'method' => 'POST', 'class' =>'form-horizontal', 'files' => true))}}
                    {{ csrf_field() }}
                    <table class="table table-striped table-bordered table-hover table-sm datatable mdl-data-table dataTable" role="grid" style="width: 80%;">
							<tbody>
                           <tr>
                                <td>Thumbnail:</td>
                                <td> {{ Form::file('thumbnail') }}</td>
                            </tr>
                            <tr>
                                <td>Title:</td>
                                <td>{{ Form::text('title', null ,array('class' => 'form-control','placeholder' => 'Enter Video Title')) }}</td>
                            </tr>
                              <tr>
                                <td>URL:</td>
                                <td>{{ Form::text('url', null ,array('class' => 'form-control','placeholder' => 'Enter Video URL')) }}</td>
                            </tr>
                            <tr>
                                <td>Default (?):</td>
                                <td>{{Form::select('is_default', array( '' => '-----', 1 => 'Yes', 0 => 'No'), null ,['class' => 'form-control'])}}</td>
                            </tr>
                             <tr>
                                <td>Active (?):</td>
                                <td>{{Form::select('is_active', array( '' => '-----', 1 => 'Yes', 0 => 'No'), null,['class' => 'form-control'])}}</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>       
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="btn-submit-container">
                    <button type="submit" class="btn btn-primary" placeholder="Submit"><i class="glyphicon glyphicon-check"></i> Save</button>
                        &nbsp;
                        <a href="{{ route('video.index') }}" title="Cancel" class="btn btn-primary btn cancel_Btn">
                            <i class="glyphicon glyphicon-remove-circle"></i> Cancel
                        </a>
                    </div>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection

@section('js')

@endsection
