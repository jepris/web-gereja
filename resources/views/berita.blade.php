@extends('layouts.master')
@section('content')
    <div class="container">
        {{-- @foreach ($berita as $data) --}}
        <div class="image">
            {{-- <img src="{{ asset('Img/' . $data->img) }}" class="tentang-image1" alt="foto lebar parhalado/gereja"> --}}
            <img src="{{ asset('storage/' . $news->file) }}" class="tentang-image1" alt="{{ $news->title }}">
        </div>
        <section>
            <div class="judul">
                <h3 class="fw-bold mt-3">{{ $news->title }}</h3>
            </div>
        </section>

        <section>
            <div class="descripsi">
                
                <p class="mb-5 mt-3">{{ $news->description }}</p>
            </div>
        </section>
        {{-- @endforeach --}}
    </div>
@endsection
