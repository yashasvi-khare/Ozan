@extends('Admin.layouts.default')

@section('content')

<div class="container">
    <h1>Manage Site Settings</h1>
    <form action="{{ route('admin.update-settings') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Banner Image</label>
            <input type="file" name="b" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label"> Price </label>
            <input type="checkbox" name="price_visibility" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Hot Deal Image</label>
            <input type="file" accept="image/*" name="hot_deal_img" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Hot Deal Image</label>
            <input type="text" name="Hot Deal Image" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>

@endsection