<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chỉnh sửa sản phẩm</title>
</head>
<body>
    @extends('layouts.app')
        @section('content')
            <div class="container mt-5">
                <h2>Chỉnh sửa sản phẩm</h2>
                <form action="{{ route('products.update', $product['id']) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="name" value="{{ $product['name'] }}" required class="form-control mb-3">
                    <input type="text" name="avatar" value="{{ $product['avatar'] }}" class="form-control mb-3" placeholder="Link hình ảnh">
                    <input type="datetime-local" name="createdAt" value="{{ $product['createdAt'] }}" required class="form-control mb-3">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        @endsection
</body>
</html>