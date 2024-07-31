@extends('admin.utils.aside')
@section('content')

<section class="content">
    <div class="container-fluid">
        <h3 class="mt-3 fw-bold">Data Jemaat HKBP Perumnas Batu Onom</h3>
        <div class="data-jemaat">
            <table class="table table-bordered border border-dark border-3">
                <thead class="">
                    <tr class="text-center">
                        <th scope="col">No.</th>
                        <th scope="col">Nama Jemaat</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No. Telepon</th>
                        <th scope="col">Umur</th>
                        <th scope="col" c>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jemaats as $data)
                    <tr>
                        <td scope="row" class="text-center">{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->birth_date }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>0{{ $data->notelp }}</td>
                        <td class="text-center">{{ $data->umur }}</td>
                        <td class="text-center">
                            <div class="action">
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-info">View</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection