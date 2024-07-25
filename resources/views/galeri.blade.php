@include('layout.header')

<body>

    {{-- navbar --}}
    @include('layout.navbar')

    <div class="container">
        <section class="mt-5 mb-4">
            <div class="galleri">
                <div class="row">
                    <div class="col">
                        <img src="/img/aset4.jpg" class="galeri-img" alt="gambar">
                    </div>
                    <div class="col">
                        <img src="/img/aset4.jpg" class="galeri-img" alt="gambar">
                    </div>
                    <div class="col">
                        <img src="/img/aset4.jpg" class="galeri-img" alt="gambar">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="/img/aset4.jpg" class="galeri-img" alt="gambar">
                    </div>
                    <div class="col">
                        <img src="/img/aset4.jpg" class="galeri-img" alt="gambar">
                    </div>
                    <div class="col">
                        <img src="/img/aset4.jpg" class="galeri-img" alt="gambar">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="/img/aset4.jpg" class="galeri-img" alt="gambar">
                    </div>
                    <div class="col">
                        <img src="/img/aset4.jpg" class="galeri-img" alt="gambar">
                    </div>
                    <div class="col">
                        <img src="/img/aset4.jpg" class="galeri-img" alt="gambar">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="/img/aset4.jpg" class="galeri-img" alt="gambar">
                    </div>
                    <div class="col">
                        <img src="/img/aset4.jpg" class="galeri-img" alt="gambar">
                    </div>
                    <div class="col">
                        <img src="/img/aset4.jpg" class="galeri-img" alt="gambar">
                    </div>
                </div>

            </div>
        </section>
    </div>


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
                        <li><a href="">Home</a></li>
                        <li><a href="">Jadwal</a></li>
                        <li><a href="">Berita</a></li>
                        <li><a href="">Layanan</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <img src="/img/logo hkbp1a.png" class="contact-image" alt="image">
                </div>
            </div>

        </div>
    </section>

    {{-- footer --}}
    @include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>