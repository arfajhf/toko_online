@extends('admin.layout.head')
@section('content-admin')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center fw-bold">Tambah Produk</h2>
                        <hr class="border border-dark border-3 opacity-75">
                        <form action="" method="post" class="form-basic" enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="fw-bold">Nama Barang</label>
                                        <input type="text" name="nama_barang"
                                            class="form-control
                                        @error('nama_barang')
                                            is-invalid
                                        @enderror"
                                            placeholder="Masukan nama barang" value="{{ old('nama_barang') }}">

                                        @error('nama_barang')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="fw-bold">Foto Produk</label>
                                        <input type="file" name="gambar"
                                            class="form-control
                                        @error('gambar')
                                            is-invalid
                                        @enderror"
                                            value="{{ old('gambar') }}" id="gambar">

                                        @error('gambar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="fw-bold">Harga</label>
                                        <input type="number" name="harga"
                                            class="form-control
                                        @error('harga')
                                            is-invalid
                                        @enderror"
                                            placeholder="Masukan harga" value="{{ old('harga') }}">

                                        @error('harga')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="fw-bold">Deskripsi</label>
                                        <textarea name="deskripsi"
                                            class="form-control
                                        @error('deskripsi')
                                            is-invalid
                                        @enderror"
                                            placeholder="Masukan deskripsi barang">{{ old('deskripsi') }}</textarea>

                                        @error('deskripsi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="fw-bold">Kondisi</label>
                                        <select name="kondisi"
                                            class="form-control
                                        @error('kondisi')
                                            is-invalid
                                        @enderror">
                                            <option selected>Pilih Kondisi Barang</option>
                                            <option value="baru">Baru</option>
                                            <option value="bekas">Bekas</option>
                                        </select>
                                        @error('kondisi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="fw-bold">Kategori</label>
                                        <select name="kategori"
                                            class="form-control
                                        @error('kategori')
                                            is-invalid
                                        @enderror">
                                            <option selected>Pilih Kategori Barang</option>
                                            <option value="cctv">cctv</option>
                                            <option value="notebook">notebook</option>
                                            <option value="pc">pc</option>
                                            <option value="hardware">hardware</option>
                                            <option value="ups">ups</option>
                                            <option value="cable">cable</option>
                                        </select>
                                        @error('kategori')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="fw-bold">Berat Barang</label>
                                        <input type="number" name="berat"
                                            class="form-control
                                        @error('berat')
                                            is-invalid
                                        @enderror"
                                            placeholder="Masukan berat" value="{{ old('berat') }}">

                                        @error('berat')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="fw-bold">Masa Barang</label>
                                        <select name="masa" id=""
                                            class="form-control @error('masa')
                                            is-invalid
                                            @enderror">
                                            <option selected>Pilih Masa Barang</option>
                                            <option value="kg">kg</option>
                                            <option value="g">g</option>
                                        </select>

                                        @error('masa')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">

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
