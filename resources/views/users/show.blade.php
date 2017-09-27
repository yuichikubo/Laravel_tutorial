@extends('layouts.default')
@section("title", "Show")
@section('content')
<div class="row">
  @if(Session::has('message'))
	<div class="bg-info">
		<p>{{ Session::get('message') }}</p>
	</div>
  @endif
  <aside class="col-md-4">
    <section class="user_info">
        <h1>
            <img src="{{ Gravatar::src($user->email, 100) }}" class="gravatar">
            {{ $user->name }}
        </h1>
        </section>
  </aside>
</div>