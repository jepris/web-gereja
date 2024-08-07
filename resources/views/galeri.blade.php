@extends('layouts.master')
@section('title', 'Galeri - HKBP Perumnas Batu Onom')
@section('content')
<div class="container">
    <section class="mt-5 mb-4">
        <div class="galleri">
            @foreach ($galeri as $item)
            <div class="row">
                <div class="col">
                    <img src="{{ asset('storage/' . $item->file) }}" class="galeri-img" alt="{{ $item->title }}"
                    >
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection