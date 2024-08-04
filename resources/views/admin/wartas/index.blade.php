@extends('admin.utils.aside')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <h3 class="mt-3 fw-bold">Warta HKBP Perumnas Batu Onom</h3>
            <button class="btn btn-success mb-3" data-toggle="modal" data-target="#createdata">+ Tambah Data</button>
            <div class="data-jemaat">
                <table class="table table-bordered border border-dark border-3">
                    <thead class="">
                        <tr class="text-center">
                            <th scope="col">No.</th>
                            <th scope="col">Nama Minggu</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">File (.pdf)</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wartas as $warta)
                            <tr>
                                <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $warta->nama_minggu }}</td>
                                <td>{{ \Carbon\Carbon::parse($warta->tanggal_warta)->format('d-m-Y') }}</td>
                                <td class="d-flex justify-content-center"><a class="btn btn-success" href="{{ asset($warta->file) }}"
                                        target="_blank">Download</a></td>
                                <td class="text-center">
                                    <div class="action d-flex justify-content-center">
                                        <button class="btn btn-warning me-3" data-toggle="modal"
                                            data-target="#editdata{{ $warta->id }}">Edit</button>
                                        <form action="{{ route('wartas.destroy', $warta->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- create data modal --}}
    <div class="modal fade" id="createdata" tabindex="-1" aria-labelledby="cratedataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="form-judul">
                        <h4 class="card-title fw-bold d-flex justify-content-center">Tambah Warta</h4>
                    </div>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="{{ route('wartas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_minggu" class="form-label fw-bold">Nama MInggu</label>
                        <textarea class="form-control" name="nama_minggu" id="nama_minggu"></textarea>
                      </div>
                        <div class="mb-3">
                            <label for="tanggal_warta" class="form-label fw-bold">Tanggal</label>
                            <input type="date" name="tanggal_warta" class="form-control" id="tanggal_warta" required>
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label fw-bold">File (.pdf)</label>
                            <input type="file" name="file" class="form-control" id="file" accept=".pdf" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- edit data modal --}}
    @foreach ($wartas as $warta)
        <div class="modal fade" id="editdata{{ $warta->id }}" tabindex="-1"
            aria-labelledby="editdataLabel{{ $warta->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="form-judul">
                            <h4 class="card-title fw-bold d-flex justify-content-center">Edit Warta Keuangan</h4>
                        </div>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="{{ route('wartas.update', $warta->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_minggu" class="form-label fw-bold">Nama Minggu</label>
                            <textarea name="nama_minggu" class="form-control" id="nama_minggu" required>{{ $warta->keterangan }}</textarea>
                        </div>
                            <div class="mb-3">
                                <label for="tanggal_warta" class="form-label fw-bold">Tanggal</label>
                                <input type="text" value="{{ $warta->tanggal }}" name="tanggal_warta" class="form-control" id="tanggal_warta"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="file" class="form-label fw-bold">File Warta (.pdf)</label>
                                <input type="file" class="form-control" id="file" name="file" accept=".pdf" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
