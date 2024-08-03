<div class="container">
    <h1>Edit Shortcut</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('admin/shortcuts/edit/' . $shortcut['id']); ?>
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $shortcut['title']; ?>">
        </div>
        <div class="form-group">
            <label for="link">Link:</label>
            <input type="text" class="form-control" id="link" name="link" value="<?php echo $shortcut['link']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update Shortcut</button>
    </form>
</div>
