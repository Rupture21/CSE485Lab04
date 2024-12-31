@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Chi tiết reader</h1>
        <p><strong>Tên</strong> {{ $reader->name }}</p>
        <p><strong>Năm sinh</strong> {{ $reader->birthday }}</p>
        <p><strong>Địa chỉ</strong> {{ $reader->address }}</p>
        <p><strong>SĐT</strong> {{ $reader->phone }}</p>
        <a href="{{ route('readers.index') }}" class="btn btn-secondary">Quay lại</a>
    </div>
@endsection
