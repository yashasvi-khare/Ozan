@extends('admin.layouts.default')

@section('content')

<div class="container">
    <h1>Create Product</h1>
    <form action="{{ route('admin.store-product') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Picture</label>
            <input type="file" name="image" class="form-control" accept="image/*" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Description</label>
            <input type="text" name="description" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Category</label>
            <select type="number" name="category" class="form-control" required>
                <option value="">Veg</option>
                <option value="">Non-Veg</option>
                <option value="Indian-Grocery">Indian-Grocery</option>
                <option value="Indian-Grocery">Indian-Grocery</option>
                <option value="Turkish-Grocery">Turkish-Grocery</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Discount</label>
            <input type="number" name="discount" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>

@endsection
