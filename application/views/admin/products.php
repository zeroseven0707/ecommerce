<div class="container">
    <h1>Produk</h1>
    <a href="<?php echo site_url('admin/products/create'); ?>" class="btn btn-primary">Tambah Produk</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Link Beli</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['description']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $product['link']; ?></td>
                    <td><img src="<?php echo $product['image']; ?>" alt="Product Image" width="50"></td>
                    <td>
                        <a href="<?php echo site_url('admin/products/edit/' . $product['id']); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo site_url('admin/products/delete/' . $product['id']); ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
