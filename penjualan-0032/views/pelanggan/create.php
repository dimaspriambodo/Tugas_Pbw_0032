<?php include 'views/layout/header.php'; ?>

<div class="card">
    <div class="card-header">
        <h2>Tambah Pelanggan</h2>
    </div>
    <div class="card-body">
        <form method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php?page=pelanggan" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

<?php include 'views/layout/footer.php'; ?>