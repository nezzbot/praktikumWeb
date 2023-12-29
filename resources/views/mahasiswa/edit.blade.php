<!-- resources/views/inventorys/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Edit Mahasiswa</h2>
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Nama</label>
            <input type="text" class="form-control" id="title" name="nama" value="{{ $mahasiswa->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">Nim</label>
            <input class="form-control" id="nim" name="nim" value="{{$mahasiswa->nim}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update inventory</button>
    </form>
@endsection
