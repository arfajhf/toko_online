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
                                <div class="h5 mb-0 font-weight-bold text-gray-800 my-auto">{{ $barang->count() }}</div>
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
                                <div class="h5 mb-0 font-weight-bold text-gray-800 my-auto">$40,000</div>
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
@endsection
