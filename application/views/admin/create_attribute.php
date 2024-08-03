<div class="container">
    <h1>Tambah Atribut</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('admin/attributes/create'); ?>
        <div class="form-group">
            <label for="prefix">Prefix:</label>
            <input type="text" class="form-control" id="prefix" name="prefix">
        </div>
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Atribut</button>
    </form>
</div>
