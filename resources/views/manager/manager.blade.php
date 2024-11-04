@extends('layouts.main')

@section('title', 'Manager')

@section('content')
    

@php

    echo "Hello : " . Session::get('name');

    
    
@endphp

{{ Session::get('name') }}


{{-- Header --}}

<div class="info">
    <header>
        <a class="anchor-button" href="{{route('manager.items')}}">Items</a>
        <a class="anchor-button" href="{{route('manager.items.edit')}}">Edit</a>
        <!-- <a href="">Users</a> -->
        <button class="button">Settings</button>
    </header>
</div>


<nav>
    
</nav>



    

    @if (IsModelEmpty($items))
    

        


    @else

    


    @endunless


    
    

    




@endsection