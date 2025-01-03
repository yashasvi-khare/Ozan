@extends('admin.layouts.default')
@section('content')

<div class="container">

    <div class="col-lg-6">
        <h1> Menus </h1>
    </div>
    <div class="col-lg-12">
        <a href="{{route('admin.createMenu')}}" class="btn btn-success btn-sm" id=""> Create Menu </a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                <tr>
                    <td>{{ $menu->id }}</td>
                    <td>{{ $menu->name }}</td>
                    <td><img src="{{ asset('storage/'.$menu->image) }}"  width='100' alt=""></td>
                    <td>
                    <a href="{{route('admin.editcafemenus',['id'=> $menu->id])}}" class="btn btn-success btn-sm">Edit</a>
                    <a class="btn btn-danger btn-sm" href="{{route('admin.deleteMenu',['id'=>$menu->id])}}" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
