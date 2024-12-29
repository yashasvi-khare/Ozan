@extends('admin.layouts.default')
@section('content')
<div class="container">
    <div class="col-lg-6">
    <h1>Products</h1></div>
    <div class="col-lg-6">
    <form id="importForm" action="{{ route('admin.products.import') }}" method="POST" enctype="multipart/form-data" style="display: none;">
        @csrf
        <input type="hidden" name="category" id="category">
        <input type="file" id="fileInput" name="file" accept=".xls, .xlsx" onchange="document.getElementById('importForm').submit();" required>
        </div>
    </form>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Import button -->
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal" >Import</button>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" >
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <select type="number" name="category" onchange="put(this)" class="form-control" required>
            <option value="veg">Veg</option>
            <option value="non-veg">Non-Veg</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="importButton" class="btn btn-primary"> Choose File </button>
      </div>
    </div>
  </div>
</div>

<a href="{{route('admin.createproduct')}}" class="btn btn-success btn-sm" id="">Create Product</a>

    <!-- ab iske aage krna hai routes banakr  view and edit k jo bhi page banana amdin k andr banana; page copy kr lena hai products k andar ka
     bas extends() me jo hai wo 'admin.layouts.default') se replace kr dena bs
     ok -->
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Picture</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Discount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->title }}</td>
                <td><img src="{{ asset('storage/'.$product->picture) }}"  width='100' alt=""></td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->category }}</td>
                <td>{{ $product->discount }}</td>
                <td>
                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-success btn-sm">Edit</a>
                    <form action="#" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    document.getElementById('importButton').addEventListener('click', function () {
        // Trigger the file input's click event
        document.getElementById('fileInput').click();
    });

    function put(elem){
        console.log(elem.value)
        var value=elem.value
        document.getElementById('category').value = value
    }
    </script>
@endsection
