<?php
include(APPPATH .'views/layout/header.php');
?>
   <div class="section-header">
   <a href="<?php echo site_url('admin/licenses/create'); ?>" class="btn btn-primary" style="border-radius: 2.3vw;" >Tambah Lisensi</a>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Lisensi</a></div>
            </div>
    </div>
    <div class="section-body">
    <div class="col-12">
    <div class="card" style="border-radius: 2.3vw;">
    <div class="card-body">
        <table class="table table-responsive">
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
                            <a href="<?php echo site_url('admin/licenses/delete/' . $license->id); ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
<?php
include(APPPATH .'views/layout/footer.php');
?>