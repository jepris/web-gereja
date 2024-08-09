@extends('layouts.master')

@section('content')
    <div class="container mt-2 mb-4">
        <div class="formulir d-flex justify-content-center">
            <div class="col-8">
                <h4 class="text-center fw-bold mb-5">Formulir Pendaftaran Jemaat Sidi</h4>
                <form action="{{ route('hurias.storesidi') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="wali" class="form-label fw-bold">Nama Ayah (Wali)</label>
                        <input type="text" name="wali" class="form-control" id="wali"
                            placeholder="nama lengkap" required>
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
                        <input type="number" name="notelp" class="form-control" id="notelp"
                            placeholder="08xxxxxxxxxx" required>
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
                        <label for="keterangan" class="form-label fw-bold">Info anggota keluarga yang
                            akan sidi (Nama/gender/tanggal lahir)</label>
                        <textarea class="form-control" name="keterangan" id="keterangan" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="fileaket" class="form-label">Upload Akte Kelahiran</label>
                        <input class="form-control" name="fileakte" accept=".pdf" type="file" id="fileaket" required>
                    </div>
                    <div class="mb-3">
                        <label for="filebaptis" class="form-label">Upload Surat Baptis</label>
                        <input class="form-control" name="filebaptis" accept=".pdf" type="file" id="filebaptis" required>
                    </div>
                    <button type="submit" class="btn btn-success">Kirim</button>
                </form>
            </div>
        </div>
    </div>
@endsection
