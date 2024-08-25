<?php
include(APPPATH .'views/layout/header.php');
?>
<div class="container mt-4">
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
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    // Replace the textarea with CKEditor
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
</script>