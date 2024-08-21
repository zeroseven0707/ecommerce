<?php
include(APPPATH .'views/layout/header.php');
?>
<div class="section-header">
<a href="<?php echo site_url('admin/create_theme'); ?>" class="btn btn-primary" style="border-radius: 2.3vw;">Tambah Theme</a>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Theme</a></div>
    </div>
</div>
    <table class="table table-striped table-responsive-xl">
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
                    <a href="<?= site_url('admin/preview/'.$theme['id']); ?>"><button class="btn btn-primary">Preview</button></a>
                    <a href="<?= site_url('admin/delete_theme/'.$theme['id']); ?>" onclick="return confirm('Are you sure?')"><button class="btn btn-danger">Hapus</button></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php
include(APPPATH .'views/layout/footer.php');
?>
