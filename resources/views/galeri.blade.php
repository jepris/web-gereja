@extends('layouts.master')
@section('title', 'Galeri - HKBP Perumnas Batu Onom')
@section('content')
<div class="container">
    <section class="mt-5 mb-4">
        <div class="galleri">
            @foreach ($galeri as $item)
            <div class="row">
                <div class="col">
                    <img src="{{ asset('img/' . $item->file) }}" class="galeri-img" alt="{{ $item->title }}">
                </div>
            </div>
            @endforeach
            {{-- <div class="row">
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
            </div> --}}

        </div>
    </section>
</div>
@endsection