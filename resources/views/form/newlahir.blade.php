@extends('layouts.master')

@section('content')
    <div class="container mt-2 mb-4">
        <div class="formulir d-flex justify-content-center">
            <div class="col-8">
                <h4 class="text-center fw-bold mb-5">Formulir Pendataan Jemaat Lahir</h4>
                <form action="{{ route('hurias.storelahir') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Nama Orangtua/Wali</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="nama lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label for="wijk" class="form-label fw-bold">Wijk</label>
                        <select class="form-select" name="wijk" aria-label="Default select example" id="wijk">
                            @for ($i = 1; $i <= 20; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="notelp" class="form-label fw-bold">No. Handphone</label>
                        <input type="number" name="notelp" class="form-control" id="notelp" placeholder="08xxxxxxxxxx" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label fw-bold">alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="jalan --" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email address</label>
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="lahir" class="form-label fw-bold">Nama Anak Lahir</label>
                        <input type="text" name="lahir" class="form-control" id="lahir" placeholder="Nama lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label for="jeniskelamin" class="form-label fw-bold">Jenis Kelamin</label>
                        <select class="form-select" name="jeniskelamin" aria-label="Default select example" id="jeniskelamin" required>
                            <option value="pria" selected>Laki - Laki </option>
                            <option value="wanita">Perempuan</option>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="rs" class="form-label fw-bold">Rumah Sakit</label>
                        <input type="text" name="rs" class="form-control" id="rs" placeholder="nama rs" required>
                    </div>
                    <button type="submit" class="btn btn-success">Kirim</button>
                </form>
            </div>
        </div>
    </div>
@endsection
