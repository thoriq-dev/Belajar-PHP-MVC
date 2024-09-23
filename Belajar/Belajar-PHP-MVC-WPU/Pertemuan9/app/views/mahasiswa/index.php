<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>

            <h3 class="mt-3">Mahasiswa Terdaftar</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary fw-semibold">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>mahasiswa/tambah" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Bayu">
                    </div>

                    <div class="mb-3">
                        <label for="nrp" class="form-label">NRP</label>
                        <input type="number" class="form-control" id="nrp" name="nrp" placeholder="Maksimal 15 Digit">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="jurusan" style="margin-bottom:1rem">Jurusan</label>
                        <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                            <option selected>Pilih Jurusan</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Manajemen">Manajemen</option>
                            <option value="Kedokteran">Kedokteran</option>
                            <option value="Hukum">Hukum</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Psikologi">Psikologi</option>
                            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Pendidikan">Pendidikan</option>
                            <option value="Farmasi">Farmasi</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="input-group-text" for="inputGroupFile01">Foto</label>
                        <input type="file" class="form-control" id="foto_profile" name="foto_profile">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>