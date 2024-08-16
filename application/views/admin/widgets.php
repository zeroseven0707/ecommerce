<?php
include(APPPATH .'views/layout/header.php');
?>
   <div class="section-header">
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">widgets</a></div>
            </div>
    </div>
<div class="container">
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($widgets as $widget): ?>
                <tr>
                    <td><?php echo $widget->for; ?></td>
                    <td>
                        <a href="<?php echo site_url('admin/widgets/edit/' . $widget->id); ?>" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php
include(APPPATH .'views/layout/footer.php');
?>