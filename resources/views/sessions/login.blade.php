@extends('layouts/default')
@section("title", "Log in")
@section('content')


<h1>Sign up</h1>

<div class="row">
  <div class="col-md-6 col-md-offset-3">
{{-- エラーメッセージの表示 --}}
@foreach($errors->all() as $message)
	<p class="bg-danger">{{ $message }}</p>
@endforeach

{!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', null, ['class' => 'form-control']) !!}
        </div> 
        <div class="form-group">
            {!! Form::submit('Log in', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
    <p>New user? {{link_to("/user/create", 'Sign up now!')}}</p>
    </div>
</div>
