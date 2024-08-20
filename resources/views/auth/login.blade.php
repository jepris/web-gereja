<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HKBP Perumnas Batu Onom</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section>
        <nav class="navbar">
            <div class="container-fluid d-flex justify-content-end">
                <a class="navbar-brand fw-bold" href="/login">
                    <img src="{{ asset('img/logo hkbp.png')}}" alt="Logo" width="50" height="50"
                        class="d-inline-block align-text-center">
                    HKBP Perumnas Batu Onom
                </a>
            </div>
        </nav>
    </section>
    <section>
        <div class="container">
            <div class="login d-flex justify-content-end" style="align-items: center;margin-top: 150px;">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <h3 class="fw-bold text-center mb-3">Login</h3>
                                @if (Session::has('message'))
                                    <div id="success-alert" class="alert alert-success">
                                        {{ Session::get('message') }}
                                    </div>
                                @endif
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Nomor Handphone</label>
                                    <input type="number" class="form-control  @error('notelp') is-invalid @enderror"
                                        id="notelp" name="notelp" required value="{{ old('notelp') }}">
                                    @error('notelp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
                                    <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                        id="password" name="password" required>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <p class="text-center fw-bold">belum punya akun ? <span><a href="/register"
                                            class="text-decoration-none fw-bold" style="color: blue;">Buat
                                            Akun</a></span></p>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- bootstap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
