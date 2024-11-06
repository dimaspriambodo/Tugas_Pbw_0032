<?php include 'views/layout/header.php'; ?>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">
            <span class="icon-pumpkin">Daftar Produk</span>
        </h2>
        <a href="index.php?page=produk&action=create" class="btn btn-primary shadow-sm">Tambah Produk</a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle shadow-sm">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $data->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td class="fw-bold"><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['nama']); ?></td>
                        <td><?php echo htmlspecialchars($row['harga']); ?></td>
                        <td><?php echo htmlspecialchars($row['stok']); ?></td>
                        <td class="text-center">
                            <a href="index.php?page=produk&action=edit&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-warning me-1">Edit</a>
                            <a href="index.php?page=produk&action=delete&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'views/layout/footer.php'; ?>
