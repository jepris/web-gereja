<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tittle -->
    <link rel="icon" type="image/png" href="{{ asset('img/logo hkbp.png') }}">
    <title> @yield('title')</title>

    <!-- insert bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg border-bottom border-2 border-primary mb-3">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ asset('img/logo hkbp.png') }}" alt="Logo">HKBP Perumnas Batu Onom</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/warta-jemaat">Warta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/galeri">Galleri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/layanan">Layanan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/profile" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Akun
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/login">Login</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 

    @yield('content')

<!-- contact person -->
<section>
    <div class="contact-person">
        <div class="row">
            <div class="col-4 cpntact-us">
                <h4> Contact Us</h4>
                <p></p>
            </div>
            <div class="col-4 navigasi-coloum">
                <h4>Navigasi</h4>
                <ul>
                    <li><a href="beranda.html">Home</a></li>
                    <li><a href="warta.html">warta</a></li>
                    <li><a href="warta.html#berita">Berita</a></li>
                    <li><a href="layanan.html">Layanan</a></li>
                </ul>
            </div>
            <div class="col-4">
                <img src="/img/logo hkbp1a.png" class="contact-image" alt="image">
            </div>
        </div>

    </div>
</section>
    <!-- footer -->
    <footer>
        <p>All Rights Reserved. © 2024 HKBP PERUMNAS BATU ONOM</p>

        <div class="social-links">
            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>

        <a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
    </footer>

@include('modals.modal-kontak')
    <!-- insert bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
