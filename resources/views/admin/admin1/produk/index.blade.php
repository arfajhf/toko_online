@extends('admin.layout.head')
@section('content-admin')
<title>{{ config('app.name') }} | Produk</title>

    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <h2 class="text-center fw-bold">Table Produk</h2>
                        <hr class="border border-dark border-3 opacity-75">
                    </div>
                </div>
                <?php
                    $no = 1;
                ?>
                <a href="{{ route('produkCreate') }}" class="btn btn-outline-primary">Tambah Produk</a>

                <table class="border-dark table mt-5 text-center">
                    <tr>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Kondisi</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $row -> nama_barang }}</td>
                        {{-- <td>
                            <img src="{{ url('gambar/' . $row -> gambar) }}" width="5%" alt="" class="img-fluid border border-primary" >
                        </td> --}}
                        <td>Rp. {{ $row -> harga }}</td>
                        <td>{{ $row -> kondisi }}</td>
                        <td>
                            <a href="/produk/edit/{{ $row -> id }}" class="btn btn-outline-success">Edit</a>
                            <a href="/produk/view/{{ $row -> id }}" class="btn btn-outline-info">View</a>
                            <form action="/produk/delete/{{ $row -> id }}" method="get" class="form-basic d-inline">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apa anda yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
