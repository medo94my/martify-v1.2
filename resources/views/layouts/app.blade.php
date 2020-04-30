<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Montserrat:400,600,900" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--fontawsome icons-->
    <script src="https://kit.fontawesome.com/52d77073d0.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="         nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('shop.index')}}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">About</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if(Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <div class="d-flex">
                                    <div class="dropdown mr-1">
                                        <a type="button" class="nav-link " id="dropdownMenuOffset"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            data-offset="10,20">
                                                <i class="fas fa-shopping-cart fa-lg mx-1"></i>Cart
                                                <span class="badge badge-danger">{{Cart::session(auth()->id())->getTotalQuantity()}}</span>                                                  </span>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                            @php
                                                $total=0;
                                                $items = \Cart::session(auth()->id())->getContent();
                                            @endphp
                                            @if($items)
                                                @foreach($items as $details)
                                                        <a class="dropdown-item" href="#">
                                                            <div class="media">
                                                            @if(\Cart::isEmpty())
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Nothing in cart right now</h5>
                                                            </div>
                                                         @endif
                                                         <img src="  {{$details->associatedModel->image }}"
                                                                class="mr-3" width="50">
                                                                <div class="media-body">
                                                                    <h5 class="mt-0">{{ $details->name }}</h5>
                                                                    <p class="my-0">quantity: {{ $details->quantity }}
                                                                    </p>
                                                                    <h5 class="mt-0 float-right">
                                                                        RM{{ $details->price }}</h5>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    @endforeach
                                                @endif
                                                <p class="dropdown-item" href="#">
                                                    <h4 class="float-right pr-3">{{ $total }}</h4>
                                                </p>
                                                <div class="dropdown-item" href="#"><a href="{{route('shop.cart')}}"
                                                        class="btn btn-primary w-100">Continue to cart >></a></div>
                                        </div>
                                    </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}"
                                        method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <script>
            function Qty_decrease(id) {
                let element = document.querySelector('#qty-' + id);
                if (element.innerHTML > 1) {
                    element.innerHTML--
                    element.innerHTML = element.innerText.replace(element)
                }
                axios.patch(`/update/${id}`, {
                        quntity: element.innerHTML
                    })
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });

            }

            function Qty_increase(id) {
                let element = document.querySelector('#qty-' + id);
                if (element.innerHTML >= 1) {
                    element.innerHTML++
                    element.innerHTML = element.innerText.replace(element)
                }
            }

        </script>
    </div>
</body>

</html>
