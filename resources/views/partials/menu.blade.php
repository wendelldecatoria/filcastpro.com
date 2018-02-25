<nav class="navbar navbar-inverse menu">
  <div class="container-fluid">
    <!-- <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div> -->
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="nav-home"><a href="{{route('web.home')}}">HOME</a></li>
          <li class="nav-actors"><a href="{{route('web.actors')}}">ACTORS</a></li>
          <li class="nav-news-room"><a href="{{route('web.news-room')}}">NEWS ROOM</a></li>
          <li class="nav-contact"><a href="{{route('web.contact')}}">CONTACT</a></li>
        </ul>
    </div>
  </div>
</nav>