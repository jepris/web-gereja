@extends('admin.utils.aside')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <h3 class="mt-3 fw-bold">Data Jemaat HKBP Perumnas Batu Onom</h3>
            <button class="btn btn-success mb-3" data-toggle="modal" data-target="#createdata">+ Tambah Data</button>
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
                        @foreach ($jemaats as $data)
                            <tr>
                                <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ \Carbon\Carbon::parse($data->birth_date)->format('d-m-Y') }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td class="text-center ">{{ $data->wijk }}</td>
                                <td>0{{ $data->notelp }}</td>
                                <td class="text-center">{{ $data->umur }}</td>
                                <td class="text-center">
                                    <div class="action d-flex justify-content-center">
                                        <button class="btn btn-warning me-3" data-toggle="modal"
                                            data-target="#editdata{{ $data->id }}">Edit</button>
                                        <form action="{{ route('admin-jemaat.destroy', $data->id) }}" method="POST">
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
                <nav aria-label="Page navigation">
                    {{ $jemaats->links('pagination::bootstrap-5') }}
                </nav>
            </div>
        </div>
    </section>

    {{-- create data modal --}}
    <div class="modal fade" id="createdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="form-judul">
                        <h4 class="card-title fw-bold d-flex justify-content-center">Tambah Data Jemaat</h4>
                    </div>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin-jemaat.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Nama</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggallahir" class="form-label fw-bold">Tanggal Lahir</label>
                            <input type="date" name="birth_date" class="form-control" id="tanggallahir" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label fw-bold">alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" required>
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
                            <label for="notelp" class="form-label fw-bold">no, Handphone</label>
                            <input type="number" name="notelp" class="form-control" id="notelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="umur" class="form-label fw-bold">Umur</label>
                            <input type="number" name="umur" class="form-control" id="umur" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- edit data modal --}}
    @foreach ($jemaats as $data)
        <div class="modal fade" id="editdata{{ $data->id }}" tabindex="-1"
            aria-labelledby="editdataLabel{{ $data->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="form-judul">
                            <h4 class="card-title fw-bold d-flex justify-content-center">Edit Data Jemaat</h4>
                        </div>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('admin-jemaat.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Nama</label>
                                <input type="text" value="{{ $data->name }}" class="form-control" name="name"
                                    id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggallahir" class="form-label fw-bold">Tanggal Lahir</label>
                                <input type="date" value="{{ $data->birth_date }}" name="birth_date"
                                    class="form-control" id="tanggallahir" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label fw-bold">alamat</label>
                                <input type="text" value="{{ $data->alamat }}" name="alamat" class="form-control"
                                    id="alamat" required>
                            </div>
                            <div class="mb-3">
                                <label for="wijk" class="form-label fw-bold">Wijk</label>
                                <select class="form-select" name="wijk" aria-label="Default select example" id="wijk" required>
                                    @for ($i = 0; $i <= 20; $i++)
                                        <option value="wijk{{ $i }}" {{ $data->wijk == "wijk".$i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="notelp" class="form-label fw-bold">no, Handphone</label>
                                <input type="number" value="0{{ $data->notelp }}" name="notelp" class="form-control"
                                    id="notelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="umur" class="form-label fw-bold">Umur</label>
                                <input type="number" value="{{ $data->umur }}" name="umur" class="form-control"
                                    id="umur" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button  type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
