@extends('admin.utils.aside')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <h3 class="mt-3 fw-bold">Jadwal Ibadah HKBP Perumnas Batu Onom</h3>
            <button class="btn btn-success mb-3" data-toggle="modal" data-target="#createdata">+ Tambah Data</button>
            <div class="data-jemaat">
                <table class="table table-bordered border border-dark border-3">
                    <thead class="">
                        <tr class="text-center">
                            <th scope="col">Nama Ibadah</th>
                            <th scope="col">Hari</th>
                            <th scope="col">Jadawl Ibadah</th>
                            <th scope="col" c>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwals as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->hari }}</td>
                                <td>{{ \Carbon\Carbon::parse($jadwal->keterangan)->format('H:i') }}</td>
                                <td class="text-center ">{{ $data->wijk }}</td>
                                <td class="text-center">
                                    <div class="action d-flex justify-content-center">
                                        <button class="btn btn-warning me-3" data-toggle="modal"
                                            data-target="#editdata{{ $data->id }}">Edit</button>
                                        <form action="{{ route('jemaat.destroy', $data->id) }}" method="POST">
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
                    {{ $jadwals->links('pagination::bootstrap-5') }}
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
                        <h4 class="card-title fw-bold d-flex justify-content-center">Tambah Jadwal Ibadah</h4>
                    </div>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('jadwal.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Nama Ibadah</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="hari" class="form-label fw-bold">Hari</label>
                            <input type="text" name="hari" class="form-control" id="hari" required>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label fw-bold">Jadwal Ibadah</label>
                            <input type="time" name="keterangan" class="form-control" id="keterangan" required>
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
    @foreach ($jadwals as $data)
        <div class="modal fade" id="editdata{{ $data->id }}" tabindex="-1"
            aria-labelledby="editdataLabel{{ $data->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="form-judul">
                            <h4 class="card-title fw-bold d-flex justify-content-center">Edit Jadwal Ibadah</h4>
                        </div>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('jadwal.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Nama Ibadah</label>
                                <input type="text" value="{{ $data->name }}" class="form-control" name="name"
                                    id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="hari" class="form-label fw-bold">Hari</label>
                                <input type="text" value="{{ $data->hari }}" name="hari"
                                    class="form-control" id="hari" required>
                            </div>
                            <div class="mb-3">
                                <label for="keterangan" class="form-label fw-bold">Jadwal Ibadah</label>
                                <input type="time" value="{{ \Carbon\Carbon::parse($jadwal->keterangan)->format('H:i') }}" name="keterangan" class="form-control"
                                    id="keterangan" required>
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
