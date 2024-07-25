@include('layout.header')

<body>
    <!-- navbar -->
    @include('layout.navbar')

    <!-- foto corousel autoslide 6 gambar -->
    <section>
        <div class="carousel">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/img/aset1.jpg') }}" class="d-block w-100" alt="image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/aset2.jpg') }}" class="d-block w-100" alt="image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/aset3.jpg') }}" class="d-block w-100" alt="image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/aset4.jpg') }}" class="d-block w-100" alt="image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/aset5.jpg') }}" class="d-block w-100" alt="image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/aset6.jpg') }}" class="d-block w-100" alt="image">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    
    <div class="container">
        <!-- jadwal ibadah -->
        <section id="jadwal">
            <div class="jadwal">
                <h2>Jadwal Ibadah & Kegiatan</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Ibadah</th>
                            <th>Hari</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>IBADAH SEKOLAH MINGGU</td>
                            <td>Minggu</td>
                            <td>Pukul 08.00 WIB</td>
                        </tr>
                        <tr>
                            <td>IBADAH MINGGU BAHASA INDONESIA</td>
                            <td>Minggu</td>
                            <td>Pukul 08.00 WIB</td>
                        </tr>
                        <tr>
                            <td>IBADAH MINGGU BAHASA BATAK</td>
                            <td>Minggu</td>
                            <td>Pukul 10.00 WIB</td>
                        </tr>
                        <tr>
                            <td>IBADAH MINGGU REMAJA NAPOSO</td>
                            <td>Minggu</td>
                            <td>Pukul 16.00 WIB - Bahasa Indonesia</td>
                        </tr>
                        <tr>
                            <td>KEBAKTIAN PARTANGIANGAN SEKTOR 1,3,6,11,16</td>
                            <td>Selasa</td>
                            <td>Pukul 19.30 WIB Di Rumah Jemaat</td>
                        </tr>
                        <tr>
                            <td>KEBAKTIAN PARTANGIANGAN SEKTOR 2,5,7,8,9,10</td>
                            <td>Rabu</td>
                            <td>Pukul 19.30 WIB Di Rumah Jemaat</td>
                        </tr>
                        <tr>
                            <td>KEBAKTIAN PARTANGIANGAN SEKTOR 4,12,13,14,15</td>
                            <td>Kamis</td>
                            <td>Pukul 19.30 WIB Di Rumah Jemaat</td>
                        </tr>
                        <tr>
                            <td>KUNJUGAN JEMAAT SAKIT</td>
                            <td>Selasa & Jumat</td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>KEBAKTIAN PARTANGIANGAN REMAJA NAPOSO</td>
                            <td>Sabtu</td>
                            <td>Pukul 19.30 WIB Di Gedung Sekolah </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- berita dan pengumuman -->
        <section class="berita-konten">
            <div class="judul-berita">
                <p>Berita & Pengumuman Kegiatan HKBP Perumnas Batu Onom</p>
            </div>
            <div class="konten-berita">
                <div class="row">
                    <div class="col konten-coloum">
                        <a href="">
                            <div class="row">
                                <div class="col">
                                    <img src="/img/aset4.jpg" class="img-fluid rounded-start" alt="image">
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural
                                            lead-in to
                                            additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col konten-coloum">
                        <a href="">
                            <div class="row">
                                <div class="col">
                                    <img src="/img/aset4.jpg" class="img-fluid rounded-start" alt="image">
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural
                                            lead-in to
                                            additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col konten-coloum">
                        <div class="row">
                            <div class="col">
                                <img src="/img/aset4.jpg" class="img-fluid rounded-start" alt="image">
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col konten-coloum">
                        <div class="row">
                            <div class="col">
                                <img src="/img/aset4.jpg" class="img-fluid rounded-start" alt="image">
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col konten-coloum">
                        <div class="row">
                            <div class="col">
                                <img src="/img/aset4.jpg" class="img-fluid rounded-start" alt="image">
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col konten-coloum">
                        <div class="row">
                            <div class="col">
                                <img src="/img/aset4.jpg" class="img-fluid rounded-start" alt="image">
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="berita-selanjutnya">
                <a href="warta.html#berita" class="">Selanjutnya >> </a>
            </div>
        </section>

        <!-- google map -->
        <section>
            <div class="map-gereja">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.465760994035!2d99.12981197480838!3d2.9681809970079582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303186c50fcb54f9%3A0xa63ac695e959e75!2sHKBP%20Resort%20Perumnas%20Batu%20Onom!5e0!3m2!1sid!2sid!4v1721720513533!5m2!1sid!2sid"
                    width="1295px" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

    </div>

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
    @include('layout.footer')

    <!-- insert bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
