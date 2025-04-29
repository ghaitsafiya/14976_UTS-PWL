<!DOCTYPE html> <!-- Mulai HTML5 -->
<html lang="en">
<head>
    <?php include(APPPATH . 'Views/layout/header.php'); ?> <!-- Memanggil file partial header.php untuk memasukkan link CSS Bootstrap dan FontAwesome -->
</head>

<body id="page-top">

<div id="wrapper"> <!-- Wrapper seluruh halaman -->

    <?php 
    if (session()->get('role') == 'admin') {
        include(APPPATH . 'Views/layout/sidebar_admin.php'); // Kalau Admin, include sidebar admin
    } else {
        include(APPPATH . 'Views/layout/sidebar_user.php'); // Kalau User biasa, include sidebar user
    }
    ?>

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content" class="container-fluid p-4">
            <?= $this->renderSection('content') ?> <!-- Tempat semua konten halaman ditampilkan -->
        </div>

        <?php include(APPPATH . 'Views/layout/footer.php'); ?> <!-- Import footer: JS Bootstrap -->
    </div>

</div>

</body>
</html>
