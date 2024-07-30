@extends('layouts.master')
@section('title', 'Tentang')
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
                            <td> : <a href="/form_kontak" class="link-kontak"> disini...</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection
