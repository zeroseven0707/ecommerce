<?php
include(APPPATH .'views/layout/header-client.php');
?>
                <div class="layout_content_dekstop">
                    <div class="banner">
                        <img src="<?php echo base_url('uploads/') . get_setting('image_body'); ?>" alt="" class="image_banner">
                        <div class="banner_content">
                            <h1><?= get_setting('text_body') ?></h1>
                            <a href="<?= base_url('product-promo')  ?>"><button>Lihat Promo <iconify-icon icon="cil:arrow-right"></iconify-icon></button></a>
                        </div>
                    </div>
                    <div class="catalog_layout">
                        <h3>Produk Terlaris</h3>
                        <div class="catalog_grid">
                            <?php if($top_purchased_products == null){

                            }else{
                                foreach ($top_purchased_products as $product): 
                            ?>

                                <div class="box_grid">
                                    <a href="<?php echo site_url('detail-product/'.$product->id); ?>">
                                        <div class="image_grid">
                                            <?php 
                                                $images = json_decode($product->images);
                                            ?>
                                            <img src="<?php echo $images[0] ?>" alt="Produk Digital">
                                            <div class="price_grid">
                                                <?php 
                                                    $original_price = $product->price;
                                                    $discount_percentage = $product->persentase_discount;

                                                    // Menghitung nilai diskon
                                                    $discount_amount = ($original_price * $discount_percentage) / 100;

                                                    // Menghitung harga setelah diskon
                                                    $price_after_discount = $original_price - $discount_amount;

                                                    // Memformat harga agar menggunakan titik sebagai pemisah ribuan
                                                    $formatted_price = number_format($price_after_discount, 0, '', get_setting('number_format'));

                                                ?>
                                                <span><?php if($product->price == 0){ echo "Freebies"; }else if($product->discount == true){ echo "<small><strike style='color:red;'>".get_setting('mata_uang'). number_format($product->price, 0, '', get_setting('number_format'))."</strike></small><br><p>".get_setting('mata_uang').number_format($price_after_discount, 0, '', get_setting('number_format'))."</p>" ; }else{ echo get_setting('mata_uang')." ". number_format($product->price, 0, '', get_setting('number_format')); } ?></span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="<?php echo site_url('detail-product/'.$product->id); ?>">
                                    <div class="content_grid">
                                        <h4><?php echo $product->name; ?></h4>
                                        <a href="buy-now/<?php echo $product->id; ?>"><button>Beli</button></a>
                                    </div>
                                    </a>
                                </div>
                            <?php endforeach; } ?> 
                        </div>
                        <a href="<?php echo base_url('product-terlaris') ?>" class="see_other">Lihat Lebih Banyak <iconify-icon icon="cil:arrow-right"></iconify-icon></a>
                    </div>
                    <div class="catalog_layout dekstop">
                    <?php 
                        $CI =& get_instance();
                        $widgets_dekstop = $CI->Widget_model->dekstop();
                        echo $widgets_dekstop->value;
                    ?> 
                    </div>
                    <div class="catalog_layout">
                        <h3>Produk Terbaru</h3>
                        <div class="catalog_grid">
                            <?php if($new == null){

                            }else{
                                foreach ($new as $product): 
                            ?>

                                <div class="box_grid">
                                    <a href="<?php echo site_url('detail-product/'.$product->id); ?>">
                                        <div class="image_grid">
                                            <?php 
                                                $images = json_decode($product->images);
                                            ?>
                                            <img src="<?php echo $images[0] ?>" alt="Produk Digital">
                                            <div class="price_grid">
                                                <?php 
                                                    $original_price = $product->price;
                                                    $discount_percentage = $product->persentase_discount;

                                                    // Menghitung nilai diskon
                                                    $discount_amount = ($original_price * $discount_percentage) / 100;

                                                    // Menghitung harga setelah diskon
                                                    $price_after_discount = $original_price - $discount_amount;

                                                    // Memformat harga agar menggunakan titik sebagai pemisah ribuan
                                                    $formatted_price = number_format($price_after_discount, 0, '', get_setting('number_format'));

                                                ?>
                                                <span><?php if($product->price == 0){ echo "Freebies"; }else if($product->discount == true){ echo "<small><strike style='color:red;'>".get_setting('mata_uang'). number_format($product->price, 0, '', get_setting('number_format'))."</strike></small><br><p>".get_setting('mata_uang').number_format($price_after_discount, 0, '', get_setting('number_format'))."</p>" ; }else{ echo get_setting('mata_uang')." ". number_format($product->price, 0, '', get_setting('number_format')); } ?></span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="<?php echo site_url('detail-product/'.$product->id); ?>">
                                    <div class="content_grid">
                                        <h4><?php echo $product->name; ?></h4>
                                        <a href="buy-now/<?php echo $product->id; ?>"><button>Beli</button></a>
                                    </div>
                                    </a>
                                </div>
                            <?php endforeach; } ?> 
                        </div>
                        <a href="<?php echo base_url('new-product') ?>" class="see_other">Lihat Lebih Banyak <iconify-icon icon="cil:arrow-right"></iconify-icon></a>
                    </div>
                   <div class="mobile-1">
                   <?php
                    include(APPPATH .'views/layout/space_mobile.php');
                    ?>
                   </div>
                    <div class="catalog_layout">
                        <h3>Semua Produk</h3>
                        <div class="catalog_grid">
                            <?php if($products == null){

                            }else{
                                foreach ($products as $product): 
                            ?>

                                <div class="box_grid">
                                    <a href="<?php echo site_url('detail-product/'.$product->id); ?>">
                                        <div class="image_grid">
                                            <?php 
                                                $images = json_decode($product->images);
                                            ?>
                                            <img src="<?php echo $images[0] ?>" alt="Produk Digital">
                                            <div class="price_grid">
                                                <?php 
                                                    $original_price = $product->price;
                                                    $discount_percentage = $product->persentase_discount;

                                                    // Menghitung nilai diskon
                                                    $discount_amount = ($original_price * $discount_percentage) / 100;

                                                    // Menghitung harga setelah diskon
                                                    $price_after_discount = $original_price - $discount_amount;


                                                ?>
                                                <span><?php if($product->price == 0){ echo "Freebies"; }else if($product->discount == true){ echo "<small><strike style='color:red;'>".get_setting('mata_uang'). number_format($product->price, 0, '', get_setting('number_format'))."</strike></small><br><p>".get_setting('mata_uang').number_format($price_after_discount, 0, '', get_setting('number_format'))."</p>" ; }else{ echo get_setting('mata_uang')." ". number_format($product->price, 0, '', get_setting('number_format')); } ?></span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="<?php echo site_url('detail-product/'.$product->id); ?>">
                                    <div class="content_grid">
                                        <h4><?php echo $product->name; ?></h4>
                                        <a href="buy-now/<?php echo $product->id; ?>"><button>Beli</button></a>
                                    </div>
                                    </a>
                                </div>
                            <?php endforeach; } ?> 
                        </div>
                        <a href="<?php echo base_url('all') ?>" class="see_other">Lihat Lebih Banyak <iconify-icon icon="cil:arrow-right"></iconify-icon></a>
                    </div>
                    <div class="mobile-2">
                    <?php
                    include(APPPATH .'views/layout/space_mobile2.php');
                    ?>
                    </div>
                    <div class="catalog_layout">
                        <h3>Freebies</h3>
                        <div class="catalog_grid">
                            <?php if($freebies == null){

                            }else{
                                foreach ($freebies as $product): 
                            ?>

                                <div class="box_grid">
                                    <a href="<?php echo site_url('detail-product/'.$product->id); ?>">
                                        <div class="image_grid">
                                            <?php 
                                                $images = json_decode($product->images);
                                            ?>
                                            <img src="<?php echo $images[0] ?>" alt="Produk Digital">
                                            <div class="price_grid">
                                                <?php 
                                                    $original_price = $product->price;
                                                    $discount_percentage = $product->persentase_discount;

                                                    // Menghitung nilai diskon
                                                    $discount_amount = ($original_price * $discount_percentage) / 100;

                                                    // Menghitung harga setelah diskon
                                                    $price_after_discount = $original_price - $discount_amount;

                                                    // Memformat harga agar menggunakan titik sebagai pemisah ribuan
                                                    $formatted_price = number_format($price_after_discount, 0, '', get_setting('number_format'));

                                                ?>
                                                <span><?php if($product->price == 0){ echo "Freebies"; }else if($product->discount == true){ echo "<strike style='color:red;'>".get_setting('mata_uang'). number_format($product->price, 0, '', get_setting('number_format'))."</strike><br><p>".get_setting('mata_uang').number_format($price_after_discount, 0, '', get_setting('number_format'))."</p>" ; }else{ echo get_setting('mata_uang')." ". number_format($product->price, 0, '', get_setting('number_format')); } ?></span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="<?php echo site_url('detail-product/'.$product->id); ?>">
                                    <div class="content_grid">
                                        <h4><?php echo $product->name; ?></h4>
                                        <a href="buy-now/<?php echo $product->id; ?>"><button>Beli</button></a>
                                    </div>
                                    </a>
                                </div>
                            <?php endforeach; } ?> 
                        </div>
                        <a href="<?php echo base_url('freebies') ?>" class="see_other">Lihat Lebih Banyak <iconify-icon icon="cil:arrow-right"></iconify-icon></a>
                    </div>
                </div>
                <?php
                    include(APPPATH .'views/layout/space_dekstop.php');
                    ?>
                <?php
include(APPPATH .'views/layout/footer-client.php');
?>