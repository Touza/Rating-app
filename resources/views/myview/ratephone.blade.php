@extends('mylayouts.Myapp_rate')
<!--Header -->
@include('inc.userheader')

@section('content')

 
  <!-- Select Box -->
  <div class="container box">
   <div class="form-group">
    <label>Make of Phone :</label>
    <select name="make_phone" id="make_phone" class="form-control input-lg dynamic" data-dependent="model_phone">
     <option value="">Select Make</option>
     @foreach($makes_list as $make)
     <option value="{{ $make->make_phone}}">{{ $make->make_phone }}</option>
     @endforeach
    </select>
   </div>
  
   <div class="form-group">
   <label>Model of Phone :</label>

    <select name="model_phone" id="model_phone" class="form-control input-lg dynamic" data-dependent="id">
     <option value="">Select Model</option>
    </select>
   </div>  
   {{ csrf_field() }}
  
  </div>

<!--Rating-->
 <div class="container">
<br> <label for="">Confort&emsp;&emsp;</label>

  <div class="btn-group mr-2" role="group" aria-label="First group">
      <button type="button" class="btn btn-secondary">1</button>
      <button type="button" class="btn btn-secondary">2</button>
      <button type="button" class="btn btn-secondary">3</button>
      <button type="button" class="btn btn-secondary">4</button>
      <button type="button" class="btn btn-secondary">5</button>

  </div>


<br> <label for="">Mecanism:&ensp;</label>

  <div class="btn-group mr-2" role="group" aria-label="First group">
      <button type="button" class="btn btn-secondary">1</button>
      <button type="button" class="btn btn-secondary">2</button>
      <button type="button" class="btn btn-secondary">3</button>
      <button type="button" class="btn btn-secondary">4</button>
      <button type="button" class="btn btn-secondary">5</button>
  </div>


<br> <label for="">Price:&emsp;&emsp;&emsp;</label>

  <div class="btn-group mr-2" role="group" aria-label="First group">
      <button type="button" class="btn btn-secondary">1</button>
      <button type="button" class="btn btn-secondary">2</button>
      <button type="button" class="btn btn-secondary">3</button>
      <button type="button" class="btn btn-secondary">4</button>
      <button type="button" class="btn btn-secondary">5</button>
  </div>


<br> <label for="">Design&emsp;&emsp;&ensp;</label>

  <div class="btn-group mr-2" role="group" aria-label="First group">
      <button type="button" class="btn btn-secondary">1</button>
      <button type="button" class="btn btn-secondary">2</button>
      <button type="button" class="btn btn-secondary">3</button>
      <button type="button" class="btn btn-secondary">4</button>
      <button type="button" class="btn btn-secondary">5</button>
  </div>

<div>
  <br><a href="{{'/ratephone'}}" class="btn btn-primary"> Rate</a>
</div>

</div>


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
    url:"{{ route('dynamicdependentphone.fetch') }}",
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