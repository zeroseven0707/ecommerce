<?php
include(APPPATH .'views/layout/header.php');
?>
   <div class="section-header">
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Licenses</a></div>
              <div class="breadcrumb-item"><a href="#">Create License</a></div>
            </div>
    </div>
    <div class="container">
        <h1>Tambah Lisensi</h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('admin/licenses/create'); ?>
            <div class="form-group">
                <label for="title">Judul Lisensi:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi Lisensi:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Lisensi</button>
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