<?php
include(APPPATH .'views/layout/header-client.php');
?>
    <div class="layout_content_dekstop">
        <div class="detail_catalog_layout">
            <a href="#" class="arrow"><iconify-icon icon="ci:arrow-left-lg" width="30" height="30"></iconify-icon></a>
        <div class="detail_catalog">
        <div class="carousel-container">
            <div class="carousel-slide">
                <?php
                $images = json_decode($product->images);
                if (is_array($images)):
                    foreach ($images as $index => $image): ?>
                        <img class="carousel-image" src="<?php echo $image; ?>" alt="Product Image">
                    <?php endforeach;
                else: ?>
                    <p>No images available.</p>
                <?php endif; ?>
            </div>
            <div class="carousel-dots">
                <?php if (is_array($images)): ?>
                    <?php foreach ($images as $index => $image): ?>
                        <span class="dot" data-slide="<?php echo $index; ?>"></span>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="description">
            <div class="des-wrap">
                <h3><?php echo $product->name; ?></h3>
                <?php 
                    $original_price = $product->price;
                    $discount_percentage = $product->persentase_discount;
    
                    // Menghitung nilai diskon
                    $discount_amount = ($original_price * $discount_percentage) / 100;
    
                    // Menghitung harga setelah diskon
                    $price_after_discount = $original_price - $discount_amount;
    
    
                ?>
                <h2 class="price"><?php if($product->price == 0){ echo "Gratis"; }else{ echo "Rp ".number_format($price_after_discount, 0, '', '.');} ?></h2>
                <p><?php echo $product->description; ?></p>
                <a href="<?php echo site_url('buy-now/'.$product->id) ?>">
                    <button type="button" class="buynow">Beli Sekarang</button>
                </a>
            </div>
        </div>
    </div>
    <div class="dekstop">
        <p><?php echo $product->description; ?></p>
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
                                        <span><?php if($product->price == 0){ echo "Gratis"; }else if($product->discount == true){ echo "<small><strike style='color:red;'>".get_setting('mata_uang'). number_format($product->price, 0, '', get_setting('number_format'))."</strike></small><br><p>".get_setting('mata_uang').number_format($price_after_discount, 0, '', get_setting('number_format'))."</p>" ; }else{ echo get_setting('mata_uang')." ". number_format($product->price, 0, '', get_setting('number_format')); } ?></span>
                                    </div>
                                </div>
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
            </div>
        </div>
    <?php
            include(APPPATH .'views/layout/space_dekstop.php');
        ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const slides = document.querySelectorAll('.carousel-image');
        const dots = document.querySelectorAll('.dot');
        const slideContainer = document.querySelector('.carousel-slide');
        let currentIndex = 0;
        let startX = 0;
        let isDragging = false;

        function showSlide(index) {
            if (index >= slides.length) {
                currentIndex = 0;
            } else if (index < 0) {
                currentIndex = slides.length - 1;
            } else {
                currentIndex = index;
            }

            // Menggeser slide
            const slideWidth = slides[currentIndex].clientWidth;
            slideContainer.style.transform = `translateX(-${slideWidth * currentIndex}px)`;

            // Mengatur titik aktif
            dots.forEach(dot => dot.classList.remove('active-dot'));
            dots[currentIndex].classList.add('active-dot');
        }

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => showSlide(index));
        });

        // Touch events untuk perangkat seluler
        slideContainer.addEventListener('touchstart', function(e) {
            startX = e.touches[0].clientX;
            isDragging = true;
        });

        slideContainer.addEventListener('touchmove', function(e) {
            if (!isDragging) return;

            const touch = e.touches[0];
            const moveX = touch.clientX - startX;

            slideContainer.style.transform = `translateX(calc(-${currentIndex * 100}% + ${moveX}px))`;
        });

        slideContainer.addEventListener('touchend', function(e) {
            const endX = e.changedTouches[0].clientX;
            const diffX = endX - startX;

            if (diffX > 50) {
                showSlide(currentIndex - 1); // Geser ke kiri
            } else if (diffX < -50) {
                showSlide(currentIndex + 1); // Geser ke kanan
            } else {
                showSlide(currentIndex); // Tetap di slide saat ini
            }

            isDragging = false;
        });

        // Mouse events untuk desktop
        slideContainer.addEventListener('mousedown', function(e) {
            startX = e.clientX;
            isDragging = true;
            slideContainer.style.cursor = 'grabbing';
        });

        slideContainer.addEventListener('mousemove', function(e) {
            if (!isDragging) return;

            const moveX = e.clientX - startX;
            slideContainer.style.transform = `translateX(calc(-${currentIndex * 100}% + ${moveX}px))`;
        });

        slideContainer.addEventListener('mouseup', function(e) {
            if (!isDragging) return;

            const endX = e.clientX;
            const diffX = endX - startX;

            if (diffX > 50) {
                showSlide(currentIndex - 1); // Geser ke kiri
            } else if (diffX < -50) {
                showSlide(currentIndex + 1); // Geser ke kanan
            } else {
                showSlide(currentIndex); // Tetap di slide saat ini
            }

            isDragging = false;
            slideContainer.style.cursor = 'grab';
        });

        slideContainer.addEventListener('mouseleave', function() {
            if (isDragging) {
                showSlide(currentIndex);
                isDragging = false;
                slideContainer.style.cursor = 'grab';
            }
        });

        // Tampilkan slide pertama
        showSlide(currentIndex);
    });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Pilih elemen dengan kelas 'arrow'
    var arrow = document.querySelector('.arrow');

    // Tambahkan event listener untuk klik
    if (arrow) {
      arrow.addEventListener('click', function(event) {
        // Mencegah perilaku default dari elemen <a>
        event.preventDefault();

        // Kembali ke halaman sebelumnya
        window.history.back();
      });
    }
  });
</script>
<?php
include(APPPATH .'views/layout/footer-client.php');
?>