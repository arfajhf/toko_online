@extends('admin.layout.head')

@section('content-admin')
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ url('gambar/'. $data->gambar) }}" alt="vector" class="img-fluid">
                    </div>

                    <div class="col-md-6">
                        <div class="col-md-10">
                            <h1>{{ $data->nama_barang }}</h1>
                        </div>
                        <div class="col-md-12 mt-3">
                            <ul style="margin-left: -30px;" class="d-flex flex-column">
                                <li class="list-unstyled fst-italic" style="font-size: 23px;">Rp.{{ $data->harga }}</li>
                                <li class="list-unstyled fst-italic " style="font-size: 23px;">Deskripsi Produk</li>
                                <span class="list-unstyled fst-italic " style="font-size: 18px;">
                                    <span class="text-secondary">Kategori: {{ $data->kategori }}</span><br>
                                    <span class="text-secondary">Kondisi: {{ $data->kondisi }}</span><br>
                                    <span class="text-secondary">Berat: {{ $data->berat }}KG</span>
                                    <p>{{ $data->deskripsi }}</p>
                                </span>
                            </ul>
                            <a href="/pemesanan/{{ $data->id }}" class="btn  btn-dark">Beli</a>
                            <a href="#" class="btn btn-outline-dark">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
