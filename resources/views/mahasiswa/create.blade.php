<!-- resources/views/books/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Add Feedback</h2>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="no_telp" class="form-label">No Telp</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" required>
        </div>
        <div class="mb-3">
            <label for="feedback" class="form-label">Feedback</label>
            <input class="form-control" id="feedback" name="feedback"  required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
