<div class="container">
    <h1>Edit Lisensi</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('admin/licenses/edit/' . $license['id']); ?>
        <div class="form-group">
            <label for="title">Judul Lisensi:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $license['title']; ?>">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi Lisensi:</label>
            <textarea class="form-control" id="description" name="description"><?php echo $license['description']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Lisensi</button>
    </form>
</div>
