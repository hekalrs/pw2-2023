@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Genres Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Genres</li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Data
        </div>
        <div class="card-body">
            <form method="POST" action="/genres/{{ $genre->id }}">
                @csrf
                @method('PUT')
                <label for="nama">Nama:</label><br>
                <input type="text" id="nama" name="nama" class="form-control" value="{{ $genre->nama }}"><br><br>

                <label for="deskripsi">Deskripsi:</label><br>
                <input type="text" id="deskripsi" name="deskripsi" class="form-control" value="{{ $genre->deskripsi }}"><br><br>

                <input type="submit" value="Update Genre">
            </form>
        </div>
    </div>
@endsection