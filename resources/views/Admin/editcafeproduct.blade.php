@extends('Admin.layouts.default')

@section('content')

<div class="container">
    <h1>Edit cafe product</h1>
    <form action="{{ route('admin.updateProduct', ['id' => $cafeproducts->id]) }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Menu</label>
            <select name="menu_id" class="form-control" >
                <option value="">Choose Menu</option>
                @foreach (App\Models\CafeMenu::all() as $menu)
                    <option value="{{$menu->id}}">{{$menu->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Name</label>
            <input type="text" name="name" value="{{$cafeproducts->name}}" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Status</label>
            <input type="checkbox" name="status" value="{{$cafeproducts->status}}"  >
        </div>
        <div class="mb-3">
            <label for="price" class="form-label"> Price </label>
            <input type="text" class="form-control" value="{{$cafeproducts->price}}" name="price" >
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>

@endsection