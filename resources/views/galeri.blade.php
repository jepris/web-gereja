@extends('layouts.master')
@section('title', 'Galeri - HKBP Perumnas Batu Onom')
@section('content')
<div class="container">
    <section class="mt-5 mb-4">
        <div class="galleri">
            <h3 class="fw-bold mb-3">Galeri Foto HKBP Perumnas Batu Onom</h3>
            <div class="row">
                @foreach ($galeri as $item)
                <div class="col-md-4 mb-3"> <!-- Menggunakan col-md-4 agar ada 3 kolom per baris -->
                    <img src="{{ asset('storage/' . $item->file) }}" class="img-fluid galeri-img" alt="{{ $item->title }}"
                         style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
                </div>
                @endforeach
            </div>
        </div>        
    </section>
</div>
@endsection