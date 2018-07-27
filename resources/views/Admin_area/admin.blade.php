@extends('layouts.app')


@section('content')

	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="{{route('admin')}}">Rating App</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Product">View Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Create New Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Join log viewer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                </form>
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
			<div class="row" id="Product">
				<div class="col-sm-6">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
      					<div class="card-body">
        					<h5 class="card-title">Car</h5>
        					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        					<a type="button" class="btn btn-primary" href="#">VIEW Rate</a>
        					<a type="button" class="btn btn-success" href="#">UPDATE</a>
        					<a type="button" class="btn btn-danger" href="#">DELETE</a>
        				</div>
    				</div>			
				</div>
				<div class="col-sm-6">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
      					<div class="card-body">
        					<h5 class="card-title">Special title treatment</h5>
        					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        					<a type="button" class="btn btn-primary" href="#">VIEW Rate</a>
        					<a type="button" class="btn btn-success" href="#">UPDATE</a>
        					<a type="button" class="btn btn-danger" href="#">DELETE</a>
        				</div>
    				</div>			
				</div>
				<div class="col-sm-6">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
      					<div class="card-body">
        					<h5 class="card-title">Special title treatment</h5>
        					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        					<a type="button" class="btn btn-primary" href="#">VIEW Rate</a>
        					<a type="button" class="btn btn-success" href="#">UPDATE</a>
        					<a type="button" class="btn btn-danger" href="#">DELETE</a>
        				</div>
    				</div>			
				</div>
				<div class="col-sm-6">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
      					<div class="card-body">
        					<h5 class="card-title">Special title treatment</h5>
        					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        					<a type="button" class="btn btn-primary" href="#">VIEW Rate</a>
        					<a type="button" class="btn btn-success" href="#">UPDATE</a>
        					<a type="button" class="btn btn-danger" href="#">DELETE</a>
        				</div>
    				</div>			
				</div>

			</div>
	    </div>
    </section>

@endsection