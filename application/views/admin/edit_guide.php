<?php
include(APPPATH .'views/layout/header.php');
?>
  <div class="section-header">
            <h1>Edit guide</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo base_url('products')?>">Guide</a></div>
              <div class="breadcrumb-item"><a href="#">Edit Guide</a></div>
            </div>
    </div>
<div class="container">
    <?php echo validation_errors(); ?>
    <?php echo form_open('admin/guides/edit/' . $guide->id); ?>
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $guide->title; ?>">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi:</label>
            <textarea class="form-control" id="description" name="description"><?php echo $guide->description; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
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