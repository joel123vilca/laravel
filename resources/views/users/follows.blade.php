@extends('layouts.app')

@section('content')
<h2>{{ $user->username}}</h2>
<ul class="list-unstyle">
@foreach($follows as $follow)
    <li>{{ $follow->username }}</li>
@endforeach
</ul>
@endsection