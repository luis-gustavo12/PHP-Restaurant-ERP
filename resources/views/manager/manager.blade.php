@extends('layouts.main')

@section('title', 'Manager')

@section('content')
    

@php
    echo "Session name: " . Session::get('name');

    
    
@endphp

{{ Session::get('name') }}


{{-- Header --}}

<div class="info">
    <header>
        <p>Number of items: @php echo count($items)@endphp </p>
        <button class="button">Settings</button>
    </header>
</div>


<nav>

    I'm nav
    
</nav>


@if (count($items) == 0)

    <h1>No data to display!!</h1>

@else

    @foreach ($items as $item)
    <h1>{{$item->item_name}}</h1>
    @endforeach

    
@endif

    




@endsection