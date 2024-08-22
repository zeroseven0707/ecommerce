<?php
include(APPPATH .'views/layout/header.php');
?>
 <div class="section-body mt-4">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
    <a href="<?php echo site_url('admin/menu/create'); ?>" class="btn btn-primary" style="border-radius: 2.3vw;">Tambah Menu</a>
    <div class="table-responsive">
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Icon</th>
                    <th>Judul</th>
                    <th>Link</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($menu as $menu): ?>
                    <tr>
                        <td><img src="<?php echo base_url('uploads/icons/'.$menu->icon);?>" width="40" alt="icon"></td>
                        <td><?php echo $menu->title; ?></td>
                        <td><?php echo $menu->link; ?></td>
                        <td>
                            <a href="<?php echo site_url('admin/menu/edit/' . $menu->id); ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo site_url('admin/menu/delete/' . $menu->id); ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
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
