@extends('admin.layouts.default')

@section('content')

<div class="container">
    <h1> Edit Brand</h1>
    <form action="{{ route('admin.updateBrand',['id' => $brand->id]) }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$brand->name}}">
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Image</label>
            <input type="file" accept="image/*" name="image" class="form-control">
        </div>
        <img style="height:200px;display:block" src="{{asset('storage/'.$brand->image)}}" onerror="this.src='<?php echo asset('img/product/default.png') ?>'" alt="">
        <button type="submit" class="btn btn-success"> Add </button>
    </form>

</div>

@endsection
