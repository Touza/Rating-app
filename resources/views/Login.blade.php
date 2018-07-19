@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wrap">
                <p class="form-title">Sign In</p>
                <form class="login">
	{!! Form::open(['url' => '']) !!}
			    	{{Form::text('email', '',['class' =>'awesome', 'placeholder' => 'Email'])}}
    				{{Form::password('password', ['class' => 'awesome', 'placeholder' =>'Password' ])}}
    				{{Form::submit('Submit', ['class'=>'btn btn-success btn-sm'])}}
	{!! Form::close() !!}
				</form>
            </div>
        </div>
    </div>
</div>




@endsection
