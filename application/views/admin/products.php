<?php
include(APPPATH .'views/layout/header.php');
?>
<?php if ($this->session->flashdata('error')): ?>
    <div style="color: red;">
        <?= $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>

            <div class="section-header">
                      <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                        <div class="breadcrumb-item"><a href="#">Prroduct</a></div>
                      </div>
              </div>
              <div class="section-body">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                   <a href="<?php echo base_url('export-products-csv'); ?>" class="btn btn-primary">Download CSV</a>
                   <a href="<?php echo base_url('import-products'); ?>" class="btn btn-warning ml-4">Import</a>
                   <a href="<?php echo site_url('admin/products/create'); ?>" class="btn btn-primary" style="border-radius: 2.3vw; margin-left: auto;">Tambah Produk</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th>
                              No
                            </th>
                            <th>Nama</th>
                            <th>Diskon</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>    
                        <?php foreach ($products as $key => $product): ?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td><?php echo $product->name; ?></td>
                                <td><?php echo isset($product->persentase_discount)?"$product->persentase_discount.'%'":"-"; ?></td>
                                <td><?php echo $product->price; ?></td>
                                <td>
                                    <a href="<?php echo site_url('admin/products/edit/' . $product->id); ?>" class="btn btn-warning">Edit</a>
                                    <a href="<?php echo site_url('admin/products/delete/' . $product->id); ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
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