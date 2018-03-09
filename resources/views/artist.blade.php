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
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h3>Search for an Artist</h3>
            <br>
            <div class="refined-search">
                {{Form::open(array('action' => 'WebsiteController@search', 'method' => 'post'))}}
                    {{ Form::hidden('_token', csrf_token() ) }}
                    <div class="form-group row">
                        <fieldset class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="checkbox" name="gender" value="male">
                                <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                &nbsp;
                                <input class="form-check-input" type="radio" id="checkbox" name="gender" value="female">
                                <label class="form-check-label" for="inlineCheckbox1">Female</label>
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <label for="selectAge">Can play the Age of:</label> &nbsp;
                            {{ Form::select('age', array('0' => 'All Ages', '1' => '10 and below', '2' => '11 to 20', '3' => '21 to 30', '4' => '31 to 40', '5' => '41 and above') , array('class' => 'form-control', 'id' => 'selectAge')) }}
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Send</button>
                        </div>
                    </div>
                </form>
            </div>
            <br>
            <div class="ac-cont">
                @foreach($actors as $actor)
                    <a href="show-actor/{{$actor->id}}" title="View">
                        <div class="actor-tile">
                            <img class="img-thumbnail image-thumbnail" src="{{ asset('/storage/images/actors/' . $actor->thumb_image) }}" >
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

</script>
@endsection