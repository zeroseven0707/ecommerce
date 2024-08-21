<?php
include(APPPATH .'views/layout/header.php');
?>
<div class="section-header">
    <h1>Tambah Menu</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Menu</a></div>
        <div class="breadcrumb-item"><a href="#">Create Menu</a></div>
    </div>
</div>
<div class="container">
    <?php echo validation_errors(); ?>
    <?php if (isset($upload_error)) echo '<div class="alert alert-danger">' . $upload_error . '</div>'; ?>
    <?php echo form_open_multipart('admin/menu/create'); ?>
    <div class="form-group">
        <label for="icon">Icon:</label>
        <input type="file" class="form-control" id="icon" name="icon">
    </div>
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="link">Link:</label>
            <input type="text" class="form-control" id="link" name="link">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Menu</button>
    </form>
</div>
<?php
include(APPPATH .'views/layout/footer.php');
?>
