@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="image">
            <img src="{{ asset('storage/' . $news->file) }}" class="img-fluid tentang-image1" alt="{{ $news->title }}"
                style="object-fit: cover; width: 50%; max-height: 400px;">
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
    </div>
@endsection
