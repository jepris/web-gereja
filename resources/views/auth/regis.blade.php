<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="index.css">
    <title>Login - HKBP Perumnas Batu Onom</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <section>
        <!-- form box -->
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>
                        <!-- <ion-icon name="ticket-outline"></ion-icon> -->
                        Login
                    </h2>
                    <div class="inputbox">
                        <input type="text" name="name" class="form-control" id="name" required>
                        <label for="name" class="form-label fw-bold">Nama</label>
                    </div>
                    <div class="inputbox">
                        <input type="date" name="birth_date" class="form-control" id="tanggallahir" required>
                        <label for="tanggallahir" class="form-label fw-bold">Tanggal Lahir</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="alamat" class="form-control" id="alamat" required>
                        <label for="alamat" class="form-label fw-bold">alamat</label>
                    </div>
                    <div class="inputbox">
                        <select class="form-select" name="wijk" aria-label="Default select example" id="wijk">
                            @for ($i = 1; $i <= 20; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        <label for="wijk" class="form-label fw-bold">Wijk</label>
                    </div>
                    <div class="inputbox">
                        <input type="number" name="notelp" class="form-control" id="notelp" required>
                        <label for="notelp" class="form-label fw-bold">no, Handphone</label>
                    </div>
                    <div class="inputbox">
                        <input type="number" name="umur" class="form-control" id="umur" required>
                        <label for="umur" class="form-label fw-bold">Umur</label>
                    </div>
                    <button class="button">Buat Akun</button>
                    <div class="register">
                        <p>Have a Account |
                            <a href="/login" class="a-register">
                                <b>Login</b></a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
