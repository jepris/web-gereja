<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pendaftaran Malua/Sidi</title>
</head>

<body>
    <div class="container">
        <form action="">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Ayah (Wali)</label>
                <input type="text" name="wali" class="form-control" id="exampleFormControlInput1"
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
                <input type="number" name="notelp" class="form-control" id="exampleFormControlInput1"
                    placeholder="08xxxxxxxxxx" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">alamat</label>
                <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="jalan --" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label fw-bold">Info anggota keluarga yang
                    akan sidi (Nama/gender/tanggal lahir)</label>
                <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Upload Akte Kelahiran</label>
                <input class="form-control" name="fileakte" accept=".pdf" type="file" id="formFile" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Upload Surat Baptis</label>
                <input class="form-control" name="filebaptis" accept=".pdf" type="file" id="formFile" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</body>

</html>
