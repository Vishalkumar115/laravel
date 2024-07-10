@extends('layouts.app')

@section('title', 'Create Student')

@section('content')
<div class="container mt-5">
    <h2>Create books</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="Bname">Book Name:</label>
            <input type="text" class="form-control" id="Bname" name="Bname" value="{{ old('Bname') }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="text" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}" required>
        </div>
        <div class="form-group">
            <label for="Std">Standard:</label>
            <select class="form-control" id="Std" name="Std" required>
                <option value="">Select Standard</option>
                <option value="1st" {{ old('Std') == 'std-1' ? 'selected' : '' }}>std-1</option>
                <option value="2nd" {{ old('Std') == 'std-2' ? 'selected' : '' }}>std-2</option>
                <option value="3rd" {{ old('Std') == 'std-3' ? 'selected' : '' }}>std-3</option>
                <option value="4th" {{ old('Std') == 'std-4' ? 'selected' : '' }}>std-4</option>
                <option value="5th" {{ old('Std') == 'std-5' ? 'selected' : '' }}>std-5</option>
                <option value="1st" {{ old('Std') == 'std-6' ? 'selected' : '' }}>std-6</option>
                <option value="2nd" {{ old('Std') == 'std-7' ? 'selected' : '' }}>std-7</option>
                <option value="3rd" {{ old('Std') == 'std-8' ? 'selected' : '' }}>std-8</option>
                <option value="4th" {{ old('Std') == 'std-9' ? 'selected' : '' }}>std-9</option>
                <option value="5th" {{ old('Std') == 'std-10' ? 'selected' : '' }}>std-10</option>
                <option value="1st" {{ old('Std') == 'std-11' ? 'selected' : '' }}>std-11</option>
                <option value="2nd" {{ old('Std') == 'std-12' ? 'selected' : '' }}>std-12</option>
               
                <!-- Add more options as needed -->
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
