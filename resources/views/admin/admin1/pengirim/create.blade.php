@extends('admin.layout.head')
@section('content-admin')
<title>{{ config('app.name') }} | Create pengirim</title>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center fw-bold">Tambah Pengirim</h2>
                        <hr class="border border-dark border-3 opacity-75">
                        <form action="" method="post" class="form-basic" enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="fw-bold">Nama Pengirim</label>
                                        <input type="text" name="nama_pengirim"
                                            class="form-control
                                        @error('nama_pengirim')
                                            is-invalid
                                        @enderror"
                                            placeholder="Masukan Nama Pengirim" value="{{ old('nama_pengirim') }}">

                                        @error('nama_pengirim')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="fw-bold">Ongkos Kirim</label>
                                        <input type="string" name="ongkir"
                                            class="form-control
                                        @error('ongkir')
                                            is-invalid
                                        @enderror"
                                            placeholder="Masukan Ongkos Kirim" value="{{ old('ongkir') }}">

                                        @error('ongkir')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mt-3">Tambah</button>
                                <a href="#" class="btn btn-outline-primary mt-3">Cancle</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
