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
                        <th scope="col">Berita Ibadah</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Gambar</th>
                        <th scope="col" c>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($news as $newss)
                      <tr>
                        <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $newss-> title}}</td>
                        <td>{{ $newss-> description}}</td>
                        <td>{{ $newss-> img}}</td>
                        <td class="text-center">
                            <div class="action">
                                
                                <button class="btn btn-warning" data-toggle="modal" data-target="#editModal{{ $newss->id }}">Edit</button>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $newss->id }}">Hapus</button>
                            </div>
                        </td>
                    </tr>
                    <!-- Edit Modal -->
                <div class="modal fade" id="editModal{{ $newss->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $newss->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel{{ $newss->id }}">Edit Berita Ibadah</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('news.update', $newss->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Berita Ibadah</label>
                                        <input type="text" name="nama_ibadah" class="form-control" value="{{ $newss->title }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" value="{{ $newss->description }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <input type="img" name="img" class="form-control" value="{{ $newss->img }}" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal{{ $newss->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $newss->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel{{ $newss->id }}">Hapus Berita Ibadah</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda yakin ingin menghapus Berita ibadah ini?</p>
                                <form action="{{ route('news.destroy', $newss->id) }}" method="POST">
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
                    <h5 class="modal-title" id="createModalLabel">Tambah Berita Ibadah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('news.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Berita Ibadah</label>
                            <input type="text" name="nama_ibadah" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="img" name="img" class="form-control" required>
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

{{-- @extends('admin.utils.aside')

@section('content')
    <div class="container mt-5">
        <h1>Jadwal Ibadah</h1>
        
        
        @if (session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Ibadah</th>
                    <th>Hari</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schedules as $schedule)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $schedule->nama_ibadah }}</td>
                    <td>{{ $schedule->hari }}</td>
                    <td>{{ $schedule->keterangan }}</td>
                    <td>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#createModal">Create</button>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#editModal{{ $schedule->id }}">Edit</button>
                        <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $schedule->id }}">Hapus</button>
                    </td>
                </tr>

                <!-- Edit Modal -->
                <div class="modal fade" id="editModal{{ $schedule->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $schedule->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel{{ $schedule->id }}">Edit Jadwal Ibadah</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('schedule.update', $schedule->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Nama Ibadah</label>
                                        <input type="text" name="nama_ibadah" class="form-control" value="{{ $schedule->nama_ibadah }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Hari</label>
                                        <input type="text" name="hari" class="form-control" value="{{ $schedule->hari }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input type="keterangan" name="waktu" class="form-control" value="{{ $schedule->keterangan }}" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal{{ $schedule->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $schedule->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel{{ $schedule->id }}">Hapus Jadwal Ibadah</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda yakin ingin menghapus jadwal ibadah ini?</p>
                                <form action="{{ route('schedule.destroy', $schedule->id) }}" method="POST">
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
                    <h5 class="modal-title" id="createModalLabel">Tambah Jadwal Ibadah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('schedule.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Ibadah</label>
                            <input type="text" name="nama_ibadah" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Hari</label>
                            <input type="text" name="hari" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Waktu</label>
                            <input type="keterangan" name="keterangan" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
