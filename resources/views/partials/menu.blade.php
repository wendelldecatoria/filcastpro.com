<!-- <div class="menu">
    <div class="button">
        <a class="btn btn-primary btn-lg btn-fcp" href="#" role="button">home</a>
        <a class="btn btn-primary btn-lg btn-fcp" href="#" role="button">actors</a>
        <a class="btn btn-primary btn-lg btn-fcp" href="#" role="button">news room</a>
        <a class="btn btn-primary btn-lg btn-fcp" href="#" role="button">contact</a>
    </div>
</div> -->

<nav class="navbar navbar-inverse menu">
  <div class="container-fluid">
    <!-- <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div> -->
    <ul class="nav navbar-nav">
      <li class="nav-home"><a href="{{route('web.home')}}">HOME</a></li>
      <li class="nav-actors"><a href="{{route('web.actors')}}">ACTORS</a></li>
      <li class="nav-news-room"><a href="{{route('web.news-room')}}">NEWS ROOM</a></li>
      <li class="nav-contact"><a href="{{route('web.contact')}}">CONTACT</a></li>
    </ul>
  </div>
</nav>