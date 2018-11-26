@extends('layouts.app')
@section('content')
<h2>{{ $user->username }}</h2>
<form action="/{{ $user->username }}/follow" method="post">
    {{ csrf_field() }}
    
    <button class="btn btn-primary">Follow</button>
</form>
<div class="row">
@foreach($user->messages as $message)
    <div class="col-6">
        @include('messages.message')
    </div>
@endforeach
</div>
@endsection