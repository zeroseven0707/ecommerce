<?php include(APPPATH .'views/layout/header.php'); ?>

<div class="container mt-5">
    <!-- Menampilkan error validasi jika ada -->
    <?php if (validation_errors()): ?>
        <div class="alert alert-danger">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    
    <!-- Form untuk mengedit tema -->
    <?= form_open('admin/edit_theme/'.$theme['id'], ['class' => 'bg-light p-4 rounded shadow-sm']); ?>
    <h3 class="mb-4">Edit Theme</h3>
    
    <div class="form-group">
        <label for="name">Theme Name:</label>
        <input type="text" name="theme_name" class="form-control" placeholder="Enter theme name" value="<?= set_value('theme_name', $theme['theme_name'] ?? ''); ?>">
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="header_color">Warna Header:</label>
            <input type="color" name="header_color" class="form-control" value="<?= set_value('header_color', $theme['header_color'] ?? '#ffffff'); ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="navbar_color">Warna Body:</label>
            <input type="color" name="navbar_color" class="form-control" value="<?= set_value('navbar_color', $theme['navbar_color'] ?? '#ffffff'); ?>">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="text_color">Warna Teks:</label>
            <input type="color" name="text_color" class="form-control" value="<?= set_value('text_color', $theme['text_color'] ?? '#000000'); ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="header_menu_text_color">Warna Teks Menu di Header:</label>
            <input type="color" name="header_menu_text_color" class="form-control" value="<?= set_value('header_menu_text_color', $theme['header_menu_text_color'] ?? '#000000'); ?>">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="product_box_color">Warna Box Produk:</label>
            <input type="color" name="product_box_color" class="form-control" value="<?= set_value('product_box_color', $theme['product_box_color'] ?? '#ffffff'); ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="product_box_text_color">Warna Teks Box Produk:</label>
            <input type="color" name="product_box_text_color" class="form-control" value="<?= set_value('product_box_text_color', $theme['product_box_text_color'] ?? '#000000'); ?>">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="body_color">Warna Wrapper:</label>
            <input type="color" name="body_color" class="form-control" value="<?= set_value('body_color', $theme['body_color'] ?? '#ffffff'); ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="banner_text_color">Warna Teks Banner Home:</label>
            <input type="color" name="banner_text_color" class="form-control" value="<?= set_value('banner_text_color', $theme['banner_text_color'] ?? '#000000'); ?>">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="button_banner_color">Warna Background Tombol Banner:</label>
            <input type="color" name="button_banner_color" class="form-control" value="<?= set_value('button_banner_color', $theme['button_banner_color'] ?? '#000000'); ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="button_banner_text_color">Warna Teks Tombol Banner:</label>
            <input type="color" name="button_banner_text_color" class="form-control" value="<?= set_value('button_banner_text_color', $theme['button_banner_text_color'] ?? '#000000'); ?>">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="buy_button_color">Warna Tombol Beli:</label>
            <input type="color" name="buy_button_color" class="form-control" value="<?= set_value('buy_button_color', $theme['buy_button_color'] ?? '#ff0000'); ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="buy_button_text_color">Warna Teks Tombol Beli:</label>
            <input type="color" name="buy_button_text_color" class="form-control" value="<?= set_value('buy_button_text_color', $theme['buy_button_text_color'] ?? '#ff0000'); ?>">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="menu_mobile_color">Warna Background Menu Mobile:</label>
            <input type="color" name="menu_mobile_color" class="form-control" value="<?= set_value('menu_mobile_color', $theme['menu_mobile_color'] ?? '#ff0000'); ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="text_menu_mobile_color">Warna Teks Menu Mobile:</label>
            <input type="color" name="text_menu_mobile_color" class="form-control" value="<?= set_value('text_menu_mobile_color', $theme['text_menu_mobile_color'] ?? '#000000'); ?>">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="box_license">Warna Box Lisensi dan Guide:</label>
            <input type="color" name="box_license" class="form-control" value="<?= set_value('box_license', $theme['box_license'] ?? '#ff0000'); ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="desktop_sidebar_menu_color">Warna Background Menu di Sidebar:</label>
            <input type="color" name="desktop_sidebar_menu_color" class="form-control" value="<?= set_value('desktop_sidebar_menu_color', $theme['desktop_sidebar_menu_color'] ?? '#000000'); ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="desktop_sidebar_text_menu_color">Warna Teks Menu di Sidebar:</label>
            <input type="color" name="desktop_sidebar_text_menu_color" class="form-control" value="<?= set_value('desktop_sidebar_text_menu_color', $theme['desktop_sidebar_text_menu_color'] ?? '#000000'); ?>">
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary btn-block">Update Theme</button>
    
    <?= form_close(); ?>
</div>

<?php include(APPPATH .'views/layout/footer.php'); ?>
