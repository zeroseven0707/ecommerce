<?php
include(APPPATH .'views/layout/header.php');
?>
<div class="container mt-4">
    <h2>Edit Widget <?=$widget->for?></h2>
    <?php echo validation_errors(); ?>
    <?php echo form_open('admin/widgets/edit/' . $widget->id); ?>
            <div class="form-group">
            <label for="">Code</label>
            <textarea name="value" rows="20" style="width: 100%;"><?= $widget->value ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Widget</button>
    </form>
</div>
<?php
include(APPPATH .'views/layout/footer.php');
?>