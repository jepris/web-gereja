<div class="modal fade" id="newjemaat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title fw-bold d-flex justify-content-center" id="baptis">Pendataan Jemaat Baru <br>HKBP
            Perumnas Batu Onom</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
      
        <div class="modal-body">
          <form action="{{ route('hurias.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label fw-bold">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="nama lengkap"  name="nama" required>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label fw-bold">No. Handphone</label>
                <input type="number" class="form-control" id="no_hp" placeholder="08xxxxxxxxxx"  name="no_hp" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label fw-bold">alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="jalan --"  name="alamat"  required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email address</label>
                <input type="email" class="form-control" id="email"
                    placeholder="name@example.com"  name="email" required>
            </div>
            <div class="mb-3">
                <label for="gereja_asal" class="form-label fw-bold">Gereja Asal</label>
                <input type="text" class="form-control" id="gereja_asal"
                    placeholder="Hkbp --"  name="gereja_asal" required>
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">Upload Surat Referensi Gereja Asal</label>
                <input class="file" type="file" id="file" accept=".pdf"  name="file" required>
              </div>
            <div class="mb-3">
                <label for="keluarga" class="form-label fw-bold">Anggota Keluarga</label>
                <textarea class="form-control" id="keluarga" rows="4"  name="keluarga"  required></textarea>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success">Kirim</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>