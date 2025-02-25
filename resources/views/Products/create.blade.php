<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm sản phẩm</title>
</head>
<body>
    @extends('layouts.app')
        @section('content')
            <div class="container mt-5">
                <h2>Thêm sản phẩm</h2>
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                        <input type="text" name="name" placeholder="Tên sản phẩm" required class="form-control mb-3">
                        <input type="text" name="avatar" placeholder="Link hình ảnh" class="form-control mb-3">
                        <input type="datetime-local" name="createdAt" placeholder="Ngày tạo" required class="form-control mb-3">
                        <button type="submit" class="btn btn-success">Lưu</button>
                </form>
            </div>
        @endsection
</body>
</html>