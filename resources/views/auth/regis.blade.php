<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi - HKBP Perumnas Batu Onom</title>
</head>
<body>
    <div class="container">
        <form action="">
            <legend>Registrasi Jemaat</legend>
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Nama</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="tanggallahir" class="form-label fw-bold">Tanggal Lahir</label>
                <input type="date" name="birth_date" class="form-control" id="tanggallahir" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label fw-bold">alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" required>
            </div>
            <div class="mb-3">
                <label for="wijk" class="form-label fw-bold">Wijk</label>
                <select class="form-select" name="wijk" aria-label="Default select example" id="wijk">
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
            <button type="submit" class="btn btn-primary">Buat Akun</button>
        </form>
    </div>
</body>
</html>