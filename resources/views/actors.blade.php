@extends('layouts.app')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">

    <link href="{{ asset('css/filcastpro-default.css') }}" rel="stylesheet">
@endsection

@section('content')

@include('partials.header')
<div class="container">

    <div class="row content">
        @include('partials.menu')
        
        <div class="col-md-12 content-body">
            <table class="dataTable" width="100%" role="grid" style="width: 80%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

        @include('partials.footer')
    </div>
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
            columns: [
                { data: 'id', name: 'id' },
                { 
                    sortable: false,
                    "render": function ( data, type, row, meta ) {
                            var thumb_image = row.thumb_image;
                            return `<img class="thumb_img" src="{{ asset('/storage/images/actors/` + thumb_image + `') }}" >`;
                    }
                },
                // { data: '{{ asset("/storage/images/actors/' + 'profile_image' + '")}}', name: 'profile_image' },
                { data: 'name', name: 'name' },
                { data: 'gender', name: 'gender' },
                { data: 'age', name: 'age' },
                { 
                    sortable: false,
                    "render": function ( data, type, row, meta ) {
                            var id = row.id;
                            return '<a href="web/show-actor/' + id + '" title="View" class="btn btn-primary glyphicon glyphicon-search" data-confirm="Are you sure you want to view this item?"> View </a>';
                    }
                }
            ]
            // columnDefs: [
            //                 {   
            //                     targets: 0, 
            //                     data: 'id',
            //                     name: 'id'
            //                 },
            //                 {   
            //                     targets: 1, 
            //                     data: 'profile_image',
            //                     name: 'profile_image'
            //                 },
            //                 {   
            //                     targets: 2, 
            //                     data: 'name',
            //                     name: 'name'
            //                 },
            //                 {   
            //                     targets: 3, 
            //                     data: 'gender',
            //                     name: 'gender'
            //                 },
            //                 {   
            //                     targets: 4, 
            //                     data: 'age',
            //                     name: 'age'
            //                 },
            //                 {   
            //                     targets: 5, 
            //                     data: 'age',
            //                 },
            //             ],
        });
    });

    
</script>
@endsection