@extends('admin.layouts.default')

@section('content')

<div class="container">
    <h1> Create Sub-Brand</h1>
    <form action="{{ route('admin.storeSubBrand') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" >
        </div>
        <div class="mb-3">

            <label for="brand_id" class="form-label"> Brand </label>

            <select name="brand_id" id="brand_id" class="form-control" >
                <option value="">Choose</option>
                @foreach (App\Models\BrandMenu::all() as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
            </select>

        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Image</label>
            <input type="file" accept="image/*" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label"> Discount </label>
            <input type="text" name="discount" id="discount" class="form-control" value="0%" >
        </div>
        <button type="submit" class="btn btn-success"> Add </button>
    </form>

</div>

@endsection
