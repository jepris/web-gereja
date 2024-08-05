<div class="modal fade" id="lahir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title fw-bold d-flex justify-content-center" id="baptis">Pendataan Jemaat Lahir <br>HKBP
            Perumnas Batu Onom</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
        <div class="modal-body">
          <form action="">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama lengkap">
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
                <label for="exampleFormControlInput1" class="form-label fw-bold">No. Handphone</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="08xxxxxxxxxx">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">alamat</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="jalan --">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Anak Lahir</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama lengkap">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="pria" selected>Laki - Laki</option>
                    <option value="wanita">Perempuan</option>
                  </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Rumah Sakit</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Kirim</button>
        </div>
      </div>
    </div>
  </div>