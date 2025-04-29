<?php include(APPPATH . 'Views/layout/header.php'); ?>
<?php include(APPPATH . 'Views/layout/sidebar_admin.php'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Daftar User</h1>

    <table class="table table-bordered">
        <thead>
            <tr><th>Username</th><th>Role</th></tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= esc($user['username']); ?></td>
                <td><?= esc($user['role']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include(APPPATH . 'Views/layout/footer.php'); ?>
