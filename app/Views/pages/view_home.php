<?= $this->extend('layout/view_main') ?>

<?= $this->section('content') ?>

    <div class="text-center bg-light p-5 rounded-3 mb-5 shadow-sm">
        <h1 class="fw-bolder">Selamat Datang di Website Saya</h1>
        <p class="lead fw-normal text-muted mb-4">Ini adalah project website Codeigniter 4 menggunakan metode Templating.</p>
        
        <a class="btn btn-primary btn-lg" href="/about">Cek Halaman About</a>
    </div>

    
    <div class="row gx-5">
        <div class="col-lg-4 mb-5">
            <div class="card h-100 shadow border-0">
                <div class="card-body p-4">
                    <h5 class="card-title mb-3">Halaman About</h5>
                    <p class="card-text mb-0">Klik link "About" di navbar untuk melihat halaman tentang kami.</p>
                    <a class="btn btn-primary mt-3" href="/about">lihat Halaman</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-5">
            <div class="card h-100 shadow border-0">
                <div class="card-body p-4">
                    <h5 class="card-title mb-3">Halaman Contact</h5>
                    <p class="card-text mb-0">Klik link "Contact" di navbar untuk melihat info kontak.</p>
                    <a class="btn btn-primary mt-3" href="/contact">lihat Halaman</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-5">
            <div class="card h-100 shadow border-0">
                <div class="card-body p-4">
                    <h5 class="card-title mb-3">Halaman Profile</h5>
                    <p class="card-text mb-0">Klik link "Profile" di navbar untuk melihat profil.</p>
                    <a class="btn btn-primary mt-3" href="/profile">lihat Halaman</a>
                </div>
            </div>
        </div>
    <div class="col-lg-4 mb-5">
            <div class="card h-100 shadow border-0">
                <div class="card-body p-4">
                    <h5 class="card-title mb-3 d-flex align-items-center">
                        <i class="bi bi-github me-2"></i> Lihat Sumber Kode
                    </h5>
                    <p class="card-text mb-0">Klik link "Sumber Kode" di sini untuk melihat kode lengkap.</p>
                    <a class="btn btn-primary mt-3" href="https://github.com/MAliffadlan/web-codeigniter4-metode-templatingg.git" target="_blank">
                        lihat GitHub
                    </a>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>