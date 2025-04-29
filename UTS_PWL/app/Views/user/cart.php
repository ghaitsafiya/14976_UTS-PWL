<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">Keranjang Belanja</h1>

<?php if (empty($cart)): ?>
    <div class="alert alert-warning">
        Keranjang Anda kosong.
    </div>
<?php else: ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Produk</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cart as $productId => $quantity): ?>
            <tr>
                <td><?= esc($productId); ?></td>
                <td><?= esc($quantity); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<?= $this->endSection() ?>
