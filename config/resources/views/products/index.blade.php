@extends('layouts.app-dashboard')

@section('content')

<div class="container">
    <h3 class="py-5">Products</h3>

    <div>
        <p class="">
            <a href="{{ route('product.add') }}">Add Product</a>
        </p>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>In Stock</th>
                <th>Photo</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product => $item)
                <tr>
                    <td>{{ ++$product }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->inStock }}</td>
                    <td>
                        <img src="{{ asset('uploads/products/'.$item->photo) }}" alt="" width="80">
                    </td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="{{ route('product.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('product.delete', $item->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                        
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection