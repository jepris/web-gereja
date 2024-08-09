@extends('layouts.master')
@section('title', 'Layanan - HKBP Perumnas Batu Onom')
{{-- @extends('modals.baptis')
@extends('modals.lahir')
@extends('modals.meninggal')
@extends('modals.newjemaat')
@extends('modals.nikah')
@extends('modals.pindah')
@extends('modals.sakit')
@extends('modals.sidi') --}}

@section('content')
    <div class="container">
        <section>
            <div class="layanan">
                <div class="layanan-isi">
                    <h4 class="fw-bold " style="text-decoration: underline; color: #0127Ff;">Layanan Jemaat HKBP Perumnas Batu Onom Online
                    </h4>
                    <p>Untuk dapat meningkatkan pelayanan terhadap jemaat, HKBP Perumnas Batu Onom membuka jalur
                        pelayanan
                        via
                        online. Silahkan klik link di bawah sesuai dengan layanan yang diinginkan</p>
                    <ul>
                        <li class="mb-3">Pendaftaran Jemaat Baru <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newjemaat"><a href="/hurias/newjemaat"></a>
                            disini . . .
                          </button></li>
                        <li class="mb-3">Pemberitahuan Anak Lahir <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lahir">
                            disini . . .
                          </button></li>
                        <li class="mb-3">Permohonan Baptisan <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#baptis">
                            disini . . .
                          </button></li>
                        <li class="mb-3">Pendaftaran Sidi/Katekisasi <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sidi">
                            disini . . .
                          </button></li>
                        <li class="mb-3">Pendaftaran Pernikahan <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nikah">
                            disini . . .
                          </button></li>
                        <li class="mb-3">Pemberitahuan jemaat Sakit <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sakit">
                            disini . . .
                          </button></li>
                        <li class="mb-3">Permohonan Pindah Jemaat/Wijk <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pindah">
                            disini . . .
                          </button></li>
                        <li class="mb-3">Pemberitahuan Jemaat Meninggal Dunia <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#meninggal">
                            disini . . .
                          </button></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
@endsection
