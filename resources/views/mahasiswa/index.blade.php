<!-- resources/views/books/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Dear costumer, we would love to hear your feedback on our services :D</h2>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Add Feedback</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>No Telp</th>
                <th>Feedback</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{$mhs->id}}</td>
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->nim}}</td>
                    <td>
                        <a href="{{ route('mahasiswa.show', $mhs->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
