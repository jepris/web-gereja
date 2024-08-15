@extends('admin.utils.aside')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <h3 class="mt-3 fw-bold">Jemaat Sakit  HKBP Perumnas Batu Onom</h3>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
            <div class="data-jemaat">
                <table class="table table-bordered border border-dark border-3">
                    <thead class="">
                        <tr class="text-center">
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">wijk</th>
                            <th scope="col">No Hp </th>
                            <th scope="col">Alamat </th>
                            <th scope="col">Email </th>
                            <th scope="col">keterangan </th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sakits as $data)
                            <tr>
                                <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->wijk }}</td>
                                <td>{{ $data->notelp }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->keterangan }}</td>
                                <td class="text-center">
                                    <div class="action d-flex justify-content-center">
                                        <button class="btn btn-warning me-3" data-toggle="modal"
                                            data-target="#editdata{{ $data->id }}">Edit</button>
                                        <form action="{{ route('sakits.destroysakit', $data->id) }}" method="POST">
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

    {{-- edit data modal --}}
    @foreach ($sakits as $data)
        <div class="modal fade" id="editdata{{ $data->id }}" tabindex="-1"
            aria-labelledby="editdataLabel{{ $data->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="form-judul">
                            <h4 class="card-title fw-bold d-flex justify-content-center">Edit Data Pindah</h4>
                        </div>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="{{ route('sakits.updatesakit', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Nama</label>
                            <textarea name="name" class="form-control" id="name" required>{{ $data->name }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="wijk" class="form-label fw-bold">Wijk</label>
                            <select class="form-select" name="wijk" aria-label="Default select example" id="wijk" required>{{ $data->wijk }}>
                                @for ($i = 1; $i <= 16; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="notelp" class="form-label fw-bold">No. Handphone</label>
                            <input type="number" value="08{{ $data->notelp }}" name="notelp" class="form-control"
                                    id="notelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label fw-bold">Alamat</label>
                            <textarea name="alamat" class="form-control" id="alamat" required>{{ $data->alamat }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email address</label >
                            <input type="email" name="email"value="{{ $data->email }}" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label fw-bold">Keterangan</label>
                            <textarea name="keterangan" class="form-control" id="keterangan" required>{{ $data->keterangan }}</textarea>
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
