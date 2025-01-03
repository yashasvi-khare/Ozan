@extends('admin.layouts.default')

@section('content')

<div class="container">
    <h1> Create Cafe Product</h1>
    <form action="{{ route('admin.productstore') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Menu</label>
            <select type="menu_id" name="menu_id" class="form-control" >
                <option value="">Choose Menu</option>
                @foreach (App\Models\CafeMenu::all() as $menu)
                    <option value="{{$menu->id}}">{{$menu->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Status</label>
            <input type="checkbox" name="status" checked>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label"> Price </label>
            <input type="text" pattern="^\d+(\.\d+)?$" name="price" class="form-control">
        </div>
        @if(false)
        <div class="mb-3">
            <label for="stock" class="form-label">Image</label>
            <input type="file" accept="image/*" name="image" class="form-control">
        </div>
        @endif
        <button type="submit" class="btn btn-success"> Create </button>
    </form>

</div>

@endsection
