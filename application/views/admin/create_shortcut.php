<?php
include(APPPATH .'views/layout/header.php');
?>
   <div class="section-header">
   <h1>Tambah Shortcut</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Shortcut</a></div>
              <div class="breadcrumb-item"><a href="#">Create Shortcut</a></div>
            </div>
    </div>
<div class="container">
    <?php echo validation_errors(); ?>
    <?php echo form_open('admin/shortcuts/create'); ?>
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="link">Link:</label>
            <input type="text" class="form-control" id="link" name="link">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Shortcut</button>
    </form>
</div>
