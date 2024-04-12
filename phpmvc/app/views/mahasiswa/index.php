<div class="container mt-3">
    <div class="row">
        <div class="col-6">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah data Mahasiswa
        </button>
        <br><br>
            <h3> Daftar Mahasiswa</h3>
                    <ul class="list-group">
                    <?php foreach( $data['mhs'] as $mhs) : ?>
                    <li class="list-group-item  d-flex justify-content-between align-items-center">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary rounded-pill">detail</a>
                    </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post" id="formTambahMahasiswa"> <!-- Perbaikan 1 dan 3 -->
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama"> <!-- Perbaikan 5: type="text" -->
            </div>

            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="number" class="form-control" id="nrp" name="nrp">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                    <option>D3 Teknologi Komputer</option>
                    <option>D3 Teknologi informasi</option>
                    <option>D4 Teknologi Rekayasa Perangkat Lunak</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah data</button> <!-- Perbaikan 4 -->
        </form> <!-- Perbaikan 1 -->
      </div>
    </div>
  </div>
</div>
