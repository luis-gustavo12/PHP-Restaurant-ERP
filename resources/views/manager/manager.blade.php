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
        <p>Number of items: @php echo count($items)@endphp </p>
        <a class="anchor-button" href="{{route('manager.items.add')}}">Items</a>
        <!-- <a href="">Users</a> -->
        <button class="button">Settings</button>
    </header>
</div>


<nav>

    Go away
    
</nav>


@if (count($items) == 0)

    <h1>No data to display!!</h1>

@else

    @foreach ($items as $item)
    <h1>{{$item->item_name}}</h1>
    @endforeach

    
@endif

    




@endsection