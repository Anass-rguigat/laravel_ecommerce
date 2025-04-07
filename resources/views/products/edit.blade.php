@extends('layout.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Product</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Product</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="card card-default">
        <div class="card-body">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $product->title }}" required>
                    </div>
                    <div class="col-md-6">
                        <label>Subtitle</label>
                        <input type="text" name="sous_title" class="form-control" value="{{ $product->sous_title }}">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Price</label>
                        <input type="number" name="price" class="form-control" value="{{ $product->price }}" step="0.01" required>
                    </div>
                    <div class="col-md-12 mt-3">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="3" required>{{ $product->description }}</textarea>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Color</label>
                        <select name="color[]" class="form-control select2" multiple required>
                            @foreach(['black', 'blue', 'grey', 'green', 'red', 'white'] as $color)
                                <option value="{{ $color }}" {{ in_array($color, json_decode($product->color, true)) ? 'selected' : '' }}>
                                    {{ ucfirst($color) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label>Size</label>
                        <select name="size[]" class="form-control select2" multiple required>
                            @foreach(['XL', 'L', 'M', 'S'] as $size)
                                <option value="{{ $size }}" {{ in_array($size, json_decode($product->size, true)) ? 'selected' : '' }}>
                                    {{ $size }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12 mt-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                        <img src="{{ asset('storage/' . $product->image) }}" width="100">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Update Product</button>
            </form>
        </div>
    </div>
</div>
@endsection
