<?php
include(APPPATH .'views/layout/header.php');
?>
<div class="container mt-4">
    <?php echo validation_errors(); ?>
    <?php echo form_open_multipart('admin/products/edit/'.$product['id']); ?>
        <div class="form-group">
            <label for="name">Nama Produk:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name', $product['name']); ?>">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi Produk:</label>
            <textarea class="form-control" id="description" name="description"><?php echo set_value('description', $product['description']); ?></textarea>
        </div>
        <div class="form-group">
            <label for="price">Harga Produk:</label>
            <input type="text" class="form-control" id="price" name="price" value="<?php echo set_value('price', $product['price']); ?>">
        </div>
        <div class="form-group">
            <label for="discount"><input type="checkbox" id="discount" name="discount" <?php if($product['discount'] == 1){ echo 'checked'; }else{echo '';} ?>> Discount %:</label>
            <div>
                <input type="number" id="persentase_discount" name="persentase_discount" value="<?php echo set_value('persentase_discount', $product['persentase_discount']); ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="buy_link">Link Beli:</label>
            <input type="text" class="form-control" id="buy_link" name="buy_link" value="<?php echo set_value('buy_link', $product['buy_link']); ?>">
        </div>
        <div class="form-group">
            <label for="image_link_1">Link Gambar 1:</label>
            <input type="text" class="form-control" id="image_link_1" name="image_link_1" value="<?php echo set_value('image_link_1', $product['image_links'][0] ?? ''); ?>">
        </div>
        <div class="form-group">
            <label for="image_link_2">Link Gambar 2:</label>
            <input type="text" class="form-control" id="image_link_2" name="image_link_2" value="<?php echo set_value('image_link_2', $product['image_links'][1] ?? ''); ?>">
        </div>
        <div class="form-group">
            <label for="image_link_3">Link Gambar 3:</label>
            <input type="text" class="form-control" id="image_link_3" name="image_link_3" value="<?php echo set_value('image_link_3', $product['image_links'][2] ?? ''); ?>">
        </div>
        <div class="form-group">
            <label for="images">Foto Produk (maksimal 3 gambar):</label>
            <input type="file" class="form-control" id="images" name="images[]" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Update Produk</button>
    </form>
</div>
<?php
include(APPPATH .'views/layout/footer.php');
?>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    // Replace the textarea with CKEditor
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
</script>
