<?php
include(APPPATH .'views/layout/header.php');
?>
<div class="container mt-4">
    <?php echo validation_errors(); ?>
    <?php if (isset($upload_error)) echo '<div class="alert alert-danger">' . $upload_error . '</div>'; ?>
    <?php echo form_open_multipart('admin/menu/edit/' . $menu->id); ?>
    <div class="form-group">
        <label for="icon">Icon:</label>
        <input type="file" class="form-control" id="icon" name="icon">
        <?php if($menu->icon): ?>
            <img src="<?= base_url('uploads/icons/'.$menu->icon); ?>" alt="Current Icon" class="img-thumbnail mt-2" style="max-width: 100px;">
        <?php endif; ?>
    </div>
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $menu->title; ?>">
        </div>
        <div class="form-group">
            <label for="link">Link:</label>
            <input type="text" class="form-control" id="link" name="link" value="<?php echo $menu->link; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update Menu</button>
    </form>
</div>
<?php
include(APPPATH .'views/layout/footer.php');
?>
