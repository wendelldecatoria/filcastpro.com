@extends('adminlte::page')

@section('title', 'Filcaspro')

@section('content_header')
<<<<<<< HEAD
	<h1>Filartpro<small> Artist Administration</small></h1>
=======
	<h1>FilCaspro<small> Artist Administration</small></h1>
>>>>>>> b6f7695ca4e21d994aa1eb29f3f396da87c9fad3
@endsection

@section('css')
    <link rel="stylesheet"
          href="{{ asset('css/app.css') }}">

    <link rel="stylesheet"
          href="{{ asset('vendor/dhtmlxSuite/codebase/dhtmlx.css') }}">

    <link rel="stylesheet"
          href="{{ asset('vendor/dhtmlxSuite/codebase/fonts/font_roboto/roboto.css') }}">

@endsection

@section('content')
{{ csrf_field() }}
	<div class="box box-default">
		<div class="box-body">
			<div class="row">
				<div class="col-xs-12">
					@include('layouts/error_box')
					
						<a href="{{ route('artists.create') }}" title="Add new Artist" class="btn btn-primary btn-xs">
							<i class="glyphicon glyphicon-plus"></i> Add new Artist
						</a>
						<br/><br/>
					
					<div class="table-responsive">
					<table class="table table-striped" id="dataTable">
						<thead>
							<tr>
								<th>Name</th>
								<th>Gender</th>
								<th>Manager</th>   
								<th>Contact</th>
								<th>Email</th>
								<th></th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
					
					</div>
				</div>
			</div>
		</div>
@endsection

@section('js')
	
	<script src="{{ asset('vendor/dhtmlxSuite/codebase/dhtmlx.js') }}"></script>
    <script src="{{ asset('js/helpers.js') }}"></script>
    <script src="{{ asset('js/ajax-interceptor.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function() {

			var dataTable = $('#dataTable').DataTable({
				processing: true,
				serverSide: true,
				deferRender: true,
				ajax: '{{ route("artists.index") }}',
				columnDefs: [
					{
						'targets': 0,
						'data': 'name',
						'name': 'name',
					},
					{
						'targets': 1,
						'data': 'gender',
						'name': 'gender',
					},
					{
						'targets': 2,
						'data': 'manager',
						'name': 'manager',
					},
					{
						'targets': 3,
						'data': 'contact',
						'name': 'contact',
					
					},
					{
						'targets': 4,
						'data': 'email',
						'name': 'email',
						
					},
					{
						'targets': 5,
						'searchable': false,
						'sortable': false,
						'render': function (data, type, row) {
							return [
								'<a href="artists/' + row['id'] + '/edit" title="Edit" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a>' + " " +
								'<button data-id="' + row.id + '" type="button" title="Delete" class="btn btn-danger btn-xs delete-btn"><i class="fa fa-trash"></i> Delete</button>'
							];
						},
					},
				]
			});

			/**
			* Delete the record.
			*/
			$(document).on("click", ".delete-btn", function () {
				var self = this;
				var id = $(this).attr('data-id');
				var url = '{{ route('artists.destroy', ':id') }}'.replace(':id', id);
				console.log(url);
				console.log(id);
				
				dhtmlx.confirm({
					title:"Confirm Deletion",
					type:"confirm-warning",
					text:"Do you really want to delete this record?",
					callback: function (res) {

						if(!res) {
							return;
						}
				
						$.ajax({
							type: "DELETE",
							url: url,
							success: function (response) {

								dhtmlx.alert({
									title: 'Record Deleted',
									text: 'The has been successfully deleted',
									callback: function () {
										dataTable.draw();
									}
								});

							},
							error: function (err) {
								
							}
						});
					}
				});
			});
		});
	</script>
@endsection