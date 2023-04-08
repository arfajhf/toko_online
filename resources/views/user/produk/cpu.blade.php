@extends('admin.layout.head')
@section('content-admin')
    <title>{{ config('app.name') }} | Cctv</title>
    <div class="container">
        <section class="container bg-primary rounded">
            <div class="row">
                <div class="col-lg-6 hero-img">
                    <img src="{{ url('assets/img/cpu.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <h1 class="text-center text-light">Kami juga menyediakan PC yang terjamin kuatitasnya</h1>
                </div>
            </div>
        </section>

        <section class="values mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col col-md-12">
                        <div class="text-center mb-2 mt-5 fw-bold">
                            <h1 id="rekomend" class="text-dark fw-bold">Rekomendasi Untuk Anda</h1>
                            <p>Kami merekomendasikan produk di bawah ini untuk anda dengan kualitas terjamin</p>
                        </div>
                    </div>

                    {{-- baris ke 1 --}}
                    @foreach ($data as $row)
                        <div class="col col-md-3">
                            <a href="/view/{{ $row->id }}" style="text-decoration: none" class="text-dark">
                                <div class="card mt-4 shadow p-3 mb-5  rounded"     >
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
