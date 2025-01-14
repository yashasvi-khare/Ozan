@extends('admin.layouts.default')

@section('content')

<div class="container">
    <h1> Edit Sub-Brand</h1>
    <form action="{{ route('admin.updateSubBrand',['id' => $subbrand->id]) }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$subbrand->name}}">
        </div>
        <div class="mb-3">
            <label for="discount" class="form-label"> Discount </label>
            <input type="text" id="discount" name="discount" value="{{$subbrand->discount}}" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="brand_id" class="form-label"> Brand </label>
            <select id="brand_id" name="brand_id" class="form-control">
                @foreach (App\Models\BrandMenu::all() as $brand)
                    <option value="{{$brand->id}}" selected="{{$brand->id === $subbrand->brand_id}}">{{$brand->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" id="image" accept="image/*" name="image" class="form-control">
        </div>
        <img style="height:200px;display:block" src="{{asset('storage/'.$subbrand->image)}}" onerror="this.src='<?php echo asset('img/product/default.png') ?>'" alt="">

        <button type="submit" class="btn btn-success"> Add </button>
    </form>

</div>

@endsection
