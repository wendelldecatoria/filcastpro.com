@extends('adminlte::page')

@section('title', 'Filcaspro')

@section('content_header')
	<h1>Filcaspro<small> Edit Writer</small></h1>
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
                    {{Form::open(array('route' => array('writer.update', $writer->id), 'method' => 'PUT', 'class' =>'form-horizontal', 'files' => true))}}
                    {{ csrf_field() }}
                    {{ Form::hidden('id', $writer->id) }} 
                    <table class="table table-striped table-bordered table-hover table-sm datatable mdl-data-table dataTable" role="grid" style="width: 80%;">
                        <tbody>
                            <tr>
                                <td>Name:</td>
                                <td>{{Form::text('name', $writer->name , array('class' => 'form-control','placeholder' => 'Enter Writer Name')) }}</td>
                            </tr>
                            <tr>
                                <td>Title:</td>
                                <td>{{ Form::text('title', $writer->title , array('class' => 'form-control','placeholder' => 'Enter Writer Title')) }}</td>
                            </tr>
                            <tr>
                                <td>Image:</td>
                                <td> {{ Form::file('image') }}</td>
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
                        <a href="{{ route('writer.index') }}" title="Cancel" class="btn btn-primary btn cancel_Btn">
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

<script src="{{ asset('vendor/dhtmlxSuite/codebase/dhtmlx.js') }}"></script>
<script src="{{ asset('js/helpers.js') }}"></script>
<script src="{{ asset('js/ajax-interceptor.js') }}"></script>
<script type='text/javascript' src="{{ asset('vendor/froala/js/froala_editor.min.js')}}"></script>
<script type="text/javascript">
				
    $(function() {
        $('textarea#froala-editor').froalaEditor({
            iframe: true,
        })
    });
  
</script>
@endsection
