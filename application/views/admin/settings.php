<div class="container">
    <h1>Pengaturan Website</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('admin/settings/update'); ?>
        <div class="form-group">
            <label for="site_name">Nama Web:</label>
            <input type="text" class="form-control" id="site_name" name="site_name" value="">
        </div>
        <div class="form-group">
            <label for="meta_description">Meta Description:</label>
            <textarea class="form-control" id="meta_description" name="meta_description"></textarea>
        </div>
        <div class="form-group">
            <label for="logo">Logo:</label>
            <input type="file" class="form-control" id="logo" name="logo">
            <img src="" alt="Logo" width="100">
        </div>
        <div class="form-group">
            <label for="favicon">Favicon:</label>
            <input type="file" class="form-control" id="favicon" name="favicon">
            <img src="" alt="Favicon" width="50">
        </div>
        <div class="form-group">
            <label for="theme">Tema:</label>
            <input type="text" class="form-control" id="theme" name="theme" value="">
        </div>
        <div class="form-group">
            <label for="copyright">Copyright:</label>
            <input type="text" class="form-control" id="copyright" name="copyright" value="">
        </div>
        <button type="submit" class="btn btn-primary">Update Pengaturan</button>
    </form>
</div>
