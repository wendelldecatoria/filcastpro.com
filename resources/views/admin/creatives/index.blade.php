@extends('adminlte::page')

@section('title', 'Filcaspro')

@section('content_header')
	<h1>Filcaspro<small> Creatives Administration</small></h1>
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
					
						<a href="{{ route('creatives.create') }}" title="Add new Creative" class="btn btn-primary btn-xs">
							<i class="glyphicon glyphicon-plus"></i> Add new Creative
						</a>
						<br/><br/>
					
					<div class="table-responsive">
					<table class="table table-striped" id="dataTable">
						<thead>
							<tr>
								<th>Name</th>
								<th>Gender</th>
								<th>Management</th>   
								<th>Contact</th>
								<th>Email</th>
								<th>Active (?)</th> 
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
				ajax: '{{ route("creatives.index") }}',
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
						'data': 'management',
						'name': 'management',
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
						'data': 'is_active',
						'name': 'is_active',
						 mRender: function ( data, type, row ) {
							if(data == 0){
								return data = 'No';
							}else if(data == 1){
								return data = 'Yes';
							}else {
								
							}
						}
					},
					{
						'targets': 6,
						'searchable': false,
						'sortable': false,
						'render': function (data, type, row) {
							return [
								'<a href="creatives/' + row['id'] + '/edit" title="Edit" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a>' + " " +
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
				var url = '{{ route('creatives.destroy', ':id') }}'.replace(':id', id);
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