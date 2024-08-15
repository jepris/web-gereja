<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun - HKBP Perumnas Batu Onom</title>
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
            <div class="login d-flex justify-content-end" style="align-items: center;">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <h3 class="fw-bold text-center mb-3">Buat Akun</h3>
                                <div class="mb-3">
                                    <label for="name" class="form-label fw-bold">Nama Lengkap</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" id="name"
                                        placeholder="nama lengkap" required value="{{ old('name') }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <label for="birth_date" class="form-label fw-bold">Tanggal
                                                Lahir</label>
                                            <input type="date" name="birth_date" class="form-control"
                                                id="birth_date"required value="{{ old('birth_date') }}">
                                        </div>
                                        <div class="col">
                                            <label for="wijk" class="form-label fw-bold">Wijk</label>
                                            <select class="form-select" name="wijk"
                                                aria-label="Default select example" id="wijk">
                                                @for ($i = 1; $i <= 16; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label fw-bold">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat"
                                        placeholder="jalan --" required value="{{ old('alamat') }}">
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <label for="notelp" class="form-label fw-bold">Nomor
                                                Handphone</label>
                                            <input type="number" name="notelp" class="form-control" id="notelp"
                                                required value="{{ old('notelp') }}">
                                        </div>
                                        <div class="col">
                                            <label for="umur" class="form-label fw-bold">umur</label>
                                            <input type="number" name="umur" class="form-control" id="umur"
                                                required value="{{ old('umur') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-bold">Email address</label>
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email"
                                        placeholder="name@example.com" required value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label fw-bold">Password</label>
                                    <input type="password" name="password"
                                        class="form-control @error('name') is-invalid @enderror" id="password"
                                        required>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <p class="text-center fw-bold">Sudah punya akun ? <span><a href="/register"
                                            class="text-decoration-none fw-bold" style="color: blue;">Login</a></span>
                                </p>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Buat Akun</button>
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
