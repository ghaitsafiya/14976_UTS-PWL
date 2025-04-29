<?php include(APPPATH . 'Views/layout/header.php'); ?>
<?php include(APPPATH . 'Views/layout/sidebar_admin.php'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Daftar Produk</h1>

    <a href="/products/create" class="btn btn-primary mb-3">Tambah Produk</a>

    <table class="table table-bordered">
        <thead>
            <tr><th>Nama</th><th>Deskripsi</th><th>Harga</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            <?php foreach ($products as $p): ?>
            <tr>
                <td><?= esc($p['name']); ?></td>
                <td><?= esc($p['description']); ?></td>
                <td>Rp <?= number_format($p['price']); ?></td>
                <td>
                    <a href="/products/edit/<?= $p['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/products/delete/<?= $p['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include(APPPATH . 'Views/layout/footer.php'); ?>
