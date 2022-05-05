
  <nav class="navbar navbar-custom  navbar-fixed-top one-page" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="{{url('/')}}">{{config('app.name')}}</a>
      </div>
      <div class="collapse navbar-collapse" id="custom-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a class="section-scroll" href="{{url('login')}}">Login</a></li>
          <li><a class="section-scroll" href="{{url('signup')}}">signup</a></li>
          <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">User</a>
            <ul class="dropdown-menu">
              <li><a href="{{url('cases')}}">Dashboard</a></li>
              <li><a href="#">Know your Right</a></li>
              <li><a href="#make-report">Logout</a></li>
              
              
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 