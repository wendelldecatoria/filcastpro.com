@extends('adminlte::page')

@section('title', 'Filcaspro')

@section('content_header')
	<h1>Filcaspro<small> Skills Adminitration</small></h1>
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
					
                    <a href="{{ route('skill.create') }}" title="Add new Skill" class="btn btn-primary btn-xs">
                        <i class="glyphicon glyphicon-plus"></i> Add new Skill
                    </a>
                    <br/><br/>			
					<div class="table-responsive">
					<table class="table table-striped" id="dataTable">
						<thead>
							<tr>
								<th>Name</th>
                                <th>Group</th>
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
				ajax: '{{ route("skill.index") }}',
				columnDefs: [
					{
						'targets': 0,
						'data': 'name',
						'name': 'name',
					},
                    {
						'targets': 1,
						'data': 'group',
						'name': 'group',
                        mRender: function ( data, type, row ) {
							if(data == 'actor'){
								return data = 'Actors';
							}else if(data == 'director'){
								return data = 'Directors';
							}else {
								//  
							}
						}
					},
                    {
						'targets': 2,
						'searchable': false,
						'sortable': false,
						'render': function (data, type, row) {
							return [
								'<a href="skill/' + row['id'] + '/edit" title="Edit" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a>' + " " +
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
				var url = '{{ route('skill.destroy', ':id') }}'.replace(':id', id);
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