<?php
include(APPPATH .'views/layout/header-client.php');
?>
                <div class="layout_content_dekstop">
                    <div class="catalog_layout">
                        <h3>Produk Terlaris</h3>
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
                                                <?php 
                                                    $original_price = $product->price;
                                                    $discount_percentage = $product->persentase_discount;

                                                    // Menghitung nilai diskon
                                                    $discount_amount = ($original_price * $discount_percentage) / 100;

                                                    // Menghitung harga setelah diskon
                                                    $price_after_discount = $original_price - $discount_amount;


                                                ?>
                                                <span><?php if($product->price == 0){ echo "Gratis"; }else if($product->discount == true){ echo "<small><strike style='color:red;'>".get_setting('mata_uang'). number_format($product->price, 0, '', get_setting('number_format'))."</strike></small><br><p>".get_setting('mata_uang').number_format($price_after_discount, 0, '', get_setting('number_format'))."</p>" ; }else{ echo get_setting('mata_uang')." ". number_format($product->price, 0, '', get_setting('number_format')); } ?></span>
                                            </div>
                                    </div>
                                    <div class="content_grid">
                                        <h4><?php echo $product->name; ?></h4>
                                        <a href="buy-now/<?php echo $product->id; ?>"><button>Beli</button></a>
                                    </div>
                                </a>
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