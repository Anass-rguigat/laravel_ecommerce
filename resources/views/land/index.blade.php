@extends('layout.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">All Lands</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('lands.index') }}">Lands</a></li>
                    <li class="breadcrumb-item active">All Lands</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="container mt-4">
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('lands.create') }}" class="btn btn-primary m-1">Add Land</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lands as $land)
                    <tr>
                        <td>{{ $land->id }}</td>
                        <td>{{ $land->title }}</td>
                        <td>{{ $land->subtitle }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $land->image) }}" width="50" height="50" alt="Land Image">
                        </td>
                        <td>
                            <a href="{{ route('lands.edit', $land->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('lands.destroy', $land->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
