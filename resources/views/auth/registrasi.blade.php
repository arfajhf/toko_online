<!doctype html>
<html lang="en">

<head>
    <title>{{ config('app.name') }} | Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <style>
        .font {
            font-family: 'Poppins', sans-serif;
        }
    </style>


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow mt-5">
                    <div class="card-body">
                        <h1 class="text-center mt-2"><span class="bg-dark text-light">BUY</span> Online</h1>
                        <hr>
                        <h1 class="text-center mt-3 font fw-bold"><span class="">Register</span></h1>
                        {{-- <form action="" method="post" class="form">
                            @csrf
                            <div class="form-group">
                                <label for="" class="fw-bold">Email</label>
                                <input type="email" name="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    placeholder="Enter your email">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="" class="fw-bold mt-4">Password</label>
                                <input type="password" name="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    placeholder="Enter your password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <input type="checkbox" class="from-check-input">
                                <label for="" class="from-check-label">
                                    Show Password
                                </label>
                            </div>
                            <div class="d-flex ms-auto w-100 justify-content-end gap-2">
                                <a href="{{ route('admin.create') }}" class="btn btn-outline-dark mt-3">Register</a>
                                <button type="submit" name="submit"
                                    class="btn btn-dark btn-block mt-3 ">Login</button>
                                {{-- <a href="" class="btn btn-outline-dark mt-3">Register</a>
                            </div>
                        </form> --}}

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
                            <div class="form-group mt-2">
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
                            <div class="form-group mt-2">
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
                            <div class="form-group mt-2">
                                <label for="" class="fw-bold">Password</label>
                                <input type="password" name="password"
                                    class="form-control
                                @error('password')
                                is-invalid
                                @enderror"
                                    placeholder="Masukan Password">
                            </div>
                            <div class="form-group d-flex ms-auto w-100 justify-content-end gap-2">
                                <button type="submit" class="btn btn-dark mt-3">Submit</button>
                                <a href="{{ route('admin.login') }}" class="btn btn-outline-dark mt-3">Cancle</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
