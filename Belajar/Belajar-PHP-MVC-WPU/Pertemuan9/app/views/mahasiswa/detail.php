<div class="container mt-4">
    <div class="card" style="width:18rem;">
        <img src="<?= $data['mhs']['foto_profile'] ?>" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nrp']; ?></h6>
            <p class="card-text"><?= $data['mhs']['email']; ?></p>
            <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
            <a href="<?= BASEURL; ?>mahasiswa">Kembali</a>
        </div>
    </div>
</div>