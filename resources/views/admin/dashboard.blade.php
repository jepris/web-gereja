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
                        <th scope="col">Wijk</th>
                        <th scope="col">No. Telepon</th>
                        <th scope="col">Umur</th>
                        <th scope="col" c>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row" class="text-center">1</td>
                        <td>Jepri Simbolon</td>
                        <td>24 Februari 2024</td>
                        <td>jl.Nalabarca 2 Kebon Jeruk</td>
                        <td class="text-center">4</td>
                        <td>085212273884</td>
                        <td class="text-center">20</td>
                        <td class="text-center">
                            <div class="action">
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-info">View</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection