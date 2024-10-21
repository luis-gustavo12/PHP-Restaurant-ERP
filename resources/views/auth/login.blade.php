@extends('layouts.main')

@section('title', 'Login')

@section('content')


<form method="POST" action="{{ route('login.validate') }}">
    @csrf
    <div>
        <label for="login">Login</label>
        <input type="text" name="login" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
    </div>
    <button type="submit">Login</button>
</form>

@if ($errors->any())
    <div>
        <strong>{{ $errors->first() }}</strong>
    </div>
@endif


@endsection