<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?></title>
    <link rel="stylesheet" href="<?= BASEURL ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL ?>css/mystyle.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="<?= BASEURL; ?>home">Siakad</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample02">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link <?= $active_home ?>" href="<?= BASEURL; ?>home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $active_about ?>" href="<?= BASEURL; ?>about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $active_mahasiswa ?>" href="<?= BASEURL; ?>mahasiswa">Mahasiswa</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>