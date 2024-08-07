@extends('layouts.master')
@section('title', 'Warta - HKBP Perumnas Batu Onom')
@section('content')
<div class="container">
    <section>
        <h4 class="font-warta">Kontak HKBP Perumnas Batu Onom</h4>
        <div class="kontak">
            <div class="kontak-isi">
                <table class="table table-kontak table-sm">
                    <thead>
                        <tr class="table-warning">
                            <th>Tanggal Warta</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wartajemaat as $data)
                        <tr>
                            <td class="ps-3 pt-3">{{ $data->date }}</td>
                            <td class="d-flex justify-content-center">
                                <a class="btn btn-success" href="{{ asset('storage/' . $data->file) }}" target="_blank">Download</a>
                            </td>
                            
                            {{-- <td><a href="{{ route('downloadWarta') }}" class="btn btn-primary">Download Warta Jemaat</a></td> --}}
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="berita">
        <div class="warta-berita">
            <div class="warta-berita-judul">
                <h4 class="fw-bold">Berita / Kegiatan Terbaru</h4>
            </div>
            <div class="warta-berita-konten">
                @foreach ($news as $item)
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/aset4.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                        ago</small></p>
                            </div>
                        </div>
                    </div>
                </div> 
                @endforeach
               
            </div>
        </div>
    </section>
</div>
@endsection

