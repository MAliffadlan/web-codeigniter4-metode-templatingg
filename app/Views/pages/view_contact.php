<?= $this->extend('layout/view_main') ?>

<?= $this->section('content') ?>

    <div class="card shadow border-0 p-4 p-md-5">
        <div class="card-body">
            <h1 class="fw-bolder">Halaman Kontak</h1>
            <p class="lead fw-normal text-muted mb-4">
                Silakan isi form di bawah ini untuk menghubungi kami.
            </p>

            <form action="/contact/send" method="POST">
                
                <?= csrf_field() ?> 
                
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama_lengkap" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control" id="email" name="email_pengirim" required>
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan Anda</label>
                    <textarea class="form-control" id="pesan" name="pesan_user" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesan ke alif</button>
            </form>

        </div>
    </div>

<?= $this->endSection() ?>