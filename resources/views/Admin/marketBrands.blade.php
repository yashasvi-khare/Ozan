@extends('admin.layouts.default')
@section('content')
@php
$brands=App\Models\BrandMenu::all()
@endphp
<div class="container">

    <div class="col-lg-6">
        <h1> Brands </h1>
    </div>
    <div class="col-lg-12">
        <a href="{{route('admin.createBrand')}}" class="btn btn-success btn-sm" id=""> Create Brand </a>
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
                @foreach ($brands as $brand)
                <tr>
                    <td>{{ $brand->id }}</td>
                    <td>{{ $brand->name }}</td>
                    <td><img src="{{ asset('storage/'.$brand->image) }}"  width='100' alt=""></td>
                    <td>
                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                    <a class="btn btn-danger btn-sm" href="{{route('admin.deletebrand',['id'=>$brand->id])}}" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
