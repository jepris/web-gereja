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
                        <form action="">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                                    placeholder="nama lengkap" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Tanggal Lahir</label>
                                <input type="date" name="birth_date" class="form-control"
                                    id="exampleFormControlInput1" placeholder="08xxxxxxxxxx" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">alamat</label>
                                <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1"
                                    placeholder="jalan --" required>
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
                                <input type="number" name="notelp" class="form-control" id="notelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="umur" class="form-label fw-bold">Umur</label>
                                <input type="number" name="umur" class="form-control" id="umur" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label fw-bold">Password</label>
                                <input type="password" name="password" class="form-control"
                                    id="exampleFormControlInput1" required>
                            </div>
                            <button type="submit" class="btn btn-success">Kirim</button>
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
