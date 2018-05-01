@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/filcastpro-default.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    @include('partials.header')
    <div class="row content">
        @include('partials.menu')
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="refined-search">
                {{Form::open(array('class' => 'form-inline'))}}
                    {{ Form::hidden('_token', csrf_token() ) }}
                    <div class="row">
                        <div class="form-group">
                            <label for="selectCategory"><small>Category:</small></label> &nbsp;
                            {{ Form::select('category', $categories , null, array('class' => 'form-control input-sm', 'id' => 'selectCategory')) }}
                        </div>
                        &nbsp; &nbsp;
                        <div class="form-group">
                            <label for="selectName"><small>Name:</small></label> &nbsp;
                            {{ Form::text('name', null , array('class' => 'form-control input-sm', 'id' => 'selectName')) }}
                        </div>
                        &nbsp; &nbsp;
                        <div class="form-group">
                            <label for="selectProduct"><small>Tags:</small></label> &nbsp;
                            {{ Form::text('tag', null , array('class' => 'form-control input-sm', 'id' => 'selectTag')) }}
                        </div>
                        &nbsp; &nbsp;
                        <div class="form-group">
                            <label for="selectLocation"><small>Where:</small></label> &nbsp;
                            {{ Form::text('location', null , array('class' => 'form-control input-sm', 'id' => 'selectLocation')) }}
                        </div>
                        &nbsp; &nbsp;
                        <div class="form-group">
                            <button class="btn btn-default btn-submit">Search</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div> 
            <div class="ac-cont">
                @foreach($whatsin as $whtsin)
                    <a href="{{ route('web.whats-in.show' , $whtsin->id)}}" title="View">
                        <div class="actor-tile">
                            <img class="image-thumbnail" src="{{ asset('/storage/images/business/' . $whtsin->image) }}" >
                            <p>{{$whtsin->name}}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    @include('partials.footer')
</div>
@endsection

@section('js')
<script>
    $('document').ready(function(){
        $('.nav-whats-in').addClass('active');
    });

    $(".btn-submit").click(function(e){
	    	e.preventDefault();

	    	var _token = $("input[name='_token']").val();
	    	var category = $("#selectCategory").val();
            var name = $("input[name='name']").val();
            var location = $("input[name='location']").val();
            var tag = $("input[name='tag']").val();

	        $.ajax({
	            url: "{{ route('web.whats-in.search') }}",
	            type:'POST',
	            data: {_token:_token, category:category, name:name, location:location, tag:tag},
	            success: function(data) {
                    // empty out container
                    $('.ac-cont').empty();

                    if(data.length == 0){
                        $('.ac-cont').append('<br><h3>No Results Found</h3>');
                    }else if (data.length > 0){
                        $.each (data, function (i,item) {
                            $('.ac-cont').append(`<a href="whats-in/` + item.id + `" title="View">` +
                                                    '<div class="actor-tile">' + 
                                                        `<img class="image-thumbnail" src="{{ asset('/storage/images/business/` + item.image + `') }}" >` +
                                                        '<p>' + item.name + '</p>' + 
                                                    '</div>' + 
                                                '</a>');
                        });
                    }else{
                        // do nothing
                    }
                }
                   
	        });
	    }); 
</script>
@endsection
