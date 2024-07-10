@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container mt-5">
    <h2>Insert Student Information</h2>
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
    <form action="{{ route('form.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="srno">Sr No:</label>
            <input type="text" class="form-control" id="srno" name="srno" value="{{ old('srno') }}" required>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="father">Father's Name:</label>
            <input type="text" class="form-control" id="father" name="father" value="{{ old('father') }}" required>
        </div>
        <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="text" class="form-control" id="mobile" name="mobile" value="{{ old('mobile') }}" required>
        </div>
        <div class="form-group">
            <label for="Std">Standard:</label>
            <select class="form-control" id="Std" name="Std" required>
                <option value="">Select Standard</option>
                <option value="std-1" {{ old('Std') == '1st' ? 'selected' : '' }}>std-1</option>
                <option value="std-2" {{ old('Std') == '2nd' ? 'selected' : '' }}>std-2</option>
                <option value="std-3" {{ old('Std') == '3rd' ? 'selected' : '' }}>std-3</option>
                <option value="std-4" {{ old('Std') == '4th' ? 'selected' : '' }}>std-4</option>
                <option value="std-5" {{ old('Std') == '5th' ? 'selected' : '' }}>std-5</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

