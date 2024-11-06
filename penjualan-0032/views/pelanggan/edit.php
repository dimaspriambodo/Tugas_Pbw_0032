<?php include 'views/layout/header.php'; ?>
<?php $pelanggan = $data->fetch(PDO::FETCH_ASSOC); ?>

<div class="card">
    <div class="card-header">
        <h2>Edit Pelanggan</h2>
    </div>
    <div class="card-body">
        <form method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $pelanggan['nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required><?php echo $pelanggan['alamat']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $pelanggan['telepon']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php?page=pelanggan" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

<?php include 'views/layout/footer.php'; ?>