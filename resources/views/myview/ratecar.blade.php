@extends('layouts.app')
<!--Header -->
@include('inc.userheader')
<!--section-->
@section('content')
 
  <!--Alert Message -->
 @if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
    
 

@section('content')

  

  <!-- Selecct Box -->
  <form action="{{'/record_rate_car'}}" method="POST">

  <div class="container box">
   <div class="form-group">
    <label>Make of Car :</label>
    <select name="make_car" id="make_car" class="form-control input-lg dynamic" data-dependent="model_car">
     <option value="">Select Make</option>
     @foreach($makes_list as $make)
     <option value="{{ $make->make_car}}">{{ $make->make_car }}</option>
     @endforeach
    </select>
   </div>
  
   <div class="form-group">
   <label>Model of Car :</label>

    <select name="model_car" id="model_car" class="form-control input-lg dynamic" data-dependent="id">
     <option value="">Select Model</option>
    </select>
   </div>  
   {{ csrf_field() }}
  
  </div>

<!--Rating-->
 <div class="container">

<br> <label for="stars">Confort:&emsp;&ensp;</label>
    <div class="stars1">
        <input class="fa fa-star " id="star1-5" type="radio" value="5" name="star1"/>
        <label class="fa fa-star " for="star1-5"></label>
        <input class="fa fa-star" id="star1-4" type="radio" value="4" name="star1"/>
        <label class="fa fa-star " for="star1-4"></label>
        <input class="fa fa-star " id="star1-3" type="radio" value="3" name="star1"/>
        <label class="fa fa-star " for="star1-3"></label>
        <input class="fa fa-star " id="star1-2" type="radio" value="2" name="star1"/>
        <label class="fa fa-star " for="star1-2"></label>
        <input class="fa fa-star " id="star1-1" type="radio" value="1" name="star1"/>
        <label class="fa fa-star " for="star1-1"></label>
    </div>

  

<br> <label for="">Mecanism:&ensp;</label>

     <div class="stars2">
        <input class="fa fa-star " id="star2-5" type="radio" value="5" name="star2"/>
        <label class="fa fa-star " for="star2-5"></label>
        <input class="fa fa-star" id="star2-4" type="radio" value="4" name="star2"/>
        <label class="fa fa-star " for="star2-4"></label>
        <input class="fa fa-star " id="star2-3" type="radio" value="3" name="star2"/>
        <label class="fa fa-star " for="star2-3"></label>
        <input class="fa fa-star " id="star2-2" type="radio" value="2" name="star2"/>
        <label class="fa fa-star " for="star2-2"></label>
        <input class="fa fa-star " id="star2-1" type="radio" value="1" name="star2"/>
        <label class="fa fa-star " for="star2-1"></label>
    </div>
  


<br> <label for="">Price:&emsp;&emsp;&emsp;</label>
    <div class="stars3">
        <input class="fa fa-star " id="star3-5" type="radio" value="5" name="star3"/>
        <label class="fa fa-star " for="star3-5"></label>
        <input class="fa fa-star" id="star3-4" type="radio" value="4" name="star3"/>
        <label class="fa fa-star " for="star3-4"></label>
        <input class="fa fa-star " id="star3-3" type="radio" value="3" name="star3"/>
        <label class="fa fa-star " for="star3-3"></label>
        <input class="fa fa-star " id="star3-2" type="radio" value="2" name="star3"/>
        <label class="fa fa-star " for="star3-2"></label>
        <input class="fa fa-star " id="star3-1" type="radio" value="1" name="star3"/>
        <label class="fa fa-star " for="star3-1"></label>
    </div>
  


<br> <label for="">Design&emsp;&emsp;&ensp;</label>

     <div class="stars4">
        <input class="fa fa-star " id="star4-5" type="radio" value="5" name="star4"/>
        <label class="fa fa-star " for="star4-5"></label>
        <input class="fa fa-star" id="star4-4" type="radio" value="4" name="star4"/>
        <label class="fa fa-star " for="star4-4"></label>
        <input class="fa fa-star " id="star4-3" type="radio" value="3" name="star4"/>
        <label class="fa fa-star " for="star4-3"></label>
        <input class="fa fa-star " id="star4-2" type="radio" value="2" name="star4"/>
        <label class="fa fa-star " for="star4-2"></label>
        <input class="fa fa-star " id="star4-1" type="radio" value="1" name="star4"/>
        <label class="fa fa-star " for="star4-1"></label>
      
    </div>
  
</div>
<input type="Submit" value="Rate"></input>
</form>

<script src="{{ asset('js/script.js') }}"></script>


<script>
$(document).ready(function(){

 $('.dynamic').change(function(){
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('dynamicdependentcar.fetch') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }
 });

 

});
</script>
@endsection