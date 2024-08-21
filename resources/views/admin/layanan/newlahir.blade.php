@extends('admin.utils.aside')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <h3 class="mt-3 fw-bold">Jemaat lahir HKBP Perumnas Batu Onom</h3>
            {{-- <button class="btn btn-success mb-3" data-toggle="modal" data-target="#createdata">+ Tambah Data</button> --}}
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
                            <th scope="col">Nama Bayi </th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Nama Tempat Kelahiran</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lahirs as $data)
                            <tr>
                                <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->wijk }}</td>
                                <td>0{{ $data->notelp }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->lahir }}</td>
                                <td>{{ $data->jeniskelamin }}</td>
                                <td>{{ $data->rs }}</td>
                                <td class="text-center">
                                    <div class="action d-flex justify-content-center">
                                        <button class="btn btn-warning me-3" data-toggle="modal"
                                            data-target="#editdata{{ $data->id }}">Edit</button>
                                        <form action="{{ route('lahirs.destroylahir', $data->id) }}" method="POST">
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
    @foreach ($lahirs as $data)
        <div class="modal fade" id="editdata{{ $data->id }}" tabindex="-1"
            aria-labelledby="editdataLabel{{ $data->id }}" aria-hidden="true">
            {{-- <div class="modal-dialog" role="document"> --}}
            <div class="modal-dialog" >
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="form-judul">
                            <h4 class="card-title fw-bold d-flex justify-content-center">Edit Data Lahir</h4>
                        </div>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="{{ route('lahirs.updatelahir', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Nama</label>
                            <input type="text" name="name" value="{{ $data->name }}" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="wijk" class="form-label fw-bold">Wijk</label>
                            <select class="form-select" name="wijk" aria-label="Default select example" id="wijk" required>
                                @for ($i = 1; $i <= 16; $i++)
                                    <option value="{{ $i }}" {{ $i == $data->wijk ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="notelp" class="form-label fw-bold">No. Handphone</label>
                            <input type="number" value="0{{ $data->notelp }}" name="notelp" class="form-control"
                                    id="notelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label fw-bold">Alamat</label>
                            <input name="alamat" class="form-control" value="{{ $data->alamat }}" id="alamat" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email address</label >
                            <input type="email" name="email"value="{{ $data->email }}" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="lahir" class="form-label fw-bold">Nama Bayi</label>
                            <input name="lahir" class="form-control" value="{{ $data->lahir }}"  id="lahir" required>
                        </div>
                        <div class="mb-3">
                            <label for="jeniskelamin" class="form-label fw-bold">Jenis Kelamin</label>
                            <select class="form-select" name="jeniskelamin" aria-label="Default select example" id="jeniskelamin" required>
                                <option value="pria" {{ $data->jeniskelamin == 'pria' ? 'selected' : '' }}>Laki - Laki</option>
                                <option value="wanita" {{ $data->jeniskelamin == 'wanita' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>                        
                        <div class="mb-3">
                            <label for="rs" class="form-label fw-bold">Nama Tempat Kelahiran</label>
                            <textarea name="rs" class="form-control" id="rs" required>{{ $data->rs }}</textarea>
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
