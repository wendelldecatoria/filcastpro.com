@extends('adminlte::page')

@section('title', 'Filcaspro')

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
                    {{Form::open(array('route' => array('whats-up.store'), 'method' => 'POST', 'class' =>'form-horizontal', 'files' => true))}}
                    {{ csrf_field() }}
                    <table class="table table-striped table-bordered table-hover table-sm datatable mdl-data-table dataTable" role="grid" style="width: 80%;">
							<tbody>
                            <tr>
                                <td>Writer:</td>
                                <td>{{Form::select('writer', $writers, null ,['class' => 'form-control'])}}</td>
                            </tr>
                            <tr>
                                <td>Headline:</td>
                                <td>{{ Form::text('headline', null ,array('class' => 'form-control','placeholder' => 'Enter Article Headline')) }}</td>
                            </tr>
                            <!-- <tr>
                                <td>Title:</td>
                                <td>{{ Form::text('title', null ,array('class' => 'form-control','placeholder' => 'Enter Article Title')) }}</td>
                            </tr> -->
                            <tr>
                                <td>Content:</td>
                                <td>{{ Form::textarea('content', null ,array('class' => 'form-control','id' => 'froala-editor','placeholder' => 'Enter Article Content')) }}</td>
                            </tr>
                            <tr>
                                <td>Status:</td>
                                <td>{{Form::select('status', array( '' => '-----', 1 => 'Yes', 0 => 'No', 2 => 'Archive'), null ,['class' => 'form-control'])}}</td>
                            </tr>
                            <tr>
                                <td>Type:</td>
                                <td>{{Form::select('type', array( '' => '-----', 1 => 'Article', 2 => 'Featured Artist'), null ,['class' => 'form-control'])}}</td>
                            </tr>
                            <tr>
                                <td>Image:</td>
                                <td> {{ Form::file('image') }}</td>
                            </tr>
                            <tr>
                                <td>Article Banner:</td>
                                <td> {{ Form::file('article_banner') }}</td>
                            </tr>
                            <tr>
                                <td>URL:</td>
                                <td>{{ Form::text('url', null ,array('class' => 'form-control','placeholder' => 'Enter Article URL')) }}</td>
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
                        <a href="{{ route('whats-up.index') }}" title="Cancel" class="btn btn-primary btn cancel_Btn">
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
