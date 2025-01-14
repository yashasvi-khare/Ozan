@extends('admin.layouts.default')
@section('content')
@php
$subbrands = App\Models\SubBrand::all()
@endphp
<div class="container">

    <div class="col-lg-6">
        <h1> Sub-Brands </h1>
    </div>
    <div class="col-lg-12">
        <a href="{{route('admin.createSubBrand')}}" class="btn btn-success btn-sm" id=""> Create Sub-brand </a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Discount</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subbrands as $sub)
                <tr>
                    <td>{{ $sub->id }}</td>
                    <td>{{ $sub->name }}</td>
                    <td>{{ $sub->brand->name }}</td>
                    <td>{{ $sub->discount }}</td>
                    <td><img src="{{ asset('storage/'.$sub->image) }}"  width='100' alt=""></td>
                    <td>
                        <a href="{{route('admin.editSubBrand',['id' => $sub->id ])}}" class="btn btn-success btn-sm">Edit</a>
                        <a class="btn btn-danger btn-sm" href="{{route('admin.deleteSubBrand',['id'=>$sub->id])}}" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
