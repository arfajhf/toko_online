@extends('admin.layout.head')
@section('content-admin')
    <title>{{ config('app.name') }} | Produk</title>

    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <h2 class="text-center fw-bold">Table Pemesanan</h2>
                        <hr class="border border-dark border-3 opacity-75">
                    </div>
                </div>

                <table class="border-dark table mt-5 text-center">
                    <tr>
                        <th>Nomor Transaksi</th>
                        <th>Barang</th>
                        <th>Tanggal Transaksi</th>
                        <th>Total Harga</th>
                        @can('role', 'admin')
                            <th>Action</th>
                        @endcan
                    </tr>

                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $row->no_transaksi }}</td>
                            <td>{{ $row->pemesanan->nama_barang }}</td>
                            <td>{{ $row->tanggal_teransaksi }}</td>
                            <td>Rp.{{ $row->total_harga }}</td>
                            <td>
                                {{-- @if ($row->status == 'dikemas')
                                <a href="" class="btn btn-outline-success">Kirim</a>
                            @endif
                            @if ($row->status == 'dikirim')
                                <a href="" class="btn btn-outline-success">Selesai</a>
                            @endif --}}
                                @can('role', 'admin')
                                    <a href="/pesanan/view/{{ $row->id }}" class="btn btn-outline-info">View</a>
                                @endcan
                                {{-- <form action="/Pemesanan/delete/{{ $row -> id }}" method="get" class="form-basic d-inline">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apa anda yakin ingin menghapus data ini?')">Delete</button>
                            </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
