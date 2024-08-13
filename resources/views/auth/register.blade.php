<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buat Akun - HKBP Perumnas Batu Onom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    
</head>

<body style="background-color: rgb(103, 204, 255);">
    <div class="container mt-2 mb-4 d-flex justify-content-center">
        <div class="col-8">
            <div class="formulir">
                <div class="card">
                    <div class="card-body">
                        <img src="/img/logo hkbp.png" class="image-berita1" alt="">
                        <h4 class="headered text-center fs-3 fw-bold mb-4 pt-4">Buat Akun Baru</h4>
                        
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                                placeholder="nama lengkap" required value="{{ old('name') }}">
                                <label for="name" class="form-label fw-bold">Nama Lengkap</label>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="birth_date" class="form-label fw-bold">Tanggal Lahir</label>
                                <input type="date" name="birth_date" class="form-control"
                                    id="birth_date"required value="{{ old('birth_date') }}">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label fw-bold">alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat"
                                    placeholder="jalan --" required value="{{ old('alamat') }}">
                            </div>
                            <div class="mb-3">
                                <label for="wijk" class="form-label fw-bold">Wijk</label>
                                <select class="form-select" name="wijk" aria-label="Default select example"
                                    id="wijk">
                                    @for ($i = 1; $i <= 20; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="notelp" class="form-label fw-bold">no, Handphone</label>
                                <input type="number" name="notelp" class="form-control" id="notelp" required value="{{ old('notelp') }}">
                            </div>
                            <div class="mb-3">
                                <label for="umur" class="form-label fw-bold">Umur</label>
                                <input type="number" name="umur" class="form-control" id="umur" required value="{{ old('umur') }}">
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="name@example.com" required value="{{ old('email') }}">
                                <label for="email" class="form-label fw-bold">Email address</label>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control @error('name') is-invalid @enderror"
                                id="password" required>
                                <label for="password" class="form-label fw-bold">Password</label>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <button type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
