@extends('layouts.master')
@extends('modals.kontak')
@section('title', 'Tentang - HKBP Perumnas Batu Onom')
@section('content')
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
                            <img src="{{ asset('/img/aset1.jpg') }}" class="tentang-gereja-image1" alt="foto gereja">
                        </div>
                        <div class="col-8 mt-4">
                            <h3 class="ms-4 fw-bold" style="text-decoration: underline">Sejarah Gereja HKBP Perumnas Batu Onom</h3>
                            <p><span class="fw-bold" style="color: blue; font-size:1.7rem;">P</span>ada tanggal 13 Maret
                                1983 merupakan hari kelahiran HKBP Perumnas Batu Onom karena pada hari
                                Minggu tersebut merupakan kebaktian minggu yang pertama dan dilakukan di Gedung SD No 126915
                                Jl. Kemiri Raya. Kebaktian tersebut dilayani oleh parhalado HKBP Batu IV masuk pukul 08.00
                                WIB. Pada tanggal 17 Maret 1983 terbentuklah Koor Ina Par Ari Selasa dan pada tanggal 22 Mei
                                1983 terbentuklah Koor NHKBP. Jumlah jemaat HKBP pada saat itu sebanyak 53 KK dan 6 bulan
                                kemudian menjadi 187 KK. <br> Dikarenakan jemaat beragama Kristen mempunyai jemaat terbanyak
                                maka
                                diberi prioritas memilih lokasi yang tersedia. Sehingga dipilihlah lokasi yang terletak di
                                Jl.Tusam Raya yang menjadi lokasi gereja saat ini. Setelah Pemerintah menyerahkan secara
                                resmi lokasi tersebut kepada HKBP, maka dimulailah proses pembangunan gereja.</p>
                        </div>
                    </div>
                </div>
                <div class="visi-misi">
                    <div class="row">
                        <div class="col-7">
                            <div class="judul-visimisi mb-3">
                                <h3 style="text-decoration: underline">Visi Misi Gereja HKBP Perumnas Batu Onom</h3>
                            </div>
                            <p class="fw-bold">Visi HKBP Perumnas Batu Onom : <br> <span
                                    style="color: blue; font-size:1.5rem;">HKBP menjadi berkat bagi dunia</span></p>
                            <p class="fw-bold">Misi HKBP Perumnas Batu Onom : </p>
                            <ul style="list-style: none">
                                <li>
                                    <p><span class="fw-bold">1. </span>Beribadah kepada Allah Tri Tunggal Bapa, Anak dan Roh Kudus dan bersekutu dengan
                                        saudara - saudara seiman</p>
                                </li>
                                <li>
                                    <p><span class="fw-bold">2. </span>mendidik warga jemaat supaya sungguh - sungguh menjadi anak Allah dan warganegara
                                        yang
                                        baik</p>
                                </li>
                                <li>
                                    <p><span class="fw-bold">3. </span>Mengabarkan Injil kepada yang belum mengenal Kristus dan yang sudah menjauh dari
                                        gereja
                                    </p>

                                </li>
                                <li>
                                    <p><span class="fw-bold">4. </span> Mendoakan dan menyampaikan pesan kenabian kepada masyarakat dan Negara</p>
                                </li>
                                <li>
                                    <p><span class="fw-bold">5. </span>Menggarami dan menerangi budaya Batak, Indonesia dan Global dengan Injil</p>


                                </li>
                                <li>
                                    <p><span class="fw-bold">6. </span>Memulihkan harkat dan martabat orang kecil dan tersisij melalui pendidikan,
                                        kesehatan
                                        dan
                                        pemberdayaan ekonomi masyarakat</p>
                                </li>
                                <li>
                                    <p><span class="fw-bold">7. </span>Mengembangkan kerjasama oikumene antar gereja dan membangun dialog lintas agama
                                    </p>
                                </li>
                                <li>
                                    <p><span class="fw-bold">8. </span>Mengembangkan penatalayanan (pelayan, organisasi, administrasi, keuangan dan aset)
                                        yang
                                        bersih, rapih, transparan, akuntabel dan melaksanakan pembangunan gereja</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-5">
                            <img src="/img/aset2.jpg" class="tentang-gereja-image2" alt="konten">
                        </div>
                    </div>
                </div>
        </section>

        <section>
            <div class="kontak">
                <div class="kontak-isi">
                    <h4>Kontak HKBP Perumnas Batu Onom</h4>
                    <table class="table table-kontak table-sm table-borderless">
                        <tbody>
                            <tr>
                                <td>Pendeta</td>
                                <td> : 081396126775</td>
                            </tr>
                            <tr>
                                <td>Bibelvrou</td>
                                <td> : 081376731456</td>
                            </tr>
                            <tr>
                                <td>Sintua</td>
                                <td> : 081370932559</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td> : jepri.h.simbolon@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Atau anda dapat mengirim pesan</td>
                                <td> : <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#kontak">
                                        disini . . .
                                    </button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
