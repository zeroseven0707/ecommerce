<div class="container">
    <h1>Tambah Produk</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open_multipart('admin/products/create'); ?>
        <div class="form-group">
            <label for="name">Nama Produk:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi Produk:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Harga Produk:</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="form-group">
            <label for="link">Link Beli:</label>
            <input type="text" class="form-control" id="link" name="link">
        </div>
        <div class="form-group">
            <label for="image">Foto Produk:</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Produk</button>
    </form>
</div>