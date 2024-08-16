<?php
include(APPPATH .'views/layout/header.php');
?>
  <div class="section-header">
            <h1>Edit License</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo base_url('products')?>">Licenses</a></div>
              <div class="breadcrumb-item"><a href="#">Edit License</a></div>
            </div>
    </div>
<div class="container">
    <?php echo validation_errors(); ?>
    <?php echo form_open('admin/licenses/edit/' . $license->id); ?>
        <div class="form-group">
            <label for="title">Judul Lisensi:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $license->title; ?>">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi Lisensi:</label>
            <textarea class="form-control" id="description" name="description"><?php echo $license->description; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Lisensi</button>
    </form>
</div>
<?php
include(APPPATH .'views/layout/footer.php');
?>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>