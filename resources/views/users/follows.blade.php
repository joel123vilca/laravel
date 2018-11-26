@extends('layouts.app')

@section('content')
<h2>{{ $user->name }}</h2>
<form action="/users/{{$user->username}}/follow" method="post">
    <button class="btn btn-primary">Follow</button>
</form>
@foreach($user->follows as $follow)
    <li>{{ $follow->username }}</li>
@endforeach
@endsection