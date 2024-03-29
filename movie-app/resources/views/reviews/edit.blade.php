@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
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
            <form method="POST" action="/reviews/{{ $review->id }}">
                @csrf
                @method('PUT')
                <label for="film">Film:</label><br>
                <input type="text" id="film" name="film" class="form-control" value="{{ $review->film }}"><br><br>

                <label for="user">User:</label><br>
                <input type="text" id="user" name="user" class="form-control" value="{{ $review->user }}"><br><br>

                <label for="rating">Rating:</label><br>
                <input type="text" id="rating" name="rating" class="form-control" value="{{ $review->rating }}"><br><br>

                <label for="review">Review:</label><br>
                <input type="text" id="review" name="review" class="form-control" value="{{ $review->review }}"><br><br>

                <label for="tanggal">Tanggal:</label><br>
                <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{ $review->tanggal }}"><br><br>

                <input type="submit" value="Update Review">
            </form>
        </div>
    </div>
@endsection