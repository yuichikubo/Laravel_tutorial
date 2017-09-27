@extends('layouts/default')
@section("title")
@section('content')

<div class="center jumbotron">
  @if(Session::has('message'))
	<div class="bg-info">
		<p>{{ Session::get('message') }}</p>
	</div>
@endif

@foreach($errors->all() as $message)
	<p class="bg-danger">{{ $message }}</p>
@endforeach
  <h1>Welcome to the Sample App</h1>

  <h2>
    This is the home page for the
    <a href="http://laravel.jp/">Laravel</a>
    sample application.
  </h2>

  <a href="/user/create", class="btn btn-lg btn-primary">Sign up now!</a>
</div>

<a href='http://laravel.jp/'><img src="laravel-logo-big.png" alt="Rails logo" width="300px" height="200px"></a>
@endsection
             