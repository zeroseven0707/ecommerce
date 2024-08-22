<?php
include(APPPATH .'views/layout/header.php');
?>
 <div class="section-body mt-4">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
        <a href="<?php echo site_url('admin/shortcuts/create'); ?>" class="btn btn-primary" style="border-radius: 2.3vw;">Tambah Shortcut</a>
    <div class="table-responsive">
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Link</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shortcuts as $shortcut): ?>
                <tr>
                    <td><?php echo $shortcut->title; ?></td>
                    <td><?php echo $shortcut->link; ?></td>
                    <td>
                        <a href="<?php echo site_url('admin/shortcuts/edit/' . $shortcut->id); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo site_url('admin/shortcuts/delete/' . $shortcut->id); ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>
<?php
include(APPPATH .'views/layout/footer.php');
?>
