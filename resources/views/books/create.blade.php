@extends('layout.master')
@section('content')

    <link rel="stylesheet" href="{{ asset('fonts/material-design-iconic-font.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 
    <form action="{{ route('books.store') }}" method="post">
        @csrf
        <h2 class="form-title">Add new book</h2>
        <div class="form-group">
            <input type="text" class="form-input" name="name" placeholder="Book Name">
        </div>
        <div class="form-group">
            <input type="text" class="form-input" name="author" placeholder="Author">
        </div>
        <button class="btn btn-success">Add</button>
    </form>
@endsection
