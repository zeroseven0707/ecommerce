<div class="container">
    <h1>Dashboard</h1>
    <p>Jumlah Produk: <?php echo $product_count; ?></p>
    <h3>Produk View Tertinggi</h3>
    <ul>
        <?php foreach ($top_viewed_products as $product): ?>
            <li><?php echo $product['name']; ?> - <?php echo $product['views']; ?> views</li>
        <?php endforeach; ?>
    </ul>
    <h3>Produk Klik Beli Terbanyak</h3>
    <ul>
        <?php foreach ($top_purchased_products as $product): ?>
            <li><?php echo $product['name']; ?> - <?php echo $product['purchases']; ?> purchases</li>
        <?php endforeach; ?>
    </ul>
</div>
