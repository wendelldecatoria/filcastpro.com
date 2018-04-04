@extends('adminlte::page')

@section('title', 'Filcaspro')

@section('content_header')
	<h1>Filcaspro<small> Artist Inquiries</small></h1>
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
					<div class="table-responsive">
					<table class="table table-striped" id="dataTable">
						<thead>
							<tr>
								<th>Artist</th>
								<th>Name</th>
								<th>Email</th>
								<th>Contact</th>   
								<th>Date</th>
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
				ajax: '{{ route("inquiry.index") }}',
				 "order": [[ 4, "desc" ]],
				columnDefs: [
					{
						'targets': 0,
						'data': 'artist',
						'name': 'artist',
					},
					{
						'targets': 1,
						'data': 'name',
						'name': 'name',
					},
					{
						'targets': 2,
						'data': 'email',
						'name': 'email',
					},
					{
						'targets': 3,
						'data': 'contact',
						'name': 'contact',
					},
					{
						'targets': 4,
						'data': 'created_at',
						'name': 'created_at',
						
					},
				]
			});
		});
	</script>
@endsection