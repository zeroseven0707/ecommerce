<?php
include(APPPATH .'views/layout/header.php');
?>
   <div class="section-header">
   <a href="<?php echo site_url('admin/guides/create'); ?>" class="btn btn-primary" style="border-radius: 2.3vw;" >Tambah Guide</a>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Guide</a></div>
            </div>
    </div>
    <div class="section-body">
    <div class="col-12">
    <div class="card" style="border-radius: 2.3vw;">
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($guides as $guide): ?>
                    <tr>
                        <td><?php echo $guide->title; ?></td>
                        <td><?php echo $guide->description; ?></td>
                        <td>
                            <a href="<?php echo site_url('admin/guides/edit/' . $guide->id); ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo site_url('admin/guides/delete/' . $guide->id); ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
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