
@include('homepageCssAssets')


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>

    <body>
        <header>
          <div class="container">
            <div class="row">
              <div class="col py-4">
                <a href="#">
                  <img src="{{ asset('uploads/img/bdstall.png') }}" class="me-5" alt="bdstall.png" width="200px" />
                </a>
                <div class="input-group w-75">
                  <input type="text" class="form-control" placeholder="Search Here">
                  <span class="input-group-text">Search</span>
                </div>
              </div>

              <div class="col text-end py-4">
                <span class="me-4"><a href="#"><img src="{{ asset('uploads/img/cart.jpg') }}" alt="cart" width="30px" /></a></span>


                @if (Route::has('login'))
                  @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-success">Dashboard</a>
                  @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                    @endif
                  @endauth
                @endif


              </div>
            </div>
          </div>
        </header>

        <nav class="navbar navbar-expand-md navbar-dark">
          <div class="container">
            <a href="#" class="text-decoration-none text-light">
              <i class="fa-solid fa-home"> </i>
            </a>
            <a href="{{ route('welcome') }}" class="your-class-name text-decoration-none text-white""">Home</a>

            <button type="button" class="navbar-toggler border-0" data-bs-target="#test" data-bs-toggle="collapse">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="test">
              <ul class="navbar-nav">


                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="">Electronics</a>
                  <ul class="dropdown-menu" id="hello">
                    <li>
                      <a class="dropdown-item" href="#">Heater</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Blender</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Iron</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Juice Maker</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Light</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="">Security and Industry</a>
                  <ul class="dropdown-menu" id="hello">
                    <li>
                      <a class="dropdown-item" href="#">CC Camera</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Door Bell</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Intercom</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown-item" href="">Travel</a>
                  <ul class="dropdown-menu" id="hello">
                    <li>
                      <a class="dropdown-item" href="#">Bus Ticket</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Train Ticket</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Ship Ticket</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Cycling Tour</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Bike Ride</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown-item" href="">Health & Beauty</a>
                  <ul class="dropdown-menu" id="hello">
                    <li>
                      <a class="dropdown-item" href="#">Powder</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Makeup Box</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Mask</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Foundation</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Slim Tea</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown-item" href="">Car & Bike</a>
                  <ul class="dropdown-menu" id="hello">
                    <li>
                      <a class="dropdown-item" href="#">Toyota Cars</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Yamaha Bikes</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Buy from USA</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown-item" href="">Furniture</a>
                  <ul class="dropdown-menu" id="hello">
                    <li>
                      <a class="dropdown-item" href="#">Chair</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Table</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Cloth Stand</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Night Stand</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Sofa</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown-item" href="">Real Estate</a>
                  <ul class="dropdown-menu" id="hello">
                    <li>
                      <a class="dropdown-item" href="#">House</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Plot</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Appartment</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Pent House</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Yatch</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown-item" href="">More</a>
                  <ul class="dropdown-menu" id="hello">
                    <li>
                      <a class="dropdown-item" href="#">Islamic Zone</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Books</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Services</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Event Management</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"></a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>




        @include('homepageJsAssets')
    </body>
</html>
