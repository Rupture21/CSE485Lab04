@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Thêm mới reader</h1>
        <form action="{{ route('readers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tên</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>  
            <div class="form-group">
                <label for="author">Năm sinh</label>
                <textarea class="form-control" id="birthday" name="birthday" required></textarea>
            </div>
            <div class="form-group">
                <label for="category">Địa chỉ</label>
                <textarea class="form-control" id="address" name="address"></textarea>
            </div>
            <div class="form-group">
                <label for="year">SĐT</label>
                <textarea class="form-control" id="phone" name="phone"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
@endsection
