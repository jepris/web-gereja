@extends('admin.utils.aside')
@section('content')

<section class="content">
    <div class="container-fluid">
        <h3 class="mt-3 fw-bold">Data Jemaat yang Menikah Setiap Minggu</h3>
        <div class="data-jemaat-dashboard" style="overflow-x: auto; max-height: 200px; overflow-y: auto;">
            <table class="table table-bordered">
                <thead class="sticky-top">
                    <tr class="text-center">
                        <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">wijk</th>
                            <th scope="col">No Hp </th>
                            <th scope="col">Alamat </th>
                            <th scope="col">Email </th>
                            <th scope="col">keterangan </th>
                            <th scope="col">Tanggal Dibuat </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wartanikah as $data)
                        <tr>
                            <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->wijk }}</td>
                            <td>{{ $data->notelp }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->keterangan }}</td>
                            <td>{{ $data->created_at->format('d-m-Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection