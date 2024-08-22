<?php
include(APPPATH .'views/layout/header.php');
?>       
    <div class="section-body mt-4">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
    <a href="<?php echo site_url('admin/licenses/create'); ?>" class="btn btn-primary" style="border-radius: 2.3vw;" >Tambah Lisensi</a>
    <div class="table-responsive">
    <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($licenses as $license): ?>
                    <tr>
                        <td><?php echo $license->title; ?></td>
                        <td><?php echo $license->description; ?></td>
                        <td>
                            <a href="<?php echo site_url('admin/licenses/edit/' . $license->id); ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo site_url('admin/licenses/delete/' . $license->id); ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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