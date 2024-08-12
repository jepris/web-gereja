@extends('layouts.master')

@section('content')
    <div class="container mt-2 mb-4">
        <div class="formulir d-flex justify-content-center">
            <div class="col-8">
                <h4 class="text-center fw-bold mb-5">Formulir Pendataan Kontak Keluhan</h4>
                <form action="{{ route('hurias.storekontak') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="nama lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label for="notelp" class="form-label fw-bold">No. Handphone</label>
                        <input type="number" name="notelp" class="form-control" id="notep" placeholder="08xxxxxxxxxx" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label fw-bold">alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="jalan --" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="perihal" class="form-label fw-bold">Perihal</label>
                        <input type="text" name="perihal" class="form-control" id="perihal"
                            placeholder="Jamuan, Layanan Doa, .." required>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label fw-bold">Rincian</label>
                        <textarea class="form-control" name="keterangan" id="keterangan" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Kirim</button>
                </form>
            </div>
        </div>
    </div>
@endsection
