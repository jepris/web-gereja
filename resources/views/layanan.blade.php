@extends('layouts.master')
@section('title', 'Layanan - HKBP Perumnas Batu Onom')

@section('content')
    <div class="container">
        <section>
            <div class="layanan">
                <div class="layanan-isi">
                    <h4 class="fw-bold " style="text-decoration: underline;">Layanan Jemaat HKBP Perumnas Batu Onom Online
                    </h4>
                    <p>Untuk dapat meningkatkan pelayanan terhadap jemaat, HKBP Perumnas Batu Onom membuka jalur
                        pelayanan
                        via
                        online. Silahkan klik link di bawah sesuai dengan layanan yang diinginkan</p>
                    <ul>
                        <!-- <li><a href="">Pendaftaran Jemaat Baru</a></li>
                <li><a href="">Pemberitahuan Anak Lahir</a></li>
                <li><a href="">Permohonan Baptisan</a></li>
                <li><a href="">Pendaftaran Sidi/Katekisasi</a></li>
                <li><a href="">Pendaftaran Pra-Nikah (konseling / Martumpol)</a></li>
                <li><a href="">Pendaftaran Pernikahan</a></li>
                <li><a href="">Pemberitahuan jemaat Sakit</a></li>
                <li><a href="">Permohonan Pindah Jemaat/Wijk</a></li>
                <li><a href="">Pemberitahuan Jemaat Meninggal Dunia</a></li> -->
                        <li>Pendaftaran Jemaat Baru <a href="/form-pendaftaran-jemaat">
                                << Here>>
                            </a></li>
                        <li>Pemberitahuan Anak Lahir <a href="/form-jemaat-lahir">
                                << Here>>
                            </a></li>
                        <li>Permohonan Baptisan <a href="/form-baptis">
                                << Here>>
                            </a></li>
                        <li>Pendaftaran Sidi/Katekisasi <a href="/form-pendaftaran-sidi">
                                << Here>>
                            </a></li>
                        <li>Pendaftaran Pernikahan <a href="/form-pendaftaran-nikah">
                                << Here>>
                            </a></li>
                        <li>Pemberitahuan jemaat Sakit <a href="/form-jemaat-sakit">
                                << Here>>
                            </a></li>
                        <li>ermohonan Pindah Jemaat/Wijk <a href="/form-pindah-jemaat">
                                << Here>>
                            </a></li>
                        <li>Pemberitahuan Jemaat Meninggal Dunia <a href="/form-jemaat-meninggal">
                                << Here>>
                            </a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
@endsection
