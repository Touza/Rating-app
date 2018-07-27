<!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Rating App</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          Menu
           <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/Home')}}">Home</a>
            </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Rating a product</a>
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