@extends('layouts.app-dashboard')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-5 mx-auto" style="width: 500px;">
                <div class="card-body">
                    <h3>Add New Product</h3>

                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Product Name">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Category</label>
                            <select name="category" id="" class="form-control">
                                <option value="">------- Select Category ------</option>
                                @foreach ($categories as $item)
                                    @if ($item->status == 'Enabled')
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="number" name="price" class="form-control" placeholder="Price">
                        </div>

                        <div class="form-group">
                            <label for="">Photo</label>
                            <input type="file" name="photo" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="">------- Select Status ------</option>
                                <option value="Enabled">Enabled</option>
                                <option value="Disabled">Disabled</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-sm btn-success">Save Product</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection