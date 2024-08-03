@extends('admin.utils.aside')
@section('content')

<section class="content">
    <div class="container-fluid">
        <h3 class="mt-3 fw-bold">Data Jemaat yang Berulang Tahun Setiap Minggu</h3>
        <div class="data-jemaat-dashboard" style="overflow-x: auto; max-height: 200px; overflow-y: auto;">
            <table class="table table-bordered">
                <thead class="sticky-top">
                    <tr class="text-center">
                        <th scope="col">No.</th>
                        <th scope="col">Nama Jemaat</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Wijk</th>
                        <th scope="col">No. Telepon</th>
                        <th scope="col">Umur</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jemaats as $index => $data)
                        <tr>
                            <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ \Carbon\Carbon::parse($data->birth_date)->format('d-m-Y') }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td class="text-center">{{ $data->wijk }}</td>
                            <td>0{{ $data->notelp }}</td>
                            <td class="text-center">{{ $data->umur }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection