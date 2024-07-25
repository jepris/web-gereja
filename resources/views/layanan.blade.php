@include('layout.header')

<body>
    <!-- navbar -->
    @include('layout.navbar')

    <div class="container">
        <section>
            <div class="layanan">
                <div class="layanan-isi">
                    <h4 class="fw-bold " style="text-decoration: underline;">Layanan Jemaat HKBP Perumnas Batu Onom Online</h4>
                    <p>Untuk dapat meningkatkan pelayanan terhadap jemaat, HKBP Perumnas Batu Onom membuka jalur
                        pelayanan
                        via
                        online. Silahkan klik link di bawah sesuai dengan layanan yang diinginkan</p>
                    <ul>
                        <!-- <li><a href="">Pendaftaran Jemaat Baru</a></li>
                <li><a href="">Pemberitahuan Anak Lahir</a></li>
                <li><a href="">Permohonan Baptisan</a></li>
                <li><a href="">Pendaftaran Sidi/Katekisasi</a></li>
                <li><a href="">Pendaftaran Pra-Nikah (konseling / Martumpol)</a></li>
                <li><a href="">Pendaftaran Pernikahan</a></li>
                <li><a href="">Pemberitahuan jemaat Sakit</a></li>
                <li><a href="">Permohonan Pindah Jemaat/Wijk</a></li>
                <li><a href="">Pemberitahuan Jemaat Meninggal Dunia</a></li> -->
                        <li>Pendaftaran Jemaat Baru <a href="form-kontak.html">
                                << Here>>
                            </a></li>
                        <li>Pemberitahuan Anak Lahir <a href="form-kontak.html">
                                << Here>>
                            </a></li>
                        <li>Permohonan Baptisan <a href="form-kontak.html">
                                << Here>>
                            </a></li>
                        <li>Pendaftaran Sidi/Katekisasi <a href="form-kontak.html">
                                << Here>>
                            </a></li>
                        <li>Pendaftaran Pra-Nikah (konseling / Martumpol) <a href="form-kontak.html">
                                << Here>>
                            </a></li>
                        <li>Pendaftaran Pernikahan <a href="form-kontak.html">
                                << Here>>
                            </a></li>
                        <li>Pemberitahuan jemaat Sakit <a href="form-kontak.html">
                                << Here>>
                            </a></li>
                        <li>ermohonan Pindah Jemaat/Wijk <a href="form-kontak.html">
                                << Here>>
                            </a></li>
                        <li>Pemberitahuan Jemaat Meninggal Dunia <a href="form-kontak.html">
                                << Here>>
                            </a></li>
                    </ul>
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