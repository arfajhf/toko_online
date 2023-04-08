@extends('admin.layout.head')
@section('content-admin')
    <title>{{ config('app.name') }} | Pengirim</title>

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
                <a href="{{ route('pengirimCreate') }}" class="btn btn-outline-primary">Tambah Produk</a>
                <table class="border-dark table mt-5 text-center">
                    <tr>
                        <th>Nama Pengirim</th>
                        <th>Ongkos Kirim</th>
                    </tr>

                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $row->nama_pengirim }}</td>
                            <td>{{ $row->ongkir }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
