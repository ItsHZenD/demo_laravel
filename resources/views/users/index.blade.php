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
                    {{-- @if (session()->get('level') === 1) --}}
                        <a href="{{ route('users.create') }}" class="btn btn-primary">
                            Thêm
                        </a>
                    {{-- @endif --}}
                    <caption>
                        <form action="" class="form-group">
                            Tìm tên: <input class="form-input" type="search" name="q" value="{{ $search }}">
                        </form>
                        {{-- <form action="" class="form-group">
                        Tìm tác giả: <input type="search" class="form-input" name="q_author">
                    </form> --}}
                    </caption>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-centered mb-0">
                        <tr>
                            <th>#</th>
                            <th>Tên</th>
                            <th>Email</th>
                            {{-- @if (session()->get('level') === 1) --}}
                                <th>Mật khẩu</th>
                            {{-- @endif --}}
                            <th>Điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Tuổi</th>
                            <th>Giới tính</th>
                            <th>Ngày tạo</th>
                            <th>Sửa</th>
                            {{-- @if (session()->get('level') === 1) --}}
                                <th>Xóa</th>
                            {{-- @endif --}}
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                {{-- @if (Auth::user()->level == 1) --}}
                                    <td>{{ $user->password }}</td>
                                {{-- @endif --}}
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->age }}</td>
                                <td>{{ $user->gender_name }}</td>
                                <td>{{ $user->year_created_at }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('users.edit', $user) }}">
                                        Sửa
                                    </a>
                                </td>
                                {{-- @if (Auth::user()->level === 1) --}}
                                    <td>
                                        <form action="{{ route('users.destroy', $user) }} " method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Xóa</button>
                                        </form>
                                    </td>
                                {{-- @endif --}}
                            </tr>
                        @endforeach
                    </table>
                    {{ $users->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
