<?php include 'views/layout/header.php'; ?>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary"> Daftar Transaksi</h2>
        <a href="index.php?page=transaksi&action=create" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus"></i> Tambah Transaksi
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle shadow-sm">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Pelanggan</th>
                    <th>Total</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $data->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td class="fw-bold"><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo date('d/m/Y', strtotime(htmlspecialchars($row['tanggal']))); ?></td>
                        <td><?php echo htmlspecialchars($row['nama_pelanggan']); ?></td>
                        <td>Rp <?php echo number_format(htmlspecialchars($row['total']), 0, ',', '.'); ?></td>
                        <td class="text-center">
                            <a href="index.php?page=transaksi&action=view&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-info">
                                <i class="fas fa-eye"></i> Detail
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'views/layout/footer.php'; ?>
