@extends('layouts.app')

@section('content')
     

  <!-- Page Header -->
  @include('inc.homeheader')
    <header class="masthead" style="background-image: url('/images/Rating.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>RATING app</h1>
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
            <img class="card-img-top" height="250" src="/images/car.jpg" alt="Cars">
                <div class="card-body">
                  <h5 class="card-title">CAR</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="{{'/ratecar'}}" class="btn btn-primary">Rate this product</a>
                </div>
            </div>      
        </div>
        <div class="col-sm-6">
          <div class="card">
            <img class="card-img-top" height="250" src="/images/phone.jpg" alt="Phones">
                <div class="card-body">
                  <h5 class="card-title">PHONE</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="{{'/ratephone'}}" class="btn btn-primary">Rate this product</a>
                </div>
            </div>      
        </div>
      

      </div>
      </div>
    </section>
    <!--footer-->

@endsection