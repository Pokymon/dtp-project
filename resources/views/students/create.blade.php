@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Input name" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="Input phone" value="{{ old('phone_number') }}">
                @error('phone_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Input address" value="{{ old('address') }}">
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Class</label>
                <input type="text" class="form-control @error('class') is-invalid @enderror" name="class" placeholder="Input class" value="{{ old('class') }}">
                @error('class')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Photo</label>
                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" placeholder="Input photo" value="{{ old('photo') }}">
                @error('photo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
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
