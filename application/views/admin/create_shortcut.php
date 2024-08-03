<div class="container">
    <h1>Tambah Shortcut</h1>
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
