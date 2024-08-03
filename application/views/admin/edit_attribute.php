<div class="container">
    <h1>Edit Atribut</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('admin/attributes/edit/' . $attribute['id']); ?>
        <div class="form-group">
            <label for="prefix">Prefix:</label>
            <input type="text" class="form-control" id="prefix" name="prefix" value="<?php echo $attribute['prefix']; ?>">
        </div>
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $attribute['title']; ?>">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi:</label>
            <textarea class="form-control" id="description" name="description"><?php echo $attribute['description']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Atribut</button>
    </form>
</div>
