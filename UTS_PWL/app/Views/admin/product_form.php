<?php include(APPPATH . 'Views/layout/header.php'); ?>
<?php include(APPPATH . 'Views/layout/sidebar_admin.php'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= isset($product) ? 'Edit' : 'Tambah'; ?> Produk</h1>

    <form action="<?= isset($product) ? '/products/update/' . $product['id'] : '/products/store'; ?>" method="post">
        <div class="mb-3">
            <input type="text" name="name" value="<?= $product['name'] ?? ''; ?>" class="form-control" placeholder="Nama Produk" required>
        </div>
        <div class="mb-3">
            <textarea name="description" class="form-control" placeholder="Deskripsi" required><?= $product['description'] ?? ''; ?></textarea>
        </div>
        <div class="mb-3">
            <input type="number" name="price" value="<?= $product['price'] ?? ''; ?>" class="form-control" placeholder="Harga" required>
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>

<?php include(APPPATH . 'Views/layout/footer.php'); ?>
