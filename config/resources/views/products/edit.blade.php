@extends('layouts.app-dashboard')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-5 mx-auto" style="width: 500px;">
                <div class="card-body">
                    <h3>Edit Product</h3>

                    <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                        </div>

                        <div class="form-group">
                            <label for="">Category</label>
                            <select name="category" id="" class="form-control">
                                <option value="">------- Select Category ------</option>
                                @foreach ($categories as $item)
                                    @if ($item->status == 'Enabled')
                                        <option value="{{ $item->id }}" {{ $item->id == $product->category_id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="number" name="price" class="form-control" value="{{ $product->price }}">
                        </div>

                        <div class="form-group">
                            <label for="">Photo</label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="file" name="photo" class="form-control">
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset('uploads/products/'.$product->photo) }}" alt="" width="80">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="">------- Select Status ------</option>
                                <option value="Enabled" {{ $product->status == 'Enabled' ? 'selected' : '' }}>Enabled</option>
                                <option value="Disabled" {{ $product->status == 'Disabled' ? 'selected' : '' }}>Disabled</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-sm btn-success">Update Product</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection