@extends('layouts.app')
@section('content')
<h2>{{ $user->username }}</h2>
<a href="/{{ $user->username}}/follows" class="btn btn-link">sigue a 
<span class="badge badge-default">{{ $user->follows->count()}}</span>
</a>
<a href="/{{ $user->username}}/followers" class="btn btn-link">seguidores  
<span class="badge badge-default">{{$user->followers->count()}}
</span>
</a>
@if(Auth::check())
    @if(Auth::user()->isFollowing($user))
    <form action="/{{ $user->username }}/unfollow" method="post">
    {{ csrf_field() }}
    
    <button class="btn btn-danger">dejar de seguir</button>
</form>
    @else
<form action="/{{ $user->username }}/follow" method="post">
    {{ csrf_field() }}
    
    <button class="btn btn-primary">Follow</button>
</form>
    @endif
@endif
<div class="row">
@foreach($user->messages as $message)
    <div class="col-6">
        @include('messages.message')
    </div>
@endforeach
</div>
@endsection