@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/filcastpro-default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modal.css') }}" rel="stylesheet">

    <link rel="stylesheet"
          href="{{ asset('vendor/dhtmlxSuite/codebase/dhtmlx.css') }}">

    <link rel="stylesheet"
          href="{{ asset('vendor/dhtmlxSuite/codebase/fonts/font_roboto/roboto.css') }}">
@endsection

@section('content')
<div class="container">
    @include('partials.header')
    <div class="row content">
        @include('partials.menu')
        <div class="col-md-3"></div>
        <div class="col-md-6 showactor">
            <a href="{{route('web.creative.index')}}"><button type="button" class="btn btn-default">back to search</button></a>
            <br><br>
            
                <div class="row row-ac-title"> 
                    <p class="ac-title">  
                        {{$creative[0]->name}}  
                        @if(!empty($skills)) |  @endif
                        <span>
                            @foreach($skills as $skill)
                                <small>{{$skill->skill->name}}, </small>
                            @endforeach
                        </span>
                    </p> 

                </div>
                <div class="row row-ac-img">
                   @if(count($creative[0]->Image) == 5)
                    <div class="col-sm-6" style="text-align:right;">
                        @if(count($creative[0]->Image) > 0)
                            <img class="prf-img" src="{{asset('/storage/images/creatives/'. $creative[0]->Image[0]->file_name)}}">
                        @endif
                    </div>
                    <div class="col-sm-6" style="text-align:left;">
                        @if(count($creative[0]->Image) > 0)<img class="sub-img" src="{{asset('/storage/images/creatives/'. $creative[0]->Image[1]->file_name )}}">@endif
                        @if(count($creative[0]->Image) > 0)<img class="sub-img" src="{{asset('/storage/images/creatives/'. $creative[0]->Image[2]->file_name )}}">@endif
                        @if(count($creative[0]->Image) > 0)<img class="sub-img" src="{{asset('/storage/images/creatives/'. $creative[0]->Image[3]->file_name )}}">@endif
                        @if(count($creative[0]->Image) > 0)<img class="sub-img" src="{{asset('/storage/images/creatives/'. $creative[0]->Image[4]->file_name )}}">@endif
                    </div>
                    @endif
                </div>
                <div class="row">
                        <div class="col-sm-12 ac-dtl">
                        <br><br>
                        <table class="table table-condensed ac-tbl" width="100%" role="grid" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th colspan="2" class="ac-dtl-title">DETAILS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ONLINE PROFILE:</td>
                                    <td><a class="ac-olp" target="_blank" href="{{asset($creative[0]->online_profile)}}" >{{$creative[0]->online_profile}}</a></td>
                                </tr>
                                <tr>
                                    <td>MANAGEMENT:</td>
                                    <td>{{$creative[0]->management}}</td>
                                </tr>
                                
                                <tr>
                                    <td colspan="2" style="text-align:center;"><button type="button" class="btn btn-default" id="myBtn">Request Contact Information</button></td>
                                </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th colspan="2" style="background-color: #db2de6;">WORKS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td colspan="2">
                                        <div>{!! htmlspecialchars_decode($creative[0]->works) !!}</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
           
            <!-- Popup form   -->
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <!-- Modal content -->
                <div class="modal-content">
                    <h4 class="modal-title" id="myModalLabel">
                        Enter your contact information and we'll send you an email.
                    </h4>
                    
                    <br>
                    <form class="form-horizontal" id="form-modal" role="form">
                        <div class="form-group">
                        <label  class="col-sm-2 control-label" for="inputName">Name</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" 
                            id="inputName" placeholder="Name" data-validation="required" />
                        </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-2 control-label" for="inputEmail">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" 
                                id="inputEmail" placeholder="Email" data-validation="email"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="inputContact" >Contact Number</label>
                            <div class="col-sm-10">
                                <input type="contact" class="form-control"
                                    id="inputContact" placeholder="Contact"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="button" class="btn btn-default submit-btn" data-id="{{$creative[0]->id}}">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end of col-md6 -->
        <div class="col-md-3"></div>
    </div>
    @include('partials.footer')
</div> <!-- end of container -->
@endsection

@section('js')
<script src="{{ asset('vendor/dhtmlxSuite/codebase/dhtmlx.js') }}"></script>
<script src="{{ asset('js/helpers.js') }}"></script>
<script src="{{ asset('js/ajax-interceptor.js') }}"></script>
<script src="{{ asset('js/jquery.form-validator.min.js') }}"></script>
<script>
    $('document').ready(function(){
        $('.nav-creatives').addClass('active');
    });

    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    /**
    * Submit the record.
    */
    $(document).on("click", ".submit-btn", function () {

        var id = $(this).attr('data-id');
        var data = {
            'creative_id' : id,
            'name'     : $("#inputName").val(),
            'email'    : $("#inputEmail").val(),
            'contact'  : $("#inputContact").val(),
        };

        var url = '{{ route('web.creative-inquire') }}';
        
        $.validate({
            borderColorOnError : 'red',
            form : '#form-modal',
        });
        
        $.ajax({
            type: "POST",
            url: url,
            data: data, 
            beforeSend: function(){
                modal.style.display = "none";
            },
            success: function (response) {
                dhtmlx.alert({
                    title: 'Success',
                    text: 'An email will be sent to the address you submitted',
                    callback: function () {
                        
                    }
                });
            },
            error: function (err) {
                console.log(err);
            }
        });
       
    });

</script>
@endsection