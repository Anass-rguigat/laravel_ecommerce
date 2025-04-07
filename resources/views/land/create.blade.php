@extends('layout.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Land</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('lands.index') }}">Lands</a></li>
                    <li class="breadcrumb-item active">Create Land</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Add New Land</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('lands.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title" required>
                </div>
                <div class="mb-3">
                    <label for="subtitle" class="form-label">Subtitle</label>
                    <input type="text" name="subtitle" id="subtitle" class="form-control" placeholder="Enter Subtitle" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Land Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save Land</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
