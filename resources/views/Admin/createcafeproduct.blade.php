@extends('Admin.layouts.default')

@section('content')

<div class="container">
    <h1>Manage Cafe Settings</h1>
    <form action="{{ route('admin.productstore') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">menu_id</label>
            <input type="menu_id" name="menu_id" class="form-control" accept="image/*" >
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="price" class="form-label"> Price </label>
            <input type="checkbox" name="price_visibility" >
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Image</label>
            <input type="file" accept="image/*" name="img" class="form-control" >
        </div>
        
        
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>

@endsection