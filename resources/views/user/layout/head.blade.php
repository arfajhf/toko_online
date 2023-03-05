<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}" type="image/jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    {{-- <link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url('assets/css/help.css') }}">

</head>

<body>

    <style>
        .f-submit {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            border: 0;
            background: none;
            font-size: 16px;
            padding: 0 30px;
            margin: 3px;
            background: #4154f1;
            color: #fff;
            transition: 0.3s;
            border-radius: 4px;
        }

        .mr3 {
            margin-right: 2%;
            /* display: block; */
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-body-tertiary " data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('dashboardUser') }}">{{ config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('dashboardUser') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('cctv') }}">CCTV</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Produk
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('monitor') }}">Monitor</a></li>
                            <li><a class="dropdown-item" href="{{ route('cpu') }}">CPU</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('hardware') }}">Hardware PC</a></li>
                        </ul>
                    </li>
                </ul>
                {{-- <a href="#" class="btn btn-outline-light justify-content-center"><i
                        class="bi bi-chat-dots-fill"></i></a>
                <p class="mr3"></p> --}}
                @guest('admin')
                    <a href="{{ route('admin.login') }}" class="btn btn-outline-light">Login</a>
                @else
                    <ul>
                        <li class="nav-item dropdown justify-content-end text-light " style="list-style: none">
                            <a class="nav-link dropdown-toggle active" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Hi.
                                {{-- {{ Auth::user()->nama }} --}}
                                {{-- {{ dd(Auth::user()->nama) }} --}}
                            </a>
                            <ul class="dropdown-menu justify-content-center">
                                {{-- <li><a class="dropdown-item" href="{{ route('user.logout') }}" onclick="" >Logout</a></li> --}}
                                <form action="{{ route('user.logout') }}" method="post" class="form-basic d-inline">
                                    @csrf
                                    <a class="dropdown-item" href="{{ route('user.logout') }}" onclick="" >Logout</a>
                                </form>
                            </ul>
                        </li>
                    </ul>
                @endguest
                {{-- <div class="modal fade" id="logoutuser" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ohh No!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Apa benar kamu mau logout?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="{{ route('admin.logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="btn btn-primary">Logout</a>
                                <form action="{{ route('admin.logout') }}" id="logout-form" method="post">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}
            </div>
        </div>
    </nav>
    @extends('user.layout.bantuan')

    <span>
        @yield('content')
    </span>

    {{-- @extends('user.modal') --}}

    @extends('user.layout.footer')
