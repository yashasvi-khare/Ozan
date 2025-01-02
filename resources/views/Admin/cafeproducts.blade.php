@extends('admin.layouts.default')
@section('content')

<div class="container">
    <div class="col-lg-6">
        <h1> Cafe Products</h1>
    </div>
    <div class="col-lg-12">
        <form id="importForm" action="{{ route('admin.cafeproducts.import') }}" method="POST" enctype="multipart/form-data" style="display: none;">
            @csrf
            <input type="hidden" name="category" id="category">
            <input type="file" id="fileInput" name="file" onchange="document.getElementById('importForm').submit();" required>
        </form>

        <!-- Import button -->
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal" >Import</button>

        <a href="{{route('admin.createcafeproduct')}}" class="btn btn-success btn-sm" id="">Create Product</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Menu</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product?->menu->name }}</td>
                    <td>{{ $product->status?'Active':'Inactive' }}</td>
                    <td>€ {{ $product->price }}</td>
                    <td><img src="{{ asset('storage/'.$product->image) }}"  width='100' alt=""></td>
                    <td>
                        <a href="#" class="btn btn-success btn-sm">Edit</a>
                        <a class="btn btn-danger btn-sm" href="{{route('admin.cafeproduct.remove',['id' => $product->id])}}" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="category">Select Menu</label>
        <select type="number" name="category" id="category" onchange="put(this)" class="form-control" required>
            @foreach (App\Models\CafeMenu::all() as $menu)
                <option value="{{$menu->id}}">{{$menu->name}}</option>
            @endforeach
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
