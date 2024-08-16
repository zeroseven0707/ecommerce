<?php
include(APPPATH .'views/layout/header.php');
?>

  <div class="section-header">
    <h1>Edit Menu</h1>
  </div>
  <div class="container">
    <?php echo validation_errors(); ?>
    <?php echo form_open('admin/menu/edit/' . $shortcut->id); ?>
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $shortcut->title; ?>">
        </div>
        <div class="form-group">
            <label for="link">Link:</label>
            <input type="text" class="form-control" id="link" name="link" value="<?php echo $shortcut->link; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update Menu</button>
    </form>
</div>
<?php
include(APPPATH .'views/layout/footer.php');
?>