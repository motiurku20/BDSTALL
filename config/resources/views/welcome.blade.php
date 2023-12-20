@extends('layouts.app-frontend')

@section('contents')

<div class="row">
  <div class="col-md-12">
    @if(session('message'))
      <h5 class="alert alert-success">{{ session('message') }}</h5>
    @endif
  </div>
</div>
    
  <div id="headerImage">
    <div class="container">
      <div class="row">
        <div class="col">
          <a href="" class="">
            <img src="{{ asset('uploads/img/buy now.jpg') }}" class="d-block w-100" alt="" />
          </a>
        </div>
      </div>
    </div>
  </div>

  @foreach ($categories as $item)
      @if ($item->status == 'Enabled')
      <div class="popular-Catagories py-5">
        <div class="container">
          <div class="row">
            <div class="col">
              <h4 class="">{{ $item->name }}</h4>
            </div>
          </div>
          <div class="row">
            @foreach ($item->products as $product)
            @if ($product->status == 'Enabled')
                <div class="col-md-4 col-lg-2">
                <div class="card">
                  <div class="card-header p-0">
                    <a href="#"><img src="{{ asset('uploads/products/'.$product->photo) }}" alt="Product" class="d-block w-100" /></a>
                  </div>
                  <div class="card-body">
                      <h5>{{ $product->name }}</h5>
                      <p> <span>Price: </span>{{ $product->price }}</p>
                      <a href="{{ route('order.buynow', $product->id) }}" class="btn btn-sm d-block btn-success">Buy Now</a>
                  </div>
                </div>
              </div>
            @endif
            @endforeach
          </div>
        </div>
      </div>
    @endif
  @endforeach


  <br />
  <br />
  <br />

  <h1 id="ending">What is Bd-stall?</h1>

  <div class="what-is-bd-stall pb-4">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-4">
          <div class="card">
            <div class="card-header">
              <h2 class="last-card">e-Marketplace</h2>
            </div>
            <div class="card-body">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Dignissimos esse cupiditate, laborum voluptates porro
                molestiae nisi, exercitationem nam sunt iure cumque possimus,
                numquam iste dolorem corrupti aliquid. Consequuntur, libero
                reprehenderit.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-4">
          <div class="card">
            <div class="card-header">
              <h2 class="last-card">Sellers</h2>
            </div>
            <div class="card-body">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Dignissimos esse cupiditate, laborum voluptates porro
                molestiae nisi, exercitationem nam sunt iure cumque possimus,
                numquam iste dolorem corrupti aliquid. Consequuntur, libero
                reprehenderit.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-4">
          <div class="card">
            <div class="card-header">
              <h2 class="last-card">Buyers</h2>
            </div>
            <div class="card-body">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Dignissimos esse cupiditate, laborum voluptates porro
                molestiae nisi, exercitationem nam sunt iure cumque possimus,
                numquam iste dolorem corrupti aliquid. Consequuntur, libero
                reprehenderit.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection