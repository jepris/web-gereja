@extends('layouts.master')
@section('title', 'HKBP Perumnas Batu Onom')
@section('content')
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
                    @foreach ($schedules  as $schedule)
                    <tr>
                        <td>{{ $schedule->nama_ibadah }}</td>
                        <td>{{ $schedule->hari }}</td>
                        <td>{{ $schedule->keterangan }}</td>
                    </tr>
                    @endforeach
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
                @foreach ($news   as $item)
                <div class="col-6 konten-coloum">
                    <a href="">
                        <div class="row">
                            <div class="col">
                                <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid rounded-start" alt="{{ $item->title }}">
                                {{-- <img src="/img/aset4.jpg" class="img-fluid rounded-start" alt="image"> --}}
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    <p class="card-text">{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="berita-selanjutnya">
            <a href="/warta" class="">Selanjutnya >> </a>
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

@endsection

