@extends('layouts.app')
@section('content')
<h2>{{ $user->username }}</h2>
<div class="row">
@foreach($user->messages as $message)
    <div class="col-6">
        @include('messages.message')
    </div>
@endforeach
</div>
@endsection