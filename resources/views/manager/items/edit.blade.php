@extends('layouts.main')

@section('title', 'Edit')


@section('content')

@php

    

@endphp



<div class="info">
    <header>
        <a class="anchor-button" href="{{route("manager.items")}}">Home</a>
    </header>
</div>



@unless (IsModelEmpty($items))
    

    <h1>Inside is model</h1>


@endif



@endsection