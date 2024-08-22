<?php
include(APPPATH .'views/layout/header.php');
?>
<style>
  ul li {
    margin-bottom: 0.6vw; 
    padding: 0; 
}
</style>
  <div class="row mt-4">
  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="card card-statistic-1" style="border-radius: 25px;">
        <div class="card-icon bg-primary" style="border-radius: 30px; color: white; display: flex; align-items: center; justify-content: center;">
          <iconify-icon icon="tabler:laurel-wreath-1" width="50" height="50"></iconify-icon>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Product</h4>
          </div>
          <div class="card-body">
            <?php echo $product_count ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-12 col-sm-12">
      <div class="card" style="border-radius: 25px;">
        <div class="card-header">
          <h4>Product paling banyak dilihat</h4>
        </div>
        <div class="card-body">             
          <ul class="list-unstyled ">
          <?php foreach ($top_viewed_products as $key => $productView): ?>
            <li class="media">
              <div class="media-body">
                <div class="media-title"><?= $key+1 .". ". $productView->name ?></div>
              </div>
            </li>
          <?php endforeach; ?>
          </ul>
          <div class="text-center pt-1 pb-1">
            <a href="<?= site_url('admin/products-views') ?>" class="btn btn-primary btn-lg btn-round">
            Lihat Semua
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-12 col-sm-12">
      <div class="card" style="border-radius: 25px;">
        <div class="card-header">
          <h4>Product paling banyak dibeli</h4>
        </div>
        <div class="card-body">             
          <ul class="list-unstyled ">
          <?php foreach ($top_purchased_products as $key => $productPurchase): ?>
            <li class="media">
              <div class="media-body">
                <div class="media-title"><?= $key+1 .". ". $productPurchase->name ?></div>
              </div>
            </li>
          <?php endforeach; ?>
          </ul>
          <div class="text-center pt-1 pb-1">
            <a href="<?= site_url('admin/products-purchases')?>" class="btn btn-primary btn-lg btn-round">
              Lihat Semua
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
include(APPPATH .'views/layout/footer.php');
?>