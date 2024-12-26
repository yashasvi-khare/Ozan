@extends('Admin.layouts.default')
@section('content')


<div class="container">
    <h1>Create Product</h1>
    <!-- edit wala route edit page open krne k liye -->
    <!-- products.update values update krne k liye -->
     <!-- value check krne k liye ye ye karna hai -->
    <!-- Miss mahotarma ji ispr product ka information lana tha   -->
   
    <form action="{{ route('admin.products.update', ['id'=> $product->id] ) }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{$product->title}}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Picture</label>
            <input type="file" name="image" class="form-control" accept="image/*" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Description</label>
            <input type="text" name="description" class="form-control" required value="{{$product->description}}" >
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" value="{{$product->price}}" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" value="{{$product->quantity}}" required>
        </div>
        
        <div class="mb-3 d-none"> 
            <!-- isko abhi k liye hide rakho -->
            <label for="stock" class="form-label">Category</label>
            <input type="number" name="category" class="form-control" required>
        </div>
        <!-- isko bhi -->
        <div class="mb-3 d-none">
            <label for="stock" class="form-label">Discount</label>
            <input type="number" name="discount" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection
