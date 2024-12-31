@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sửa Book</h1>
        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Tên</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $book->name }}" required>
            </div>
            <div class="form-group">
                <label for="author">Tác giả</label>
                <textarea class="form-control" id="author" name="author" required>{{ $book->author }}</textarea>
            </div>
            <div class="form-group">
                <label for="category">Thể loại</label>
                <textarea class="form-control" id="category" name="category">{{ $book->category }}</textarea>
            </div>
            <div class="form-group">
                <label for="year">Năm</label>
                <textarea class="form-control" id="year" name="year">{{ $book->year }}</textarea>
            </div>
            <div class="form-group">
                <label for="quantity">Số lượng</label>
                <textarea class="form-control" id="quantity" name="quantity">{{ $book->quantity }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
@endsection
