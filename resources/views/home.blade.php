@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/filcastpro-default.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    @include('partials.header')
    <div class="row content">
        @include('partials.menu')
        <div class="col-md-8" style="text-align:center">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">            
                <iframe width="560" height="315" src="https://www.youtube.com/embed/3yYii5upMwA?rel=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLffqvbWIvMgQST8m_Ao31uBS_MtsWGCMX" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->       
            </div>
            <br><br>
        </div>
        <div class="col-md-4">
            <div class="item-vid-container">
                <div class="row item-vid" title="Jowee Morel's Twenty Thirteen Reel" url='<iframe width="560" height="315" src="https://www.youtube.com/embed/3yYii5upMwA?rel=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'>
                    
                    <img class="col-md-6 item-vid-thumb" src="{{asset('/storage/images/thumbnails/Twenty_Thirteen_Reel.jpg')}}">
                    <div class="col-md-6 item-vid-title">Jowee Morel's Twenty Thirteen Reel</div>
                </div>

                <div class="row item-vid" title="Camp Sawi Official Trailer" url='<iframe width="560" height="315" src="https://www.youtube.com/embed/hBgpv1bEvbo?rel=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'>
                    
                    <img class="col-md-6 item-vid-thumb" src="{{asset('/storage/images/thumbnails/CampSawi.jpg')}}">
                    <div class="col-md-6 item-vid-title">Camp Sawi Official Trailer</div>
                </div>
                
                <div class="row item-vid" title="No Erase - James Reid & Nadine Lustre (Diary ng Panget The Movie OST)" url='<iframe width="560" height="315" src="https://www.youtube.com/embed/qCNQyK65omk?rel=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'>
                   
                    <img class="col-md-6 item-vid-thumb" src="{{asset('/storage/images/thumbnails/no_erase.jpg')}}">
                    <div class="col-md-6 item-vid-title">No Erase - James Reid & Nadine Lustre (Diary ng Panget The Movie OST)</div>
                </div>

                <div class="row item-vid" title="Di ko Alam - Yassi Pressman & Andre Paras (Diary ng Panget The Movie OST)" url='<iframe width="560" height="315" src="https://www.youtube.com/embed/n5dVJjduqg4?rel=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'>
                    
                    <img class="col-md-6 item-vid-thumb" src="{{asset('/storage/images/thumbnails/di_ko_alam.jpg')}}">
                    <div class="col-md-6 item-vid-title">Di ko Alam - Yassi Pressman & Andre Paras (Diary ng Panget The Movie OST)</div>
                </div>
            </div>
            <br>
        </div>
    </div>
    @include('partials.footer')
</div>
@endsection

@section('js')
<script>
    $('document').ready(function(){
        $('.nav-home').addClass('active');
    });

    $('.item-vid').click(function(){
        var url = $(this).attr('url');
        $('.embed-responsive').html(url);
    });

    $('.item-vid').hover(function(){
        $(this).css("-webkit-filter", "grayscale(1)");
    },function(){
        $(this).css("-webkit-filter", "grayscale(0)");
    });
    
</script>
@endsection