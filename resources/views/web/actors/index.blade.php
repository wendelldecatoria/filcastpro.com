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
                                <input class="form-check-input" type="radio" id="selectGender" name="gender" value="">
                                <label class="form-check-label" for="selectGender">Both</label>
                                &nbsp;
                                <input class="form-check-input" type="radio" id="selectGender" name="gender" value="male">
                                <label class="form-check-label" for="selectGender">Male</label>
                                &nbsp;
                                <input class="form-check-input" type="radio" id="selectGender" name="gender" value="female">
                                <label class="form-check-label" for="selectGender">Female</label>
                        </div>
                         &nbsp; &nbsp;
                        <div class="form-group">
                            <label for="selectAge"><small>Can play the Age of:</small></label> &nbsp;
                            {{ Form::select('age', array('0' => 'All Ages', '1' => '10 and below', '2' => '11 to 20', '3' => '21 to 30', '4' => '31 to 40', '5' => '41 and above') , null, array('class' => 'form-control input-sm', 'id' => 'selectAge')) }}
                        </div>
                         &nbsp; &nbsp;
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
                @foreach($actors as $actor)
                    <a href="{{ route('artist.show', $actor->id)}}" title="View">
                        <div class="actor-tile">
                            <img class="image-thumbnail" src="{{ asset('/storage/images/actors/' . $actor->thumb_image) }}" >
                            <p>{{$actor->name}}</p>
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
        $('.nav-actors').addClass('active');

    }); // end of ready

    $(".btn-submit").click(function(e){
	    	e.preventDefault();

	    	var _token = $("input[name='_token']").val();
            var gender = $('input[name=gender]:checked').val();
            var age = $("#selectAge").val();
            var skill = $("#selectSkill").val();
	    	var name = $("input[name='name']").val();
	    	

	        $.ajax({
	            url: "{{ route('artist.search') }}",
	            type:'POST',
	            data: {_token:_token, gender:gender, age:age, skill:skill, name:name},
	            success: function(data) {
                    // empty out container
                    $('.ac-cont').empty();

                    if(data.length == 0){
                        $('.ac-cont').append('<br><h3>No Results Found</h3>');
                    }else if (data.length > 0){
                        $.each (data, function (i,item) {
                            $('.ac-cont').append(`<a href="artist/` + item.id + `" title="View">` +
                                                    '<div class="actor-tile">' + 
                                                        `<img class="image-thumbnail" src="{{ asset('/storage/images/actors/` + item.thumb_image + `') }}" >` +
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