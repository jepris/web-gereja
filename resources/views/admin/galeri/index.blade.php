@extends('admin.utils.aside')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <h3 class="mt-3 fw-bold">Galeri HKBP Perumnas Batu Onom</h3>
            <button class="btn btn-success mb-3" data-toggle="modal" data-target="#createdata">+ Tambah Data</button>
            <div class="data-jemaat">
                <table class="table table-bordered border border-dark border-3">
                    <thead class="">
                        <tr class="text-center">
                            <th scope="col">No.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Gambar </th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($images as $data)
                            <tr>
                                <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $data->title }}</td>
                                <td>{{ \Carbon\Carbon::parse($data->date)->format('d-m-Y') }}</td>
                                {{-- <td class="d-flex justify-content-center"><a class="btn btn-success" href="{{ asset($data->file) }}"
                                        target="_blank">Download</a></td> --}}
                                <td><img src="{{ asset('img/' . $data->file) }}" width="200"></td>
                                <td class="text-center">
                                    <div class="action d-flex justify-content-center">
                                        <button class="btn btn-warning me-3" data-toggle="modal"
                                            data-target="#editdata{{ $data->id }}">Edit</button>
                                        <form action="{{ route('images.destroy', $data->id) }}" method="POST">
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
                        <h4 class="card-title fw-bold d-flex justify-content-center">Tambah Gambar</h4>
                    </div>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold">Title</label>
                        <textarea class="form-control" name="title" id="title"></textarea>
                      </div>
                        <div class="mb-3">
                            <label for="date" class="form-label fw-bold">Tanggal</label>
                            <input type="date" name="date" class="form-control" id="date" required>
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label fw-bold">Gambar </label>
                            <input type="file" name="file" class="form-control" id="file" accept=".jpg, .jpeg, .png, .gif, .svg" required>
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
    @foreach ($images as $data)
        <div class="modal fade" id="editdata{{ $data->id }}" tabindex="-1"
            aria-labelledby="editdataLabel{{ $data->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="form-judul">
                            <h4 class="card-title fw-bold d-flex justify-content-center">Edit Gambar</h4>
                        </div>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="{{ route('images.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label fw-bold">Nama Minggu</label>
                            <textarea name="title" class="form-control" id="title" required>{{ $data->title }}</textarea>
                        </div>
                            <div class="mb-3">
                                <label for="date" class="form-label fw-bold">Tanggal</label>
                                <input type="text" value="{{ $data->date }}" name="date" class="form-control" id="date"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="file" class="form-label fw-bold">Gambar </label>
                                <input type="file" class="form-control" id="file" name="file" accept=".jpg, .jpeg, .png, .gif, .svg" required>
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
