@extends('adminlte::page')

@section('title', 'Filcaspro')

@section('content_header')
	<h1>Filcaspro<small> What's Up Administration</small></h1>
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
					
						<a href="{{ route('whats-up.create') }}" title="Add new Article" class="btn btn-primary btn-xs">
							<i class="glyphicon glyphicon-plus"></i> Add new Article
						</a>
						<br/><br/>
					
					<div class="table-responsive">
					<table class="table table-striped" id="dataTable">
						<thead>
							<tr>
								<th>Writer</th>
								<th>Title</th>
								<th>Headline</th>   
								<th>Status</th>
								<th>Type</th>
								<th>Created At</th>
								<th>Updated At</th>
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
				ajax: '{{ route("whats-up.index") }}',
				columnDefs: [
					{
						'targets': 0,
						'data': 'writer',
						'name': 'writer',
					},
					{
						'targets': 1,
						'data': 'title',
						'name': 'title',
					},
					{
						'targets': 2,
						'data': 'headline',
						'name': 'headline',
					},
					{
						'targets': 3,
						'data': 'status',
						'name': 'status',
						mRender: function ( data, type, row ) {
							if(data == 0){
								return data = 'No';
							}else if(data == 1){
								return data = 'Yes';
							}else {
								return data = 'Archived';
							}
						}
					},
					{
						'targets': 4,
						'data': 'type',
						'name': 'type',
						mRender: function ( data, type, row ) {
							// return data ? "Article" : "Featured Artist";
							if(data == 1){
								return data = 'Article';
							}else if(data == 2){
								return data = 'Featured Artist';
							}else {
								return data = 'Others';
							}
						}
					},
					{
						'targets': 5,
						'data': 'created_at',
						'name': 'created_at',
						
					},
                    {
						'targets': 6,
						'data': 'updated_at',
						'name': 'updated_at',
						
					},
					{
						'targets': 7,
						'searchable': false,
						'sortable': false,
						'render': function (data, type, row) {
							return [
								'<a href="whats-up/' + row['id'] + '/edit" title="Edit" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a>' + " " +
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
				var url = '{{ route('whats-up.destroy', ':id') }}'.replace(':id', id);
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
							data: { _token: '{{csrf_token()}}' },
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