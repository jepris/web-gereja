<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pendataan Jemaat Baru</title>
</head>
<body>
    <div class="container">
    <form action="">
        <div class="mb-3">
            <label for="nama" class="form-label fw-bold">Nama</label>
            <input type="text" name="name" class="form-control" id="nama" placeholder="nama lengkap" required>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label fw-bold">No. Handphone</label>
            <input type="number" name="notelp" class="form-control" id="no_hp" placeholder="08xxxxxxxxxx" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label fw-bold">alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="jalan --"  name="alamat"  required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email address</label>
            <input type="email" class="form-control" id="email"
                placeholder="name@example.com"  name="email" required>
        </div>
        <div class="mb-3">
            <label for="gereja_asal" class="form-label fw-bold">Gereja Asal</label>
            <input type="text" class="form-control" id="gereja_asal"
                placeholder="Hkbp --"  name="asal" required>
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">Upload Surat Referensi Gereja Asal</label>
            <input class="file" type="file" id="file" accept=".pdf"  name="file" required>
          </div>
        <div class="mb-3">
            <label for="keluarga" class="form-label fw-bold">Anggota Keluarga</label>
            <textarea class="form-control" id="keluarga" rows="4"  name="keterangan"  required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
</body>
</html>