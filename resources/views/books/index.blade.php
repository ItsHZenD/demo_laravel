@extends('layout.master')
@section('content')
    <link rel="stylesheet" href="{{ asset('fonts/material-design-iconic-font.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('books.create') }}" class="btn btn-primary">
                        Thêm sách
                    </a>
                    <caption>
                        <form action="" class="form-group">
                            Tìm sách: <input class="form-input" type="search" name="q_name" value="{{ $search_name }}" >
                        </form>
                        <form action="" class="form-group">
                            Tìm tác giả: <input type="search" class="form-input" name="q_author" value="{{ $search_author }}">
                        </form>
                    </caption>
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
                <div class="card-body">
                    <table class="table table-hover table-centered mb-0">
                        <tr>
                            <th>#</th>
                            <th>Tên sách</th>
                            <th>Tác giả</th>
                            <th>Ngày nhập sách</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Sửa</th>
                            {{-- @if(Auth::user()->level === 1) --}}

                            <th>Xóa</th>


                            {{-- @endif --}}
                        </tr>
                        @foreach ($data as $each)
                            <tr>
                                <td>{{ $each->id }}</td>
                                <td>{{ $each->name }}</td>
                                <td>{{ $each->author }}</td>
                                <td>{{ $each->year_created_at }}</td>
                                <td>{{ $each->quantity }}</td>
                                <td>{{ $each->price }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('books.edit', $each) }}">
                                        Sửa
                                    </a>
                                </td>
                                {{-- @if(Auth::user()->level === 1) --}}

                                <td>
                                    <form action="{{ route('books.destroy', $each) }} " method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"> Xóa</button>
                                    </form>
                                </td>
                                {{-- @endif --}}
                            </tr>
                        @endforeach
                    </table>
                    {{ $data->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
