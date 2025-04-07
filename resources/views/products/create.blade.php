@extends('layout.app')

@section('content')
<div class="container mt-4">
    <div class="card card-default">
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label>Subtitle</label>
                        <input type="text" name="sous_title" class="form-control">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Price</label>
                        <input type="number" name="price" class="form-control" step="0.01" required>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Category</label>
                        <select name="category_id" class="form-control" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label>Color</label>
                        <select name="color[]" class="form-control select2" multiple required>
                            <option value="black">Black</option>
                            <option value="blue">Blue</option>
                            <option value="grey">Grey</option>
                            <option value="green">Green</option>
                            <option value="red">Red</option>
                            <option value="white">White</option>
                        </select>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label>Size</label>
                        <select name="size[]" class="form-control select2" multiple required>
                            <option value="XL">XL</option>
                            <option value="L">L</option>
                            <option value="M">M</option>
                            <option value="S">S</option>
                        </select>
                    </div>

                    <div class="col-md-12 mt-3">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="col-md-12 mt-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Save Product</button>
            </form>
        </div>
    </div>
</div>
@endsection
