<?php
include(APPPATH .'views/layout/header-client.php');
?>
                <div class="layout_content_dekstop">
                    <div class="catalog_layout">
                        <h3>Semua Produk</h3>
                        <div class="catalog_grid">
                        <?php foreach ($products as $product): ?>
                            <div class="box_grid">
                                <a href="<?php echo site_url('detail-product/'.$product->id); ?>">
                                    <div class="image_grid">
                                        <?php 
                                            $images = json_decode($product->images);
                                        ?>
                                        <img src="<?php echo $images[0] ?>" alt="Produk Digital">
                                        <div class="price_grid">
                                            <span>Rp <?php echo number_format($product->price); ?></span>
                                        </div>
                                    </div>
                                </a>
                                <div class="content_grid">
                                    <h4><?php echo $product->name; ?></h4>
                                    <a href="buy-now/<?php echo $product->id; ?>"><button>Beli</button></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php
            include(APPPATH .'views/layout/space_dekstop.php');
        ?>
                <?php
include(APPPATH .'views/layout/footer-client.php');
?>