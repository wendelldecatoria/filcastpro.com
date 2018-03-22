@extends('layouts.app')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">

    <link href="{{ asset('css/filcastpro-default.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    @include('partials.header')
    <div class="row content">
        @include('partials.menu')
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <!-- <table class="table table-inverse table-bordered table-sm dataTable" width="100%" role="grid"> -->
            <table class="table table-striped table-bordered table-hover table-sm datatable mdl-data-table dataTable" width="100%" role="grid" style="width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <br><br>
        </div>
        <div class="col-md-3"></div>
    </div>
    @include('partials.footer')
</div>
@endsection

@section('js')
 <!-- DataTables -->
 <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
    $('document').ready(function(){
        $('.nav-actors').addClass('active');

        $('.dataTable').dataTable({
            processing: true,
            serverSide: true,
            ajax: '{{route('web.get-actors')}}',
            columnDefs: [
                            {   
                                targets: 0, 
                                data: 'id',
                                name: 'id'
                            },
                            {   
                                targets: 1,
                                'searchable': false,
                                'sortable': false,
                                'render': function (data, type, row) {
                                    return [
                                        `<a href="show-actor/` 
                                        + row.id 
                                        + `" title="View" data-confirm="Are you sure you want to view this item?"><img class="thumb_img" src="{{ asset('/storage/images/actors/` 
                                        + row.thumb_image 
                                        + `') }}" ></a>`
                                    ];
                                },
                            },
                            {   
                                targets: 2, 
                                data: 'name',
                                name: 'name'
                            },
                            {   
                                targets: 3, 
                                data: 'gender',
                                name: 'gender'
                            },
                            {   
                                targets: 4, 
                                data: 'age',
                                name: 'age'
                            },
                        ],
        }); // end of datatable

    }); // end of ready

</script>
@endsection