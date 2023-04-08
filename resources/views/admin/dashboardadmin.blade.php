@extends('admin.layout.head')

@section('content-admin')
    <title>{{ config('app.name') }} - Dashboard</title>
    <style>
        .color-dark {
            color: #dbdbdb;
        }

        @media only screen and (max-width: 600px) {
            .hidden {
                visibility: hidden;
            }
        }
    </style>
    @can('role',['admin','pimpinan'])
        <div class="container">
            <div class="row mb-3">
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">
                                        <h3 class="fw-bold">PRODUK</h3>
                                    </div>
                                </div>
                                <div class="col-auto d-flex ms-auto w-100 justify-content-between gap-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800 my-auto">{{ $barang->count() }} Produk
                                    </div>
                                    <img src="{{ url('asset/img/svg/produk icon.svg') }}" alt="vektor" width="15%"
                                        height="15%" class="mb-auto" style="margin-top: -9%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">
                                        <h3 class="fw-bold">PESANAN</h3>
                                    </div>
                                </div>
                                <div class="col-auto d-flex ms-auto w-100 justify-content-between gap-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800 my-auto">{{ $pesan->count() }} Pesanan
                                    </div>
                                    <img src="{{ url('asset/img/svg/pesan icon.svg') }}" alt="vektor" width="15%"
                                        height="15%" class="mb-auto" style="margin-top: -9%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">
                                        <h3 class="fw-bold">USER</h3>
                                    </div>
                                </div>
                                <div class="col-auto d-flex ms-auto w-100 justify-content-between gap-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800 my-auto">{{ $data->count() }} Orang</div>
                                    <img src="{{ url('asset/img/svg/user icon.svg') }}" alt="vektor" width="15%"
                                        height="15%" class="mb-auto" style="margin-top: -9%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 justify-content-center hidden">
                <div class="col-md-6">
                    <h1 class="mt-5 text-center color-dark" style="font-size: 50px">Welcome <span
                            class="bg-dark text-light rounded"> BUY</span> Online</h1>
                </div>
            </div>
        </div>
    @endcan
    @can('role', 'user')
        <title>{{ config('app.name') }}</title>
        <style>
            section {
                font-family: Noto Sans Korean;
            }

            .psi {
                font-size: 130%;
                /* visibility: ; */
            }

            .hidden {
                font-size: 500%;
            }

            .bg-text {
                background-color: #fff;
                opacity: 0.8;
            }

            @media only screen and (max-width:700px) {
                .hidden {
                    font-size: 500%;
                    text-align: center
                }

                .bg-br {
                    /* padding-bottom: 1%; */
                    padding-top: -1%;
                }
            }
        </style>
        <div class="container mt-3">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <section class="hero d-flex align-items-center bg-primary rounded">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 hero-img">
                            <img src="{{ url('assets/img/dashboard.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center">
                            <h1 class="text-light hidden text-center"><span class="text-primary bg-text">BUY</span> Online</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container mt-5">
                <div class="text-center fw-bold">
                    <h1 class="text-primary fw-bold">Produk Unggulan Kami</h1>
                    <p>Dibawah ini produk produk unggulan kami produk paling bagus yang kami punya</p>
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col col-md-4">
                        <div class="card shadow mt-4">
                            <div class="card-body">
                                <img src="{{ url('assets/img/image/1.jpg') }}" width="100%" height="100%" class="img-fluid">
                                <h3>V380 Kamera CCTV</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="card shadow mt-4">
                            <div class="card-body">
                                <img src="{{ url('assets/img/image/2.jpeg') }}" width="100%" height="100%"
                                    class="img-fluid">
                                <h3>V380 Kamera CCTV</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="card shadow mt-4">
                            <div class="card-body">
                                <img src="{{ url('assets/img/image/3.jpg') }}" width="100%" height="100%" class="img-fluid">
                                <h3>V380 Kamera CCTV</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            {{-- rekomendasi --}}
            <section class="values mt-5">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col col-md-12">
                            <div class="text-center mb-2 mt-5 fw-bold">
                                <h1 id="rekomend" class="text-primary fw-bold">Rekomendasi Untuk Anda</h1>
                                <p>Kami merekomendasikan produk di bawah ini untuk anda dengan kualitas terjamin</p>
                            </div>
                        </div>
                        @foreach ($view as $row)
                            <div class="col col-md-4">
                                <a href="/view/{{ $row->id }}" style="text-decoration: none" class="text-dark">
                                    <div class="card mt-4 shadow p-3 mb-5  rounded">
                                        <div class="card-body text-center">
                                            <img src="{{ url('gambar/' . $row->gambar) }}" class="card-img-top"
                                                alt="" width="40%" height="40%">
                                        </div>
                                        <div class="card-footer bg-white">
                                            <p class="mb-1">{{ $row->nama_barang }}</p>
                                            <p class="fw-bold mb-1">Rp.{{ $row->harga }}</p>
                                            <p><span class="text-warning">★</span> 5.0 | 10 Terjual</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    @endcan
@endsection
