<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pendataan Jemaat Pindah</title>
</head>

<body>
    <div class="container">
        <form action="">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Nama / Keluarga</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama lengkap">
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
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="08xxxxxxxxxx">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">alamat</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="jalan --">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Gereja Tujuan / Wijk</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="HKBP PErumnas/11">
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</body>

</html>
