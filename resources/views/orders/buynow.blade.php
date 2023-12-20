@extends('layouts.app-frontend')
@section('contents')
    <div class="container py-5">
        <div class="row">
            <div class="col">

                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p>{{ session()->get('success') }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <p>{{ session()->get('error') }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('uploads/products/'.$product->photo) }}" alt="" class="w-100">
            </div>
            <div class="col-md-6">
                <div class="pt-5 mt-5">
                    <h3>{{ $product->name }}</h3>
                    <p><span>Price : </span>{{ $product->price }} <span> taka</span></p>
                    
                    @if ($product->inStock < 1)
                        <p class="text-danger"><span>In Stock {{ $product->inStock }}</span></p>
                    @endif
                    @if ($product->inStock > 0)
                        <p class="text-success"><span>In Stock {{ $product->inStock }}</span></p>
                    @endif

                    <form action="{{ route('order.store') }}" method="post">
                        @csrf
                        <div style="width: 300px">
                            <input hidden type="number" name="productId" value="{{ $product->id }}">
                            <input type="number" name="qty" class="form-control" placeholder="Enter quantity ">
                            <button type="submit" class="btn btn-sm btn-success mt-2">Place Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
