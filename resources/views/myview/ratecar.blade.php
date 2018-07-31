@extends('layouts.app')

@section('content')

  <nav class=" navbar navbar-expand-lg  navbar-dark bg-dark sticky-top  navbar-light  ">
      </button>

     <div class="collapse navbar-collapse" id="mainnav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="#">about</a>
         </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Blog</a>
      </li>
    </ul>
  </div>
</nav>

  
  <!-- Selecct Box -->
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

  <form name="ratecar" action="/ratecar" method="post">
  
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
<br> <label for="">Confort&emsp;&emsp;</label>
  <div class="stars">
      
        <input class="fa fa-star " id="star1-5" type="radio" name="Confort" value="5" />
        <label class="fa fa-star " for="star1-5"></label>
        <input class="fa fa-star" id="star1-4" type="radio" name="Confort" value="4" />
        <label class="fa fa-star " for="star1-4"></label>
        <input class="fa fa-star " id="star1-3" type="radio" name="Confort" value="3" />
        <label class="fa fa-star " for="star1-3"></label>
        <input class="fa fa-star " id="star1-2" type="radio" name="Confort" value="2" />
        <label class="fa fa-star " for="star1-2"></label>
        <input class="fa fa-star " id="star1-1" type="radio" name="Confort" value="1" />
        <label class="fa fa-star " for="star1-1"></label>
      </div>

<br> <label for="">Mecanism:&ensp;</label>
      <div class="stars">

        <input class="fa fa-star " id="star2-5" type="radio" name="Mecanism" value="5"/>
        <label class="fa fa-star " for="star2-5"></label>
        <input class="fa fa-star" id="star2-4" type="radio" name="Mecanism" value="4" />
        <label class="fa fa-star " for="star2-4"></label>
        <input class="fa fa-star " value="3" id="star2-3" type="radio" name="Mecanism"/>
        <label class="fa fa-star " for="star2-3"></label>
        <input class="fa fa-star " value="2" id="star2-2" type="radio" name="Mecanism"/>
        <label class="fa fa-star " for="star2-2"></label>
        <input class="fa fa-star " value="1" id="star2-1" type="radio" name="Mecanism"/>
        <label class="fa fa-star " for="star2-1"></label>
      </div>  

<br> <label for="">Price:&emsp;&emsp;&emsp;</label>

      <div class="stars">
        <input class="fa fa-star " value="5" id="star3-5" type="radio" name="Price"/>
        <label class="fa fa-star " for="star3-5"></label>
        <input class="fa fa-star" value="4" id="star3-4" type="radio" name="Price"/>
        <label class="fa fa-star " for="star3-4"></label>
        <input class="fa fa-star " value="3" id="star3-3" type="radio" name="Price"/>
        <label class="fa fa-star " for="star3-3"></label>
        <input class="fa fa-star " value="2" id="star3-2" type="radio" name="Price"/>
        <label class="fa fa-star " for="star3-2"></label>
        <input class="fa fa-star " value="1" id="star3-1" type="radio" name="Price"/>
        <label class="fa fa-star " for="star3-1"></label>
      </div>  

<br> <label for="">Design&emsp;&emsp;&ensp;</label>
      <div class="stars">
        <input class="fa fa-star " value="5" id="star4-5" type="radio" name="Design"/>
        <label class="fa fa-star " for="star4-5"></label>
        <input class="fa fa-star" value="4" id="star4-4" type="radio" name="Design"/>
        <label class="fa fa-star " for="star4-4"></label>
        <input class="fa fa-star " value="3" id="star4-3" type="radio" name="Design"/>
        <label class="fa fa-star " for="star4-3"></label>
        <input class="fa fa-star " value="2" id="star4-2" type="radio" name="Design"/>
        <label class="fa fa-star " for="star4-2"></label>
        <input class="fa fa-star " value="1" id="star4-1" type="radio" name="Design"/>
        <label class="fa fa-star " for="star4-1"></label>
      </div>
      <br>
      <input type="submit" name="submit" value="Rate" class="btn btn-primary">
      {{ csrf_field() }}
      </form>

</div>
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