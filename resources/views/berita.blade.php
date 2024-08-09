@extends('layouts.master')
@section('content')
    <div class="container">
        {{-- @foreach ($berita as $data) --}}
        <div class="image">
            {{-- <img src="{{ asset('Img/' . $data->img) }}" class="tentang-image1" alt="foto lebar parhalado/gereja"> --}}
            <img src="/img/aset4.jpg" class="berite-image1" alt="foto lebar parhalado/gereja">
        </div>
        <section>
            <div class="judul">
                {{-- <h3 class="fw-bold">{{ $data->judul }}</h3> --}}
                <h3 class="fw-bold">Testing</h3>
            </div>
        </section>

        <section>
            <div class="descripsi">
                {{-- <p>{{ $data->keterangan }}</p> --}}
                <p class="mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam sapiente dolorum delectus excepturi
                    veniam cum voluptatem adipisci iure natus soluta voluptate, dignissimos rerum? Aliquam repudiandae
                    eligendi saepe quibusdam quaerat natus quia quidem beatae nesciunt exercitationem, a perspiciatis
                    sapiente nisi quos ducimus ipsa excepturi odit, fugit non animi? Soluta, accusantium quod.</p>
            </div>
        </section>
        {{-- @endforeach --}}
    </div>
@endsection
