<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Modal Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <div class="form-judul">
                    <h4 class="card-title fw-bold d-flex justify-content-center">Pendaftaran Pernikahan HKBP Perumnas Batu Onom</h4>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Nama / Keluarga</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama lengkap">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Wijk</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected disabled>-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
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
                    <label for="exampleFormControlTextarea1" class="form-label fw-bold">Info Anggota Keluarga yang Akan Menikah & Pasangan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="(cth : Chandra Silaban/Pria/28 Mei 1997 dengan Rumiati Marpaung/Wanita/16 September 1998)"></textarea>
                </div>
                <a href="#" class="btn btn-primary d-block justify-content-end">Kirim</a>
                <a href="javascript:history.back()" class="btn btn-secondary d-block justify-content-end mt-2">back</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
