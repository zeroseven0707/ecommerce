<?php
include(APPPATH .'views/layout/header.php');
?>
 <div class="section-body mt-4">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
    <a href="<?php echo site_url('admin/create_theme'); ?>" class="btn btn-primary" style="border-radius: 2.3vw;">Tambah Theme</a>
    <div class="table-responsive">
        <table class="table table-striped table-responsive-xl mt-3">
            <tr>
                <th>No</th>
                <th>Nama Tema</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($themes as $key => $theme): ?>
                <tr>
                    <td><?= $key+1 ?></td>
                    <td><?= $theme['theme_name']; ?></td>
                    <td>
                        <a href="<?= site_url('admin/edit_theme/'.$theme['id']); ?>"><button class="btn btn-warning">Edit</button></a>
                        <a href="<?= site_url('admin/delete_theme/'.$theme['id']); ?>" onclick="return confirm('Are you sure?')"><button class="btn btn-danger">Hapus</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
</div>
</div>
</div>
    <?php
include(APPPATH .'views/layout/footer.php');
?>
