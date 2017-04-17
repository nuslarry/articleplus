<nav class="brand-header">
  <div class="navbar navbar-default">
    <div class="container fluid">
      <div class="navbar-header">

        <a class="navbar-brand" href="/">
          <i class="glyphicon glyphicon-heart-empty"></i> Articleplus
        </a>

        <button class="navbar-toggle collapsed" data-target="#navcol-1" data-toggle="collapse">
          <span class="sr-only">
              Toggle navigation
          </span>
          <span class="icon-bar">
          </span>
          <span class="icon-bar">
          </span>
          <span class="icon-bar">
          </span>
        </button>
      </div>
      <!-- end navbar-header -->
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="s" class="navbar-link">Browse Posts</a></li>
          <li><a href="s" class="navbar-link">People</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          @if(Auth::check())
          <li><a href="">Hi {{Auth::user()->name}}</a></li>
          <li><a href="{{route('user.getLogOut')}}">Log out</a></li>
          @else
          <li><a href="{{route('user.getsingup')}}">Sign up</a></li>
          <li><a href="{{route('user.getlogin')}}">Login in</a></li>
          @endif
        </ul>
      </div>
      <!-- end of navbar-collapse -->
    </div>
    <!-- end of nav container -->
  </div>
  <!-- end of navbar-default -->
</nav>

