<?php
include(APPPATH .'views/layout/header.php');
?>

<div class="section-header">
    <h1>Pengaturan Website</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Pengaturan Website</a></div>
    </div>
</div>

<div class="container">
    <?php echo validation_errors(); ?>
    <?php echo form_open_multipart('admin/update_setting'); ?>
    <div class="form-group">
      <label for="theme">Theme</label>
      <select class="form-control" name="theme" id="theme">
        <option value="">Pilih Tema</option>
        <?php foreach ($theme as $key => $value) { ?>
            <option value="<?php echo $value['id']; ?>" <?php if ($value['id'] == $settings->theme) { echo "selected"; } ?>>
                <?= $value['theme_name'] ?>
            </option>
        <?php } ?>
    </select>
    </div>
    <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo isset($settings->title) ? $settings->title : ''; ?>">
        </div>
        <div class="form-group">
            <label for="site_name">Nama Web:</label>
            <input type="text" class="form-control" id="site_name" name="site_name" value="<?php echo isset($settings->site_name) ? $settings->site_name : ''; ?>">
        </div>
        <div class="form-group">
            <label for="meta_description">Meta Description:</label>
            <textarea class="form-control" id="meta_description" name="meta_description"><?php echo isset($settings->meta_description) ? $settings->meta_description : ''; ?></textarea>
        </div>
        <div class="form-group">
            <label for="text_body">Teks Homepage:</label>
            <input type="text" class="form-control" id="text_body" name="text_body" value="<?php echo isset($settings->text_body) ? $settings->text_body : ''; ?>">
        </div>
        <div class="form-group">
            <label for="mata_uang">Mata Uang:</label>
            <input type="text" class="form-control" id="mata_uang" name="mata_uang" value="<?php echo isset($settings->mata_uang) ? $settings->mata_uang : ''; ?>">
        </div>
        <div class="form-group">
            <label for="Format">Format Number:</label>
            <input type="text" class="form-control" id="Format" name="number_format" value="<?php echo isset($settings->number_format) ? $settings->number_format : ''; ?>">
        </div>
        <div class="form-group">
            <label for="copyright">Copyright:</label>
            <input type="text" class="form-control" id="copyright" name="copyright" value="<?php echo isset($settings->copyright) ? $settings->copyright : ''; ?>">
        </div>
        <div class="form-group">
            <label for="footer">Footer:</label>
            <input type="checkbox" id="footer" name="footer" <?php if($settings->footer == true){echo "checked";} ?>>
        </div>
        <div class="row">
            <div class="form-group col-md-3 col-6 w-25 p-3">
                <label for="logo">Logo:</label>
                <input type="file" class="form-control" id="logo" name="logo">
                <?php if (isset($settings->logo)): ?>
                    <img src="<?php echo base_url('uploads/' . $settings->logo); ?>" alt="Logo" width="100">
                <?php endif; ?>
            </div>
            <div class="form-group col-md-3 col-6 w-25 p-3">
                <label for="favicon">Favicon:</label>
                <input type="file" class="form-control" id="favicon" name="favicon">
                <?php if (isset($settings->favicon)): ?>
                    <img src="<?php echo base_url('uploads/' . $settings->favicon); ?>" alt="Favicon" width="50">
                <?php endif; ?>
            </div>
            <div class="form-group col-md-3 col-6 w-25 p-3">
                <label for="image_body">Gambar Homepage:</label>
                <input type="file" class="form-control" id="image_body" name="image_body">
                <?php if (isset($settings->image_body)): ?>
                    <img src="<?php echo base_url('uploads/' . $settings->image_body); ?>" alt="gambar homepage" width="100">
                <?php endif; ?>
            </div>
            <div class="form-group col-md-3 col-6 w-25 p-3">
                <label for="image_footer">Gambar Footer:</label>
                <input type="file" class="form-control" id="image_footer" name="image_footer">
                <?php if (isset($settings->image_footer)): ?>
                    <img src="<?php echo base_url('uploads/' . $settings->image_footer); ?>" alt="gambar homepage" width="100">
                <?php endif; ?>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update Pengaturan</button>
    </form>
</div>

<?php
include(APPPATH .'views/layout/footer.php');
?>
