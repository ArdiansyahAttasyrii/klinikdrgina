<div class="modal fade" id="modalPasien">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah @yield('title')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('pasien.save') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <label for="namePasien">Nama Pasien</label>
                    <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Pasien">

                    <label for="tempat_tanggallahirPasien">Tempat, Tanggal Lahir</label>
                    <input type="text" name="tempat_tanggallahir" class="form-control" placeholder="Masukkan Tempat dan Tanggal Lahir">

                    <label for="alamatPasien">Alamat Pasien</label>
                    <input type="text" name="alamatpasien" class="form-control" placeholder="Masukkan Alamat">

                    <label for="contactPasien">Kontak</label>
                    <input type="number" name="contact" class="form-control" placeholder="Masukkan Kontak">

                    <label for="fotoTreatment">Foto Treatment</label>
                    <input type="file" name="foto" class="form-control">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
