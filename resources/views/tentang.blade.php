@include('layout.header')

<body>
    {{-- navbar --}}
    @include('layout.navbar')

    <div class="container">
        <div class="image">
            <img src="/img/aset4.jpg" class="tentang-image1" alt="foto lebar parhalado/gereja">
        </div>
        <section>
            <div class="tentang">
                <div class="tentang-judul">
                    <h3 class="mt-4">HKBP Perumnas Batu Onom</h3>
                </div>
                <div class="sejarah-gereja">
                    <div class="row">
                        <div class="col-4">
                            <img src="/img/aset2.jpg" class="tentang-gereja-image1" alt="foto gereja">
                        </div>
                        <div class="col-8">
                            <p>Sejarah Gereja HKBP Perumnas Batu Onom, Alamat, Latar Belakang</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur distinctio iste eum
                                sed
                                sit.</p>
                        </div>
                    </div>
                </div>
                <div class="visi-misi">
                    <div class="row">
                        <div class="col-8">
                            <div class="judul-visimisi">
                                <h3>Visi Misi Gereja HKBP Perumnas Batu Onom</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, odit nulla saepe rem
                                necessitatibus accusamus?</p>
                        </div>
                        <div class="col-4">
                            <img src="/img/aset2.jpg" class="tentang-gereja-image2" alt="konten">
                        </div>
                    </div>
                </div>
        </section>

        <section>
            <div class="kontak">
                <div class="kontak-isi">
                    <h4>Kontak HKBP Perumnas Batu Onom</h4>
                    <!-- <div class="kontak-isi">
                        <div class="row">
                            <div class="col">
                                <p>Pendeta</p>
                            </div>
                            <div class="col">
                                <p>: 11</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Bibelvrou</p>
                            </div>
                            <div class="col">
                                <p>: 11</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Sintua</p>
                            </div>
                            <div class="col">
                                <p>: 11</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Email</p>
                            </div>
                            <div class="col">
                                <p>: 11</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Atau anda dapat mengirim pesan</p>
                            </div>
                            <div class="col">
                                <a href="#">Disini...</a>
                            </div>
                        </div>
                    </div> -->

                    <table class="table table-kontak table-sm table-borderless">
                        <tbody>
                            <tr>
                                <td>Pendeta</td>
                                <td> : 11</td>
                            </tr>
                            <tr>
                                <td>Bibelvrou</td>
                                <td> : 11</td>
                            </tr>
                            <tr>
                                <td>Sintua</td>
                                <td> : 11</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td> : 11</td>
                            </tr>
                            <tr>
                                <td>Atau anda dapat mengirim pesan</td>
                                <td> : <a href="form-kontak.html" class="link-kontak"> disini...</a></td>
                            </tr>
                        </tbody>
                    </table>
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