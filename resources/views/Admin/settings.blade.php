@extends('admin.layouts.default')

@section('content')
<?php
$visible = App\Models\Setting::where('name','price_visibility')->first('value')?->value;
?>
<div class="container">
    <h1>Manage Site Settings</h1>
    <br>
    <form enctype="multipart/form-data" action="{{ route('admin.update-settings') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Banner Image</label>
            <input type="file" name="banner_img" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="price" class="form-label"> Price </label>
            <input type="checkbox" name="price_visibility" @if($visible) checked @endif>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Hot Deal Image</label>
            <input type="file" name="hot_deal_img" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Hot Deal Text</label>
            <input type="text" name="hot_deal_text" class="form-control" value="">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>

@endsection
