{{-- <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    
  </nav> --}}

  <nav class="navbar navbar-custom  navbar-fixed-top one-page" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="{{url('/')}}">{{config('app.name')}}</a>
      </div>
      <div class="collapse navbar-collapse" id="custom-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#totop">Home</a></li>
          <li><a class="section-scroll" href="#about">About</a></li>
          <li><a class="section-scroll" href="#partners">Partners</a></li>
          <li><a class="section-scroll" href="#testimonials">Testimonials</a></li>
          <li><a class="section-scroll" href="{{url('login')}}">Login</a></li>
          <li><a class="section-scroll" href="{{url('signup')}}">signup</a></li>
          <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Access To Justice</a>
            <ul class="dropdown-menu">
              <li><a href="{{url('cases')}}">View Cases</a></li>
              <li><a href="#make-report">Report a Case</a></li>
              <li><a href="#">Know your Right</a></li>
              {{-- <li><a href="#">Portfolio</a></li>
              <li><a href="#_l">Restaurant</a></li> --}}
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>