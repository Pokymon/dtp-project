@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('students.update', $student->id) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Input name" value="{{ $student->name }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone_number" placeholder="Input phone" value="{{ $student->phone_number }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Input address" value="{{ $student->address }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Class</label>
                <input type="text" class="form-control" name="class" placeholder="Input class" value="{{ $student->class }}">
            </div>
            <div class="mb-3">
                <input type="submit" value="Save" class="btn btn-primary">
            </div>
            <div class="mb-3">
                <a href="{{ route('students.index') }}"><input type="button" value="Cancel" class="btn btn-primary"></a>
            </div>
        </form>
    </div>
</div>
@endsection