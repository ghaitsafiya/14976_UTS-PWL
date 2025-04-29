<?= $this->extend('layout') ?> 
<!-- Extend layout.php sebagai master layout -->

<?= $this->section('content') ?> 
<!-- Mulai bagian konten -->

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Dashboard Admin</h1>
    <p>Selamat datang, <?= session()->get('username'); ?>!</p>
</div>

<?= $this->endSection() ?> 
<!-- Tutup bagian konten -->
