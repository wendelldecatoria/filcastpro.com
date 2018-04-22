@extends('adminlte::page')

@section('title', 'Edit Artist')

@section('content_header')
	<h1>Filcaspro<small> Update Artist Information</small></h1>
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
            <!-- Images used to open the lightbox -->
            <div class="row image-container" style="text-align:center">
                @foreach($images as $image)
                    <div class="column image-{{$image->id}}">
                        <!-- <img  src="{{asset('/storage/images/actors/'. $image->file_name )}}" width="170" onclick="openModal();currentSlide({{$loop->iteration}})" class="hover-shadow"> -->
                        <span class="glyphicon glyphicon-remove icon-remove delete-btn" data-id="{{$image->id}}"></span>
                        <img  src="{{asset('/storage/images/actors/'. $image->file_name )}}" class="img-thumbnail img-responsive edit-image">
                    </div>
                @endforeach
            </div>
			<div class="row">
				<div class="col-md-12">
                   
                    @include('layouts/error_box')
                    {{Form::open(array('route' => array('artists.update', $actor[0]->id), 'method' => 'PUT', 'class' =>'form-horizontal', 'files' => true))}}
                    {{ csrf_field() }}
                    {{ Form::hidden('id', $actor[0]->id) }} 
                    <table class="table table-striped table-bordered table-hover table-sm datatable mdl-data-table dataTable" role="grid" style="width: 80%;">
							<tbody>
                            <tr>
                                <td>Name:</td>
                                <td>{{ Form::text('name', $actor[0]->name ,array('class' => 'form-control','placeholder' => 'Enter artist name')) }}</td>
                            </tr>
                            <tr>
                                <td>First name::</td>
                                <td>{{ Form::text('first_name', $actor[0]->first_name ,array('class' => 'form-control','placeholder' => 'Enter artist first name')) }}</td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td>{{ Form::text('last_name', $actor[0]->last_name ,array('class' => 'form-control','placeholder' => 'Enter artist last name')) }}</td>
                            </tr>
                            <tr>
                                <td>Contact:</td>
                                <td>{{ Form::text('contact', $actor[0]->contact ,array('class' => 'form-control','placeholder' => 'Enter artist contact')) }}</td>
                            </tr>
                            <tr>
                                <td>Age:</td>
                                <td>{{ Form::number('age', $actor[0]->age ,array('class' => 'form-control','placeholder' => 'Enter artist age')) }}</td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td>{{Form::select('gender', array('' => '-----', 'male' => 'Male', 'female' => 'Female'),  $actor[0]->gender,['class' => 'form-control'])}}</td>
                            </tr>
                            <tr>
                                <td>Height:</td>
                                <td>{{ Form::text('height', $actor[0]->height ,array('class' => 'form-control','placeholder' => 'Enter artist height')) }}</td>
                            </tr>
                            <tr>
                                <td>Vital:</td>
                                <td>{{ Form::text('vital', $actor[0]->vital ,array('class' => 'form-control','placeholder' => 'Enter artist vital stats')) }}</td>
                            </tr>
                            <tr>
                                <td>Manager:</td>
                                <td>{{ Form::text('manager', $actor[0]->manager ,array('class' => 'form-control','placeholder' => 'Enter artist manager')) }}</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>{{ Form::text('email', $actor[0]->email ,array('class' => 'form-control','placeholder' => 'Enter artist email')) }}</td>
                            </tr>
                            <tr>
                                <td>Online Profile:</td>
                                <td>{{ Form::text('online_profile', $actor[0]->online_profile ,array('class' => 'form-control','placeholder' => 'Enter artist online profile')) }}</td>
                            </tr>
                            <tr>
                                <td>Works:</td>
                                <td>{{ Form::textarea('works', $actor[0]->works ,array('class' => 'form-control','id' => 'froala-editor', 'placeholder' => 'Enter artist works')) }}</td>
                            </tr>
                            <tr>
                                <td>Skills:</td>
                                <td>{{Form::select('skills[]', $skills , $actorSkills ,['class' => 'form-control select2', 'multiple' => 'multiple'])}}</td>
                            </tr>
                            <tr>
                                <td>Is Active(?):</td>
                                <td>{{Form::select('is_active', array( '' => '-----', 1 => 'Yes', 0 => 'No'),  $actor[0]->is_active,['class' => 'form-control'])}}</td>
                            </tr>
                            <tr>
                                <td>Thumb Image:</td>
                                <td> {{ Form::file('thumb') }}</td>
                            </tr>
                            <tr>
                                <td>Profile Images:</td>
                                <td> <input type="file" name="photos[]" multiple /></td>
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
                        <a href="{{ route('artists.index') }}" title="Cancel" class="btn btn-primary btn cancel_Btn">
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

    $(document).ready(function() {

        $('.select2').select2().find(':selected');;

        /**
        * Delete the record.
        */
        $(document).on("click", ".delete-btn", function () {
            var self = this;
            var id = $(this).attr('data-id');
            var url = '{{ route('images.destroy', ':id') }}'.replace(':id', id);
            console.log(url);
            console.log(id);

            dhtmlx.confirm({
                title:"Confirm Deletion",
                type:"confirm-warning",
                text:"Do you really want to delete this image?",
                callback: function (res) {

                    if(!res) {
                        return;
                    }
            
                    $.ajax({
                        type: "DELETE",
                        url: url,
                        success: function (response) {

                            dhtmlx.alert({
                                title: 'Image Deleted',
                                text: 'The image has been successfully deleted',
                                callback: function () {
                                    $('.image-' +id).remove();
                                }
                            });

                        },
                        error: function (err) {
                            console.log(err);
                        }
                    });
                }
            });
        });
    });
        
        
</script>
@endsection
