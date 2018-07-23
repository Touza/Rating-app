@extends('mylayouts.Myapp')

@section('content')
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
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

	<!-- Page Header -->
    <header class="masthead" style="background-image: url('/images/Rating.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Rating App</h1>
              <span class="subheading">application for rating products</span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--section-->
    <section>
    	<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
      					<div class="card-body">
        					<h5 class="card-title">Special title treatment</h5>
        					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        					<a href="#" class="btn btn-primary">Go somewhere</a>
        				</div>
    				</div>			
				</div>
				<div class="col-sm-6">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
      					<div class="card-body">
        					<h5 class="card-title">Special title treatment</h5>
        					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        					<a href="#" class="btn btn-primary">Go somewhere</a>
        				</div>
    				</div>			
				</div>
				<div class="col-sm-6">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
      					<div class="card-body">
        					<h5 class="card-title">Special title treatment</h5>
        					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        					<a href="#" class="btn btn-primary">Go somewhere</a>
        				</div>
    				</div>			
				</div>
				<div class="col-sm-6">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
      					<div class="card-body">
        					<h5 class="card-title">Special title treatment</h5>
        					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        					<a href="#" class="btn btn-primary">Go somewhere</a>
        				</div>
    				</div>			
				</div>

			</div>
	    </div>
    </section>
    <!--footer-->

     <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Rating App 2018</p>
          </div>
        </div>
      </div>
    </footer>



@endsection