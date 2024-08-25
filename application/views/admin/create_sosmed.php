<?php
include(APPPATH .'views/layout/header.php');
?>
<div class="container">
</div>
    <div class="container mt-4">
        <?php echo validation_errors(); ?>
        <?php echo form_open('admin/sosmed/create'); ?>
        <div class="form-group">
            <label for="icon">Icon:</label>
            <textarea name="icon" id="icon" class="form-control"></textarea>
        </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="link">Link:</label>
                <input type="text" class="form-control" id="link" name="link">
            </div>
            <button type="submit" class="btn btn-primary" style="border-radius: 10vw;">Tambah Sosmed</button>
        </form>
    </div>
<?php
include(APPPATH .'views/layout/footer.php');
?>