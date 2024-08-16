<?php
include(APPPATH .'views/layout/header.php');
?>
   <div class="section-header">
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Product</a></div>
            </div>
    </div>
    <div class="section-body">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Product paling banyak dilihat</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <!-- <table class="table table-striped" id="table-1"> -->
                      <table class="table table-striped">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              No
                            </th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Link Beli</th>
                            <th class="text-center">Dilihat</th>
                          </tr>
                        </thead>
                        <tbody>    
                        <?php foreach ($products as $key => $product): ?>
                            <tr>
                                <td class="text-center"><?php echo $key+1; ?></td>
                                <td><?php echo $product->name; ?></td>
                                <td><?php echo $product->price; ?></td>
                                <td><?php echo $product->buy_link; ?></td>
                                <td class="text-center"><?php echo $product->views; ?></td>
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