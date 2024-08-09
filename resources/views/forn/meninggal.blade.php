<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pendataan Jemaat Meninggal</title>
</head>
<body>
    <div class="container">
    <form action="">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-bold">Nama / Keluarga</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                placeholder="nama lengkap" required>
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
            <label for="exampleFormControlInput1" class="form-label fw-bold">No. Handphone</label>
            <input type="number" name="notelp" class="form-control" id="exampleFormControlInput1" placeholder="08xxxxxxxxxx" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-bold">alamat</label>
            <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="jalan --" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-bold">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                placeholder="name@example.com" requiredw>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label fw-bold">Info Anggota Keluarga yang Meninggal</label>
            <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="4" placeholder="Nama/Gender/tanggal lahir" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
</body>
</html>