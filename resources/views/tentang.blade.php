@extends('layouts.master')
{{-- @extends('modals.kontak') --}}
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
                            <td> : <button type="button" class="btn btn-success" >
                                <a href="/hurias/newkontak" role="button">Disini</a>
                              </button></td>
                        </tr>
                    </tbody>
                </table>
                @if(Session::has('message'))
                            <div id="success-alert" class="alert alert-success">
                                {{ Session::get('message') }}
                            </div>
                @endif
            </div>
        </div>
    </section>
</div>
<script>
    setTimeout(function() {
        var alert = document.getElementById('success-alert');
        if (alert) {
            alert.style.display = 'none';
        }
    }, 5000); // Pesan akan menghilang setelah 5 detik
</script>
@endsection
