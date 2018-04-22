@extends('adminlte::page')

@section('title', 'Filcaspro')

@section('content_header')
	<h1>Filcaspro<small> Edit What's In</small></h1>
@endsection

@section('ibillboard_css')
<!-- Froala Editor -->

  <link rel="stylesheet" href="{{ asset('vendor/froala/css/froala_editor.min.css')}}">
  <link rel="stylesheet" href="{{ asset('vendor/froala/css/froala_style.min.css')}}">

  <link rel="stylesheet"
          href="{{ asset('vendor/dhtmlxSuite/codebase/dhtmlx.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/dhtmlxSuite/codebase/fonts/font_roboto/roboto.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-tagsinput/src/bootstrap-tagsinput.css') }}">

  <link href="{{ asset('css/billboard.css') }}" rel="stylesheet">
@endsection

@section('content')
	<div class="box box-default">
		<div class="box-body">
			<div class="row">
				<div class="col-md-12">

                    @include('layouts/error_box')
                    {{Form::open(array('route' => array('whats-in.store'), 'method' => 'POST', 'class' =>'form-horizontal', 'files' => true))}}
                    {{ csrf_field() }}
                    <table class="table table-striped table-bordered table-hover table-sm datatable mdl-data-table dataTable" role="grid" style="width: 80%;">
							<tbody>
                            <tr>
                                <td>Name:</td>
                                <td>{{ Form::text('name', $whatsin->name ,array('class' => 'form-control','placeholder' => 'Enter Business Name')) }}</td>
                            </tr>
                            <tr>
                                <td>Location:</td>
                                <td>{{ Form::text('location', $whatsin->location ,array('class' => 'form-control','placeholder' => 'Enter Business Location')) }}</td>
                            </tr>
                            <tr>
                                <td>Contact:</td>
                                <td>{{ Form::text('contact', $whatsin->contact ,array('class' => 'form-control','placeholder' => 'Enter Business Contact')) }}</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>{{ Form::text('email', $whatsin->email ,array('class' => 'form-control','placeholder' => 'Enter Business Email')) }}</td>
                            </tr>
                            <tr>
                                <td>URL:</td>
                                <td>{{ Form::text('url', $whatsin->url,array('class' => 'form-control','placeholder' => 'Enter Business URL')) }}</td>
                            </tr>
                            <tr>
                                <td>Category:</td>
                                <td>{{Form::select('category[]', $categories, $whats_in_category ,['class' => 'form-control select2', 'multiple' => 'multiple'])}}</td>
                            </tr>
                            <tr>
                                <td>Tag:</td>
                                <td>{{ Form::text('tag', null ,array('class' => 'form-control', 'data-role' => "tagsinput", 'id' => 'bootstrap-tagsinput')) }}</td>
                            </tr>
                            <tr>
                                <td>Active (?):</td>
                                <td>{{Form::select('is_active', array( '' => '-----', 1 => 'Yes', 0 => 'No'), $whatsin->is_active ,['class' => 'form-control'])}}</td>
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

@section('ibillboard_js')

<script src="{{ asset('vendor/bootstrap-tagsinput/src/bootstrap-tagsinput.js') }}"></script>

<script type="text/javascript">

    $(document).ready(function() {
        $('.select2').select2();

        // var myJSON = JSON.stringify();

        // var elt = $('#bootstrap-tagsinput');
        // elt.tagsinput({
        //     itemValue: 'id',
        // });

        // elt.tagsinput('add', {"id":3,"text":"chicken"},{"id":4,"text":"inihaw"} );
    });

   
</script>
@endsection
