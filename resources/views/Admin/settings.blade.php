@extends('Admin.layouts.default')

@section('content')

<div class="container">
    <h1>Manage Site Settings</h1>
    <form action="{{ route('admin.update-settings') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Banner Image</label>
            <input type="file" name="banner_img" class="form-control" accept="image/*" >
        </div>
        <div class="mb-3">
            <label for="price" class="form-label"> Price </label>
            <input type="checkbox" name="price_visibility" >
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Hot Deal Image</label>
            <input type="file" accept="image/*" name="hot_deal_img" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Hot Deal Text</label>
            <input type="text" name="hot_deal_text" class="form-control" >
        </div>
        
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>

@endsection