<?php
include(APPPATH .'views/layout/header.php');
?>       
    <div class="section-body mt-4">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
    <a href="<?php echo site_url('admin/sosmed/create'); ?>" class="btn btn-primary" style="border-radius: 2.3vw;" >Tambah Sosmed</a>
    <a class="btn btn-danger float-right" href="https://icon-sets.iconify.design/?category=General" style="border-radius: 10vw;" target="_blank">Cari Icon disni</a>
    <div class="table-responsive">
    <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Icon</th>
                    <th>Name</th>
                    <th>Link</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sosmed as $sosmeds): ?>
                    <tr>
                        <td><?php echo $sosmeds->icon; ?></td>
                        <td><?php echo $sosmeds->name; ?></td>
                        <td><?php echo $sosmeds->link; ?></td>
                        <td>
                            <a href="<?php echo site_url('admin/sosmed/edit/' . $sosmeds->id); ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo site_url('admin/sosmed/delete/' . $sosmeds->id); ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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