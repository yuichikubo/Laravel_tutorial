@extends('layouts/default')
@section("title", "Edit")
@section('content')


<h1>Edit</h1>

<div class="row">
  <div class="col-md-6 col-md-offset-3">
{{-- エラーメッセージの表示 --}}
@foreach($errors->all() as $message)
	<p class="bg-danger">{{ $message }}</p>
@endforeach

{!! Form::open(['url' => '/user/$user->id/edit']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', Auth::user()->name, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', Auth::user()->email, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', null, ['class' => 'form-control']) !!}
        </div> 
        <div class="form-group">
            {!! Form::label('password_confirmation', 'Password_confirmation:') !!}
            {!! Form::password('password_confirmation', null, ['class' => 'form-control']) !!}
        </div> 
        <div class="form-group">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
    </div>
</div>