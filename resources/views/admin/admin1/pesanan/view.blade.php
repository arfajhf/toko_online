@extends('admin.layout.head')

@section('content-admin')
<title>{{ config('app.name') }} | View Pemesanan</title>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">Data Pemesanan</h3>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="text-center"><span style="color: #3b3b3b1; font-weight: bold;">No Transaksi</span>
                                    <br> {{ $data->no_transaksi }}</h5><br>
                                <h5 class="text-center"><span style="color: #3b3b3b1; font-weight: bold;">No Hp
                                        Pemesan</span> <br> {{ $user->no_hp }}</h5><br>
                                <h5 class="text-center"><span style="color: #3b3b3b1; font-weight: bold;">Tanggal
                                        Transaksi</span> <br> {{ $data->tanggal_teransaksi }}</h5>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-center"><span style="color: #3b3b3b1; font-weight: bold;">Nama
                                        Pemesan</span> <br> {{ $data->nama_pemesan }}</h5><br>
                                <h5 class="text-center"><span style="color: #3b3b3b1; font-weight: bold;">Total Harga</span>
                                    <br> Rp.{{ $data->total_harga }}</h5><br>
                                <h5 class="text-center"><span style="color: #3b3b3b1; font-weight: bold;">Alamat Pemesan
                                    </span><br> {{ $data->alamat }}</h5>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <h5 class="fw-bold">Nama Barang : {{ $data->pemesanan->nama_barang }}</h5>
                        <h5 class="fw-bold">Jumlah Barang : {{ $data->pemesanan->jumlah_barang }}</h5>
                        <h5 class="fw-bold">Harga Barang : Rp.{{ $data->pemesanan->harga_barang }}</h5>
                        <h5 class="fw-bold">Total Harga Barang : Rp.{{ $data->pemesanan->total_harga_barang }}</h5>
                        <h5 class="fw-bold">Nama Pengirim : {{ $data->pengirim->nama_pengirim }}</h5>
                        <h5 class="fw-bold">Ongkos Kirim : Rp.{{ $data->pengirim->ongkir }}</h5>
                    </div> --}}
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid border rounded" src="{{ url('gambar/' . $barang->gambar) }}">
                            </div>
                            <div class="col-md-6">
                                <h5>{{ $barang->nama_barang }}</h5>
                                <h5>Rp.{{ $barang->harga }}</h5>
                                <h5>{{ $barang->berat }}{{ $barang->masa }}</h5>
                            </div>
                        </div>
                    </div>
                </div><br><br>
                <form action="" method="post">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <select name="pengirim" class="form-control
                            @if ($data->status == 'selesai')
                                {{ 'd-none' }}
                            @endif">
                            @if ($data->status == 'dikirim')
                                <option selected value="{{ $pengirim1->id }}">{{ $pengirim1->nama_pengirim }} {{ $pengirim1->ongkir }}</option>
                            @endif
                            @if ($data->status == 'dikemas')
                                <option selected>Pilih Pengirim</option>
                            @endif
                            @if ($data->status == 'selesai')
                                <option selected value="{{ $pengirim1->id }}">{{ $pengirim1->nama_pengirim }} {{ $pengirim1->ongkir }}</option>
                            @endif
                                @foreach ($pengirim as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_pengirim }} {{ $item->ongkir }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-5">
                            <select name="status" class="form-control
                            @if ($data->status == 'selesai')
                                {{ 'd-none' }}
                            @endif">
                                {{-- <option selected>Pilih Status</option> --}}
                                @if ($data->status == 'dikemas')
                                    <option value="dikirim" selected>Dikirim</option>
                                @endif
                                @if ($data->status == 'dikirim')
                                    <option value="selesai" selected>Selesai</option>
                                @endif
                            </select>
                            {{-- <div class="form-group d-flex ms-auto w-100 justify-content-end gap-2">
                                <a href="{{ route('pesanan') }}" class="btn btn-outline-primary mt-3 me-2">Cancle</a>
                                <p class="mt-3"></p>
                                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                            </div> --}}
                            <div class="form-group d-flex justify-content-end">
                                <a href="{{ route('pesanan') }}" class="btn btn-outline-primary me-2 mt-3" style="margin-right: 10px">Cancle</a>
                                <button type="submit" class="btn bnt-block btn-primary mt-3
                                @if ($data->status == 'selesai')
                                    {{ 'd-none' }}
                                @endif">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
