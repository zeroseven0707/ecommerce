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
                <h3><?php echo $product->name; ?></h3>
                <?php 
                    $original_price = $product->price;
                    $discount_percentage = $product->persentase_discount;

                    // Menghitung nilai diskon
                    $discount_amount = ($original_price * $discount_percentage) / 100;

                    // Menghitung harga setelah diskon
                    $price_after_discount = $original_price - $discount_amount;


                ?>
                <h2 class="price">Rp <?php echo number_format($price_after_discount, 0, '', '.'); ?></h2>
                <p><?php echo $product->description; ?></p>
                <a href="<?php echo site_url('buy-now/'.$product->id) ?>">
                    <button type="button" class="buynow">Beli Sekarang</button>
                </a>
            </div>
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
    let currentIndex = 0;

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
        const slideContainer = document.querySelector('.carousel-slide');
        slideContainer.style.transform = `translateX(-${slideWidth * currentIndex}px)`;

        // Mengatur titik aktif
        dots.forEach(dot => dot.classList.remove('active-dot'));
        dots[currentIndex].classList.add('active-dot');
    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => showSlide(index));
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