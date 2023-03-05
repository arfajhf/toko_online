@extends('admin.layout.head')

@section('content-admin')
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
                            <img src="{{ url('assets/img/image/2.jpeg') }}" width="100%" height="100%" class="img-fluid">
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
                    @foreach ($data as $row)
                        <div class="col col-md-4">
                            <a href="/view/{{ $row->id }}" style="text-decoration: none" class="text-dark">
                                <div class="card mt-4 shadow p-3 mb-5  rounded">
                                    <div class="card-body text-center">
                                        <img src="{{ url('gambar/' . $row->gambar) }}" class="card-img-top" alt=""
                                            width="40%" height="40%">
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
@endsection
