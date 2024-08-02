@extends('admin.utils.aside')
@section('content')

<section class="content">
    <div class="container-fluid">
        <h3 class="mt-3 fw-bold">Berita Ibadah HKBP Perumnas Batu Onom</h3>
        <button class="btn btn-primary" data-toggle="modal" data-target="#createModal">Create</button>
        <br><br>
        @if (session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif
        <div class="data-jemaat">
            <table class="table table-bordered border border-dark border-3">
                <thead class="">
                    <tr class="text-center">
                        <th scope="col">No.</th>
                        <th scope="col">Nama Ibadah</th>
                        <th scope="col">Tanggal Warta</th>
                        <th scope="col">File</th>
                        <th scope="col" c>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($wartas as $warta)
                      <tr>
                        <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $warta-> nama_minggu}}</td>
                        <td>{{ $warta-> tanggal_warta}}</td>
                        <td><a href="{{ route('wartas.download', $warta->id) }}">Download</a></td>
                        <td class="text-center">
                            <div class="action">
                                
                                <button class="btn btn-warning" data-toggle="modal" data-target="#editModal{{ $warta->id }}">Edit</button>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $warta->id }}">Hapus</button>
                            </div>
                        </td>
                    </tr>
                    <!-- Edit Modal -->
                <div class="modal fade" id="editModal{{ $warta->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $warta->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel{{ $warta->id }}">Edit warta Ibadah</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('wartas.update', $warta->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Nama Minggu</label>
                                        <input type="text" name="nama_minggu" class="form-control" value="{{ $warta->nama_minggu }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_warta">Tanggal Warta</label>
                                        <input type="date" name="tanggal_warta" class="form-control" value="{{ $warta->tanggal_warta }}" required>

                                    </div>
                                    <div class="form-group">
                                        <label for="file">File</label>
                                        <input type="file" name="file" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal{{ $warta->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $warta->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel{{ $warta->id }}">Hapus Warta Ibadah</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda yakin ingin menghapus Warta ibadah ini?</p>
                                <form action="{{ route('wartas.destroy', $warta->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>  
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        <!-- Create Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Tambah Warta Ibadah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('wartas.store') }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Minggu</label>
                            <input type="text" name="nama_minggu" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_warta">Tanggal Warta</label>
                            <input type="date" name="tanggal_warta" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" name="file" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection