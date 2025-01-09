@extends('admin.layouts.default')

@section('content')

<div class="container">
    <h1> Create Brand</h1>
    <form action="{{ route('admin.storeBrand') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Image</label>
            <input type="file" accept="image/*" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success"> Add </button>
    </form>

</div>

@endsection
