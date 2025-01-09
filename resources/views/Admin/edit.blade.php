@extends('admin.layouts.default')
@section('content')


<div class="container">
    <h1>Edit Product</h1>
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
            <input type="file" name="image" class="form-control" accept="image/*" >
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Description</label>
            <input type="text" name="description" class="form-control" required value="{{$product->description}}" >
        </div>

        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection
