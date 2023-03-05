@extends('admin.layout.head')
@section('content-admin')
<title>{{ config('app.name') }} | User</title>

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
                        <h2 class="text-center fw-bold">Table User</h2>
                        <hr class="border border-dark border-3 opacity-75">
                    </div>
                </div>
                <?php
                    $no = 1;
                ?>
                <a href="{{ route('admin.create') }}" class="btn btn-outline-primary">Tambah User</a>

                <table class="border-dark table mt-5">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Handphone</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $row -> nama }}</td>
                        <td>{{ $row -> email }}</td>
                        <td>{{ $row -> no_hp }}</td>
                        <td>
                            <a href="/admin/edit/{{ $row -> id }}" class="btn btn-outline-success">Edit</a>
                            <form action="/admin/delete/{{ $row -> id }}" method="get" class="form-basic d-inline">
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
