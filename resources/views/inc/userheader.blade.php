<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Rating App</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/Home')}}">Home</a>
            </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Rating a product</a>
          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 39px, 0px); top: 0px; left: 0px; will-change: transform;">
              <a class="dropdown-item" href="{{'/ratecar'}}">Car</a>
              <a class="dropdown-item" href="{{'/ratephone'}}">Phone</a>
          </div>
      </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Page Header -->
    <header class="masthead" >
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
            <div style="width:300px; height:65px; " class="col-lg-8 col-md-10 mx-auto"> 

            <div class="site-heading">
            </div>
          </div>
        </div>
      </div>
    </header>