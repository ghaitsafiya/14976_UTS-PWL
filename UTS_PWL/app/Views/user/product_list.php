<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">Daftar Produk</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $p): ?>
        <tr>
            <td><?= esc($p['name']); ?></td> <!-- Menampilkan nama produk dengan aman -->
            <td><?= esc($p['description']); ?></td> <!-- Menampilkan deskripsi produk dengan aman -->
            <td>Rp <?= number_format($p['price']); ?></td> <!-- Menampilkan harga dengan format ribuan -->
            <td>
                <a href="/cart/add/<?= $p['id']; ?>" class="btn btn-success btn-sm">Tambah ke Keranjang</a> <!-- Tombol untuk user -->
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>
