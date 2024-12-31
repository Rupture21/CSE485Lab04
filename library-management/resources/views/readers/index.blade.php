@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Danh sách Reader</h1>
        <a href="{{ route('readers.create') }}" class="btn btn-primary">Thêm mới</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Năm sinh</th>
                    <th>Địa chỉ</th>
                    <th>SĐT</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($readers as $reader)
                    <tr>
                        <td>{{ $reader->id }}</td>
                        <td>{{ $reader->name }}</td>
                        <td>{{ $reader->birthday }}</td>
                        <td>{{ $reader->address }}</td>
                        <td>{{ $reader->phone }}</td>
                        <td>
                            <a href="{{ route('readers.show', $reader->id) }}" class="btn btn-info">Xem</a>
                            <a href="{{ route('readers.edit', $reader->id) }}" class="btn btn-warning">Sửa</a>
                            <form action="{{ route('readers.destroy', $reader->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @if ($readers->count())
    <nav class="mt-3">
      {{ $readers->links() }}
    </nav>
  @endif
@endsection
