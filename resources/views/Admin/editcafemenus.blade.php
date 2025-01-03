@extends('admin.layouts.default')

@section('content')

<div class="container">
    <h1> Edit Menu</h1>
    <form action="{{ route('admin.updateMenu', ['id' => $cafemenu->id]) }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" value="{{$cafemenu->name}}" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Image</label>
            <input type="file" accept="image/*" name="image" class="form-control">
            <img src="{{asset('storage/'.$cafemenu->image)}}" class="mt-4" height="150" alt="">
        </div>
        <button type="submit" class="btn btn-success"> Update </button>
    </form>

</div>

@endsection
