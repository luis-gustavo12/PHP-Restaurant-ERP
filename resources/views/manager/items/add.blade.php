@extends('layouts.main')

@section('title', 'Add')

@section('content')



    <h1>Add Items</h1>

    <form action="{{ route('items.store') }}" method="post" enctype="multipart/form-data">
        

        @csrf

        <label for="name">Category</label>
        <input type="text" name="name" id="name" placeholder="Name" required>
        <br>
        @error('amount')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <label for="description">Description </label>
        <textarea name="description" id="description" rows="6" cols="20" placeholder="Description" required></textarea>
        <br>
        @error('amount')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <label for="category">Category</label>
        <input type="text" name="category" id="category" placeholder="Category" required>
        <br>
        @error('amount')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <label for="price">Price</label>
        <input type="text" name="price" id="price" placeholder="Price" required>
        <br>
        @error('amount')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <label for="second_description">Second Description</label>
        <input type="text" name="second_description" id="second_description" placeholder="Second description" required>
        <br>
        @error('amount')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <label for="file">File</label>
        <input type="file" name="file" id="file" accept=".jpg,.jpeg,.png.pdf" required>
        <br>

        <label for="image_description">Image Description</label>
        <input type="text" name="image_description" id="image_description" required placeholder="Image Description">
        <br>



        <button type="submit">Submit</button>
    </form>



@endsection
