@extends('layouts.app')

@section('title', 'Update Student')

@section('content')
<div class="container mt-5">
    <h2>Update Student Information</h2>
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
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="srno">Sr No:</label>
            <input type="text" class="form-control" id="srno" name="srno" value="{{ old('srno', $student->srno) }}" required>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $student->name) }}" required>
        </div>
        <div class="form-group">
            <label for="father">Father's Name:</label>
            <input type="text" class="form-control" id="father" name="father" value="{{ old('father', $student->father) }}" required>
        </div>
        <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="text" class="form-control" id="mobile" name="mobile" value="{{ old('mobile', $student->mobile) }}" required>
        </div>
        <div class="form-group">
            <label for="Std">Standard:</label>
            <select class="form-control" id="Std" name="Std" required>
                <option value="">Select Standard</option>
                <option value="std-1" {{ old('Std') == 'std-1' ? 'selected' : '' }}>std-1</option>
                <option value="std-2" {{ old('Std') == 'std-2' ? 'selected' : '' }}>std-2</option>
                <option value="std-3" {{ old('Std') == 'std-3' ? 'selected' : '' }}>std-3</option>
                <option value="std-4" {{ old('Std') == 'std-4' ? 'selected' : '' }}>std-4</option>
                <option value="std-5" {{ old('Std') == 'std-5' ? 'selected' : '' }}>std-5</option>
                <option value="std-6" {{ old('Std') == 'std-6' ? 'selected' : '' }}>std-6</option>
                <option value="std-7" {{ old('Std') == 'std-7' ? 'selected' : '' }}>std-7</option>
                <option value="std-8" {{ old('Std') == 'std-8' ? 'selected' : '' }}>std-8</option>
                <option value="std-9" {{ old('Std') == 'std-9' ? 'selected' : '' }}>std-9</option>
                <option value="std-11" {{ old('Std') == 'std-10' ? 'selected' : '' }}>std-10</option>
                <option value="std-12" {{ old('Std') == 'std-11' ? 'selected' : '' }}>std-11</option>
                <option value="std-13" {{ old('Std') == 'std-12' ? 'selected' : '' }}>std-12</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
