@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
<div class="container">
    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Use PUT method for update -->
        <div class="mb-3">
            <label for="srno" class="form-label">SR No</label>
            <input type="text" class="form-control" id="srno" name="srno" value="{{ $student->srno }}" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
        </div>
        <div class="mb-3">
            <label for="father" class="form-label">Father's Name</label>
            <input type="text" class="form-control" id="father" name="father" value="{{ $student->father }}" required>
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile" value="{{ $student->mobile }}" required>
        </div>
        <div class="mb-3">
            <label for="std" class="form-label">Standard</label>
            <input type="text" class="form-control" id="std" name="std" value="{{ $student->std }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
