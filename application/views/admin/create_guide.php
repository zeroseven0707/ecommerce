<?php
include(APPPATH .'views/layout/header.php');
?>
   <div class="section-header">
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Guide</a></div>
              <div class="breadcrumb-item"><a href="#">Create Guide</a></div>
            </div>
    </div>
    <div class="container">
        <h1>Tambah Guide</h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('admin/guides/create'); ?>
            <div class="form-group">
                <label for="title">Judul:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
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