@extends('layouts.main')

@section('title', 'Items')

@section('content')


<div class="info">


    <header>
        @php echo "Hello : " . Session::get('name'); @endphp  
        <p>Number of items: @php echo count($items)@endphp </p>
        <a class="anchor-button" href="{{route('manager.items.edit')}}">Edit</a>
        <a class="anchor-button" href="{{route('manager.items.add')}}">Add</a>
        <button class="button">Settings</button>
    </header>

</div>


    @if (IsModelEmpty(($items))) 



    
    @endif





@endsection