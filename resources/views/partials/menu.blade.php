<nav class="navbar navbar-default">
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
          <li class="nav-actors"><a href="{{route('web.artist.index')}}">ARTISTS</a></li>
          <li class="nav-creatives"><a href="{{route('web.creative.index')}}">CREATIVES</a></li>
          <li class="nav-whats-up"><a href="{{route('web.whats-up.index')}}">WHAT'S UP</a></li>
          <li class="nav-whats-on"><a href="{{route('web.whats-on.index')}}">WHAT'S ON</a></li>
          <li class="nav-whats-in"><a href="{{route('web.whats-in.index')}}">WHAT'S IN</a></li>   
          <li class="nav-register"><a href="{{route('web.register.index')}}">REGISTER</a></li>
          <li class="nav-contact"><a href="{{route('web.contact.index')}}">CONTACT US</a></li>
        </ul>
    </div>
  </div>
</nav>
