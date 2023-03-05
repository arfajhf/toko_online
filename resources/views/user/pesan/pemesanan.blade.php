@extends('admin.layout.head')

@section('content-admin')
    <style>
        .form-control:focus {
            box-shadow: 2px 2px 5px rgba(0, 0, 0, .5) !important;
            border: 0px;
        }
    </style>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow mt-4">
                    <div class="card-body">
                        <h1 class="text-right"><span class="bg-dark text-light">BUY</span> Online</h1>
                        <hr>
                        <h3 class="fw-bold">Checkout</h3>
                        <form action="#" method="post">
                            @csrf
                            <label for="" class="fw-bold" style="font-size: 18px">Nama Penerima</label>
                            <input type="text" class="form-control shadow1" name="nama_pemesan"
                                placeholder="Contoh: Ilham Alvariq">
                            <label for="" class="fw-bold mt-1" style="font-size: 18px">Jumlah</label>
                            <input type="number" class="form-control shadow1" name="jumlah_beli" value="0">
                                {{-- placeholder="Contoh: 0823********"> --}}
                            <label for="" class="fw-bold mt-1" style="font-size: 18px">Alamat Pengiriman</label>
                            <textarea name="alamat" class="form-control shadow1" placeholder="Contoh: Jl.Sidamulih No.04..."></textarea>
                            {{-- product --}}
                            <label for="" class="fw-bold mt-1" style="font-size: 18px"> Product Pilihan Anda</label>
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-md-4">
                                            <img src="{{ url('gambar/'. $data->gambar) }}" alt="vector"
                                                class="img-fluid ">
                                        </div>
                                        <div class="col-md-7">
                                            <span><input type="text" class="form-control fw-bold" style="font-size: 16px"
                                                    value="{{ $data->nama_barang }}" disabled></span>

                                            <div class="row mt-4">
                                                <div class="col">Nomor Transaksi</div>
                                                <div class="col-1">:</div>
                                                <div class="col">099897</div>
                                            </div>

                                            <div class="row">
                                                <div class="col">Berat</div>
                                                <div class="col-1">:</div>
                                                <div class="col">{{ $data->berat }} {{  $data->masa }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Harga</div>
                                                <div class="col-1">:</div>
                                                <div class="col">Rp.{{ $data->harga }}</div>
                                            </div>

                                            <button class="btn btn-dark mt-4 rounded-0 w-100">Checkout Sekarang</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card shadow mt-4">
                    <div class="card-body">
                        <h4>Keterangan</h4>
                        <p>Transfer Pembayaran Ke Rekening Dibawah Ini: <br>
                            Nomor Rekening: 0000-82666-928-01 <br>
                            Atas Nama: Ilham Alvariq
                        </p>
                    </div>
                </div>
                <div class="card shadow mt-4">
                    <div class="card-body">
                        <h4>Catatan</h4>
                        <p style="font-size: 15px;">
                            Jika sudah melakukan pembayaran, silahkan konfirmasi pembayaran anda dengan mengklik tombol
                            <a href="" class="text-light bg-dark text-decoration-none rounded" style="padding: 2px 5px 2px 5px">Whatsapp</a><br>
                            Kirimkan pesan dengan format sebagai berikut: <br>
                            -Nama Pengirim <br>
                            -Nomor Transaksi <br>
                            -Bukti Pembayaran
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    {{-- <div class="modal fade" id="cekout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
