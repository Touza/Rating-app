@extends('mylayouts.Myapp_rate')

@section('content')
 <!--Header-->
@include('inc.userheader')

<!--Select Box-->
<h3 align="center">Car Rating</h3>
<div class="container">
<div class="form-group">
      <label for="exampleSelect1">Make of Car</label>
	      <select class="form-control" id="exampleSelect1">
		        <option>Select Make</option>
		      @foreach($cars_list as $car)
            <option value="{{$car -> make_car}}">{{$car -> make_car}}</option>
            @endforeach
	      </select>
  
      <label for="exampleSelect1">Model of Car</label>
	      <select class="form-control" id="exampleSelect1">
		        <option>Select Model</option>
		     
	      </select>
    </div>
 </div>

 <!--Rating-->
 <div class="container">
<br> <label for="exampleSelect1">Confort&emsp;&emsp;</label>

  <div class="btn-group mr-2" role="group" aria-label="First group">
      <button type="button" class="btn btn-secondary">1</button>
      <button type="button" class="btn btn-secondary">2</button>
      <button type="button" class="btn btn-secondary">3</button>
      <button type="button" class="btn btn-secondary">4</button>
  </div>


<br> <label for="exampleSelect1">Mecanism:&ensp;</label>

  <div class="btn-group mr-2" role="group" aria-label="First group">
      <button type="button" class="btn btn-secondary">1</button>
      <button type="button" class="btn btn-secondary">2</button>
      <button type="button" class="btn btn-secondary">3</button>
      <button type="button" class="btn btn-secondary">4</button>
  </div>


<br> <label for="exampleSelect1">Price:&emsp;&emsp;&emsp;</label>

  <div class="btn-group mr-2" role="group" aria-label="First group">
      <button type="button" class="btn btn-secondary">1</button>
      <button type="button" class="btn btn-secondary">2</button>
      <button type="button" class="btn btn-secondary">3</button>
      <button type="button" class="btn btn-secondary">4</button>
  </div>


<br> <label for="exampleSelect1">Design&emsp;&emsp;&ensp;</label>

  <div class="btn-group mr-2" role="group" aria-label="First group">
      <button type="button" class="btn btn-secondary">1</button>
      <button type="button" class="btn btn-secondary">2</button>
      <button type="button" class="btn btn-secondary">3</button>
      <button type="button" class="btn btn-secondary">4</button>
  </div>

<div>
  <br><a href="{{'/rate/car'}}" class="btn btn-primary"> Rate</a>
</div>

</div>
