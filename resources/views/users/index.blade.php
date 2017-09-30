@extends('layouts.default')
@section("title", "Show")
@section('content')
<div class="row">
  @if(Session::has('message'))
	<div class="bg-info">
		<p>{{ Session::get('message') }}</p>
	</div>
  @endif
  @foreach($errors->all() as $message)
	<p class="bg-danger">{{ $message }}</p>
@endforeach
    <h1>All users</h1>
        <ul class="users">
        @foreach($users->all() as $user)
        <li>
            <img src="{{ Gravatar::src($user->email, 50) }}" class="gravatar">
            {{link_to("/user/{$user->id}", $user->name) }}
            @if(Auth::user()->admin)
            <form action="{{ action('Users@destroy', $user->id) }}" id="form_{{ $user->id }}" method="post">
              {{ csrf_field() }}
              {{ method_field('delete') }}
              <a href="#" data-id="{{ $user->id }}" onclick="deleteUser(this);">delete</a>
             </form>
            @endif
        </li>
        @endforeach
       </ul>
       {{ $users->links() }}
</div>

<script>
function deleteUser(e) {
  'use strict';
 
  if (confirm('本当に削除していいですか?')) {
  document.getElementById('form_' + e.dataset.id).submit();
  }
}
</script>
