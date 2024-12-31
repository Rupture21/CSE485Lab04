@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sửa Reader</h1>
        <form action="{{ route('readers.update', $reader->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Tên</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $reader->name }}" required>
            </div>
            <div class="form-group">
                <label for="author">Năm sinh</label>
                <textarea class="form-control" id="birthday" name="birthday" required>{{ $reader->birthday }}</textarea>
            </div>
            <div class="form-group">
                <label for="category">Địa chỉ</label>
                <textarea class="form-control" id="address" name="address">{{ $reader->address }}</textarea>
            </div>
            <div class="form-group">
                <label for="year">SĐT</label>
                <textarea class="form-control" id="phone" name="phone">{{ $reader->phone }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
@endsection
