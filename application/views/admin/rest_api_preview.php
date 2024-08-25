<?php
include(APPPATH .'views/layout/header.php');
?>
<div class="mt-4 ml-4"><a href="<?= base_url('admin/api/product') ?>" class="btn btn-danger" style="border-radius: 10vw;">Kembali</a></div>
<?php echo isset($rest->value) ? $rest->value : ''; ?>
<?php
include(APPPATH .'views/layout/footer.php');
?>