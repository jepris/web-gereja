@extends('layouts.master')
@section('title', 'Layanan - HKBP Perumnas Batu Onom')

@section('content')
    <div class="container">
        <section>
            <div class="layanan">
                <div class="layanan-isi">
                    <h4 class="fw-bold " style="text-decoration: underline; color: #0127Ff;">Layanan Jemaat HKBP Perumnas Batu
                        Onom Online
                    </h4>
                    <p>Untuk dapat meningkatkan pelayanan terhadap jemaat, HKBP Perumnas Batu Onom membuka jalur
                        pelayanan
                        via
                        online. Silahkan klik link di bawah sesuai dengan layanan yang diinginkan</p>
                    <ul>
                        <li class="mb-3">Pemberitahuan Anak Lahir 
                          <a class="btn btn-primary" href="/hurias/newlahir" role="button">Link</a></li>
                          
                        <li class="mb-3">Permohonan Baptisan 
                          <a class="btn btn-primary" href="/hurias/newbaptis" role="button">Link</a></li>
                          
                        <li class="mb-3">Pendaftaran Sidi/Katekisasi
                          <a class="btn btn-primary" href="/hurias/newsidi" role="button">Link</a></li>
                          
                        <li class="mb-3">Pendaftaran Pernikahan
                          <a class="btn btn-primary" href="/hurias/newnikah" role="button">Link</a></li>
                          
                        <li class="mb-3">Pemberitahuan jemaat Sakit
                          <a class="btn btn-primary" href="/hurias/newsakit" role="button">Link</a></li>
                          </li>
                        <li class="mb-3">Permohonan Pindah Jemaat/Wijk 
                          <a class="btn btn-primary" href="/hurias/newpindah" role="button">Link</a></li>
                          
                        <li class="mb-3">Pemberitahuan Jemaat Meninggal Dunia 
                          <a class="btn btn-primary" href="/hurias/newmeninggal" role="button">Link</a></li>
                          
                    </ul>
                </div>
            </div>
        </section>
    </div>
@endsection
