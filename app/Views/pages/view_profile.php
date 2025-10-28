<?= $this->extend('layout/view_main') ?>

<?= $this->section('content') ?>

    <div class="card shadow border-0 p-4 p-md-5">
        <div class="card-body">
            <h1 class="fw-bolder">Halaman Profile</h1>
            <p class="lead fw-normal text-muted mb-4">
                data ini diambil dari Controller Page.php.
            </p>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <strong>Nama:</strong> <?= esc($profil['Nama']) ?>
                </li>
                <li class="list-group-item">
                    <strong>NIM:</strong> <?= esc($profil['NIM']) ?>
                </li>
                <li class="list-group-item">
                    <strong>Jurusan:</strong> <?= esc($profil['Jurusan']) ?>
                </li>
                <li class="list-group-item">
                    <strong>Keahlian:</strong> <?= esc($profil['Keahlian']) ?>
                </li>
            </ul>

        </div>
    </div>

<?= $this->endSection() ?>