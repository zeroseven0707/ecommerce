<div class="container">
    <h1>Edit Produk</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open_multipart('admin/products/edit/' . $product['id']); ?>
        <div class="form-group">
            <label for="name">Nama Produk:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $product['name']; ?>">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi Produk:</label>
            <textarea class="form-control" id="description" name="description"><?php echo $product['description']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="price">Harga Produk:</label>
            <input type="text" class="form-control" id="price" name="price" value="<?php echo $product['price']; ?>">
        </div>
        <div class="form-group">
            <label for="link">Link Beli:</label>
            <input type="text" class="form-control" id="link" name="link" value="<?php echo $product['link']; ?>">
        </div>
        <div class="form-group">
            <label for="image">Foto Produk:</label>
            <input type="file" class="form-control" id="image" name="image">
            <img src="<?php echo $product['image']; ?>" alt="Product Image" width="100">
        </div>
        <button type="submit" class="btn btn-primary">Update Produk</button>
    </form>
</div>
