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
