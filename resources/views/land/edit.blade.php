@extends('layout.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Land</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('lands.index') }}">Lands</a></li>
                    <li class="breadcrumb-item active">Edit Land</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Land Information</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('lands.update', $land->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $land->title) }}" required>
                </div>
                <div class="mb-3">
                    <label for="subtitle" class="form-label">Subtitle</label>
                    <input type="text" name="subtitle" id="subtitle" class="form-control" value="{{ old('subtitle', $land->subtitle) }}" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Land Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                    @if($land->image)
                        <img src="{{ asset('storage/' . $land->image) }}" alt="Current Image" class="mt-2" width="100">
                    @endif
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Update Land</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
