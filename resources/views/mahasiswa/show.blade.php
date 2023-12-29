<!-- resources/views/inventory/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>{{ $mahasiswa->nama }}</h2>
    <p>{{ $mahasiswa->nim}}</p>
    <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
