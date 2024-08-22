<?php
include(APPPATH .'views/layout/header.php');
?>
    <div class="section-body mt-4">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-striped">
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
</div>
</div>
</div>
</div>
<?php
include(APPPATH .'views/layout/footer.php');
?>