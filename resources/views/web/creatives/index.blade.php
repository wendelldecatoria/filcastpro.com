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
                            <label for="selectSkill"><small>Skill of:</small></label> &nbsp;
                            {{ Form::select('skill', $skills , null, array('class' => 'form-control input-sm', 'id' => 'selectSkill')) }}
                        </div>
                         &nbsp; &nbsp;
                        <div class="form-group">
                            <label for="selectName"><small>Name:</small></label> &nbsp;
                            {{ Form::text('name', null , array('class' => 'form-control input-sm', 'id' => 'selectName')) }}
                        </div>
                         &nbsp; &nbsp;
                        <div class="form-group">
                            <button class="btn btn-default btn-submit">Search</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>

            <div class="ac-cont">
                @foreach($creatives as $creative)
                    <a href="{{ route('creative.show', $creative->id)}}" title="View">
                        <div class="actor-tile">
                            <img class="image-thumbnail" src="{{ asset('/storage/images/creatives/' . $creative->thumb_image) }}" >
                            <p>{{$creative->name}}</p>
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
        $('.nav-creatives').addClass('active');

    }); //end of ready

    $(".btn-submit").click(function(e){
	    	e.preventDefault();

	    	var _token = $("input[name='_token']").val();
	    	var name = $("input[name='name']").val();
	    	var skill = $("#selectSkill").val();

	        $.ajax({
	            url: "{{ route('creative.search') }}",
	            type:'POST',
	            data: {_token:_token, name:name, skill:skill},
	            success: function(data) {
                    // empty out container
                    $('.ac-cont').empty();

                    if(data.length == 0){
                        $('.ac-cont').append('<br><h3>No Results Found</h3>');
                    }else if (data.length > 0){
                        $.each (data, function (i,item) {
                            $('.ac-cont').append(`<a href="creative/` + item.id + `" title="View">` +
                                                    '<div class="actor-tile">' + 
                                                        `<img class="image-thumbnail" src="{{ asset('/storage/images/creatives/` + item.thumb_image + `') }}" >` +
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