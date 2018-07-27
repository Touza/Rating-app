@extends('layouts.app')

@section('content')
	<form class="form" method="post" action="">
		<h1 class="signin">SING IN</h1>
			<input type="text" name="email" placeholder="email" class="input" \>
			<input type="password" name="password" placeholder="password" class="input" \>
			<input type="submit" name="submit" class="button" \>
			<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->	
			{{ csrf_field() }}	
	</form>
@endsection