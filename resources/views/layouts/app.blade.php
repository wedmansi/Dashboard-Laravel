<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Scripts -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>



    *{
      font-family: cairo;
    }
    .text-lighting {
    text-shadow: 0px 0px 8px rgba(255, 255, 255, 0.8),
                 0px 0px 16px rgba(255, 255, 255, 0.6),
                 0px 0px 32px rgba(255, 255, 255, 0.4),
                 0px 0px 64px rgba(255, 255, 255, 0.2);
}


.gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
    </style>


</head>
<body dir="rtl">
    <div id="app">
        <nav class="navbar navbar-expand-lg"  style="background-color: #915c83;" >
            <div class="container-fluid">
              <!-- <a class="navbar-brand  text-white" href="#">Navbar</a> -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white " href="/">  <h4> الرئيسية </h4></a>
                      </li>
                  <li class="nav-item">
                    <a class="nav-link active  text-white" aria-current="page" href="{{route('showallproduct')}}"> <h4> المنتجات</h4> </a>
                  </li>
                </ul>
              </div>

              <div class="collapse navbar-collapse" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active  text-lighting  text-white" aria-current="page" href="#"><h1>Matcha House </h1>  </a>
                    </li>
                </ul>

              </div>
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item mt-2">
                        <a href="{{route('checkout')}}">
                        <i class="bi bi-cart-fill text-white " style="font-size: 20px;"><span class="badge bg-success"> {{Session::get('countitem')}}</span></i>
                        </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active  text-white" aria-current="page" href="{{route('login')}}"> <h4> Login </h4></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="{{route('register')}}"> <h4> Register </h4></a>
                    </li>

                  </ul>
            </div>
            </div>
          </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top text-white" style="font-size: 18px; font-weight: bold;">
      <p class="col-md-4 mb-0 ">&copy; 2021 Company, Inc</p>

      <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      </a>
      <ul class="nav col-md-4 justify-content-end " style="font-size: 18px; font-weight: bold;">
        <li class="nav-item"><a href="#" class="nav-link px-3 text-white ">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-3 text-white">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-3 text-white">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-3 text-white">About</a></li>
      </ul>
    </footer>

</html>
