<?php
include(APPPATH .'views/layout/header.php');
?>
  <div class="section-header">
    <h3>Import Produk</h3>
  <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Import Produk</a></div>
            </div>
    </div>
    <form action="<?php echo base_url('import-products-csv'); ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group w-50 m-auto">
            <label for="file">Choose CSV File:</label>
            <input type="file" name="csv_file" id="file" class="form-control " required>
            <button type="submit" class="btn btn-primary mt-3">Upload</button>
        </div>
    </form>

    <?php if (!empty($this->session->flashdata('message'))): ?>
        <div class="alert alert-info"><?php echo $this->session->flashdata('message'); ?></div>
    <?php endif; ?>
    <?php
include(APPPATH .'views/layout/footer.php');
?>