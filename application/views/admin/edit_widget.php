<?php
include(APPPATH .'views/layout/header.php');
?>
  <div class="section-header">
            <h1>Edit Widget</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo base_url('products')?>">Licenses</a></div>
              <div class="breadcrumb-item"><a href="#">Edit Widget</a></div>
            </div>
    </div>
<div class="container">
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