<?php
include(APPPATH .'views/layout/header.php');
?>
<div class="container mt-4">
    <a class="btn btn-danger mt-4" href="https://icon-sets.iconify.design/?category=General" style="border-radius: 10vw;" target="_blank">Cari Icon disni</a>
</div>
<div class="container mt-4">
    <?php echo validation_errors(); ?>
    <?php echo form_open('admin/sosmed/edit/' . $sosmed->id); ?>
        <div class="form-group">
        <div class="form-group">
            <label for="icon">Icon:</label>
            <textarea name="icon" id="icon" class="form-control"> <?php if($sosmed->icon): echo $sosmed->icon; endif; ?></textarea>
            <?php if($sosmed->icon): echo $sosmed->icon; endif; ?>
        </div>
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $sosmed->name; ?>">
        </div>
        <div class="form-group">
            <label for="link">Link:</label>
            <input type="text" class="form-control" id="link" name="link" value="<?php echo $sosmed->link; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update Sosmed</button>
    </form>
</div>
<?php
include(APPPATH .'views/layout/footer.php');
?>