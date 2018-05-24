@extends('adminlte::page')

@section('title', 'Create Article')

@section('content_header')
	<h1>Filcaspro<small> Create What's Up Article</small></h1>
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
                    {{Form::open(array('route' => array('whats-on.update', $whatson->id), 'method' => 'PUT', 'class' =>'form-horizontal', 'files' => true))}}
                    {{ csrf_field() }}
                    {{ Form::hidden('id', $whatson->id) }}
                    <table class="table table-striped table-bordered table-hover table-sm datatable mdl-data-table dataTable" role="grid" style="width: 80%;">
							<tbody>
                            <tr>
                                <td>Title:</td>
                                <td>{{ Form::text('title', $whatson->title ,array('class' => 'form-control','placeholder' => 'Enter Event Title')) }}</td>
                            </tr>
                            <tr>
                                <td>Venue:</td>
                                <td>{{ Form::text('venue', $whatson->venue ,array('class' => 'form-control','placeholder' => 'Enter Event Venue')) }}</td>
                            </tr>
                            <tr>
                                <td>URL:</td>
                                <td>{{ Form::text('url', $whatson->url ,array('class' => 'form-control','placeholder' => 'Enter Event URL')) }}</td>
                            </tr>
                            <tr>
                                <td>Date From:</td>
                                <td>
                                  
                                        <div class='input-group date'>
                                            <input type='text' class="form-control"  name="date_from" id='datetimepicker_from' value="{{$whatson->date_from}}"/>
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                   
                                </td>
                            </tr>
                            <tr>
                                <td>Date To:</td>
                                <td>
                                   
                                        <div class='input-group date'>
                                            <input type='text' class="form-control"  name="date_to" id='datetimepicker_to' value="{{$whatson->date_to}}" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                   
                                </td>
                            </tr>
                            <tr>
                                <td>Active (?):</td>
                                <td>{{Form::select('is_active', array( '' => '-----', 1 => 'Yes', 0 => 'No'), $whatson->is_active ,['class' => 'form-control'])}}</td>
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
                        <a href="{{ route('whats-on.index') }}" title="Cancel" class="btn btn-primary btn cancel_Btn">
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

<script type="text/javascript">
		 $(document).ready(function(){
            $('#datetimepicker_from').datetimepicker({ format: 'LLL'});
            $('#datetimepicker_to').datetimepicker({ format: 'LLL'});
        });		

        $('#datetimepicker_from').datetimepicker({
            useCurrent: false, //this is important as the functions sets the default date value to the current value 
            format: 'YYYY-MM-DD h:mm:ss'
        });
       $('#datetimepicker_to').datetimepicker({
            useCurrent: false, //this is important as the functions sets the default date value to the current value 
            format: 'YYYY-MM-DD h:mm:ss'
        });
</script>
@endsection
