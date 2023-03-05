@extends('admin.layout.head')
@section('content-admin')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center fw-bold">Tambah User</h2>
                        <hr class="border border-dark border-3 opacity-75">
                        <form action="" method="post" class="form-basic">
                            @csrf
                            <div class="form-group">
                                <label for="" class="fw-bold">Nama</label>
                                <input type="text" name="nama"
                                    class="form-control
                                @error('nama')
                                is-invalid
                                @enderror"
                                    placeholder="Masukan Nama" value="{{ old('nama') }}">

                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="" class="fw-bold">Email</label>
                                <input type="email" name="email"
                                    class="form-control
                                @error('email')
                                is-invalid
                                @enderror"
                                    placeholder="Masukan Email" value="{{ old('email') }}">

                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="" class="fw-bold">No Handphone</label>
                                <input type="text" name="no_hp"
                                    class="form-control
                                @error('no_hp')
                                is-invalid
                                @enderror"
                                    placeholder="Masukan No Handphone" value="{{ old('no_hp') }}">

                                @error('no_hp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="" class="fw-bold">Password</label>
                                <input type="password" name="password"
                                    class="form-control
                                @error('password')
                                is-invalid
                                @enderror"
                                    placeholder="Masukan Password">
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
