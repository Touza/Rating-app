@extends('mylayouts.Myapp_rate')

@section('content')
 <!--Header-->
@include('inc.userheader')
<!--Select Box-->
<h3 align="center">Phone Rating</h3>
<div class="container">
<div class="form-group">
      <label for="1">Make of Phone</label>
	      <select class="form-control" id="make" name="make">
		        <option>Select Make</option>
		      @foreach($phones_list as $phone)
            <option value="{{$phone -> make_phone}}">{{$phone -> make_phone}}</option>
            @endforeach
	      </select>
  
      <label for="">Model of Phone</label>
	      <select class="form-control" id="model" name="model">
		        <option>Select Model</option>
		     
	      </select>
    </div>
 </div>

 <!--Rating-->
 <div class="container">
<br> <label for="exampleSelect1">Screen&emsp;&emsp;&emsp;&ensp;</label>

  <div class="btn-group mr-2" role="group" aria-label="First group">
      <button type="button" class="btn btn-secondary">1</button>
      <button type="button" class="btn btn-secondary">2</button>
      <button type="button" class="btn btn-secondary">3</button>
      <button type="button" class="btn btn-secondary">4</button>
      <button type="button" class="btn btn-secondary">5</button>
  </div>


<br> <label for="exampleSelect1">Connectivity:&ensp;</label>

  <div class="btn-group mr-2" role="group" aria-label="First group">
      <button type="button" class="btn btn-secondary">1</button>
      <button type="button" class="btn btn-secondary">2</button>
      <button type="button" class="btn btn-secondary">3</button>
      <button type="button" class="btn btn-secondary">4</button>
      <button type="button" class="btn btn-secondary">5</button>
  </div>

<br> <label for="exampleSelect1">Battery life:&emsp;</label>

  <div class="btn-group mr-2" role="group" aria-label="First group">
      <button type="button" class="btn btn-secondary">1</button>
      <button type="button" class="btn btn-secondary">2</button>
      <button type="button" class="btn btn-secondary">3</button>
      <button type="button" class="btn btn-secondary">4</button>
      <button type="button" class="btn btn-secondary">5</button>
  </div>

<br> <label for="exampleSelect1">Price:&emsp;&emsp;&emsp;&emsp;</label>

  <div class="btn-group mr-2" role="group" aria-label="First group">
      <button type="button" class="btn btn-secondary">1</button>
      <button type="button" class="btn btn-secondary">2</button>
      <button type="button" class="btn btn-secondary">3</button>
      <button type="button" class="btn btn-secondary">4</button>
      <button type="button" class="btn btn-secondary">5</button>
  </div>


<br> <label for="exampleSelect1">Design&emsp;&emsp;&ensp;&emsp;</label>

  <div class="btn-group mr-2" role="group" aria-label="First group">
      <button type="button" class="btn btn-secondary">1</button>
      <button type="button" class="btn btn-secondary">2</button>
      <button type="button" class="btn btn-secondary">3</button>
      <button type="button" class="btn btn-secondary">4</button>
      <button type="button" class="btn btn-secondary">5</button>
  </div>

<div>
  <br><a href="{{'/rate/phone'}}" class="btn btn-primary"> Rate</a>
</div>

</div>
