<?php
include(APPPATH .'views/layout/header.php');
?>
<div class="container mt-4">
</div>
<div class="container mt-4">
    <?php echo validation_errors(); ?>
    <?php if (isset($upload_error)) echo '<div class="alert alert-danger">' . $upload_error . '</div>'; ?>
    <?php echo form_open_multipart('admin/menu/create'); ?>
        <div class="form-group">
            <label for="icon">Icon:</label>
            <textarea name="icon" id="icon" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="link">Link:</label>
            <input type="text" class="form-control" id="link" name="link">
        </div>
        <button type="submit" class="btn btn-primary"  style="border-radius: 10vw;">Tambah Menu</button>
    </form>
</div>
<?php
include(APPPATH .'views/layout/footer.php');
?>
