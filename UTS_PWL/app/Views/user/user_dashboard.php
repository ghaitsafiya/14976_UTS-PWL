<?php include(APPPATH . 'Views/layout/header.php'); ?>
<?php include(APPPATH . 'Views/layout/sidebar_user.php'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Dashboard User</h1>
    <p>Selamat datang, <?= session()->get('username'); ?>!</p> <!-- mengambil velue dari controller ke view -->
</div>

<?php include(APPPATH . 'Views/layout/footer.php'); ?>
