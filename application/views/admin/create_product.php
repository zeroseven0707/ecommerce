<?php
include(APPPATH .'views/layout/header.php');
?>
<div class="section-header">
    <h1>Create Product</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('products')?>">Products</a></div>
        <div class="breadcrumb-item"><a href="#">Create Product</a></div>
    </div>
</div>
<div class="container mt-4">
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
            <label for="discount"><input type="checkbox" id="discount" name="discount"> Discount %:</label>
            <div>
                <input type="number" id="persentase_discount" name="persentase_discount">
            </div>
        </div>
        <div class="form-group">
            <label for="buy_link">Link Beli:</label>
            <input type="text" class="form-control" id="buy_link" name="buy_link">
        </div>
        <div class="form-group">
            <label for="image_link1">Link Gambar 1:</label>
            <input type="text" class="form-control" id="image_link1" name="image_link1">
        </div>
        <div class="form-group">
            <label for="image_link2">Link Gambar 2:</label>
            <input type="text" class="form-control" id="image_link2" name="image_link2">
        </div>
        <div class="form-group">
            <label for="image_link3">Link Gambar 3:</label>
            <input type="text" class="form-control" id="image_link3" name="image_link3">
        </div>
        <div class="form-group">
            <label for="images">Foto Produk (maksimal 3 gambar total):</label>
            <input type="file" class="form-control" id="images" name="images[]" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Produk</button>
    </form>
</div>

<?php
include(APPPATH .'views/layout/footer.php');
?>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
