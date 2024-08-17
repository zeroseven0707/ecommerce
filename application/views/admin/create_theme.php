<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Theme</title>
</head>
<body>
    <h1>Create New Theme</h1>
    
    <!-- Menampilkan error validasi jika ada -->
    <?= validation_errors(); ?>
    
    <!-- Form untuk membuat tema baru -->
    <?= form_open('admin/create_theme'); ?>
    <label for="name">Theme Name:</label>
    <input type="text" name="theme_name" value=""><br><br>

    <label for="header_color">Header Color:</label>
    <input type="color" name="header_color" value="<?= set_value('header_color', '#ffffff'); ?>"><br><br>
    
    <label for="navbar_color">Navbar Color:</label>
    <input type="color" name="navbar_color" value="<?= set_value('navbar_color', '#ffffff'); ?>"><br><br>
    
    <label for="text_color">Text Color:</label>
    <input type="color" name="text_color" value="<?= set_value('text_color', '#000000'); ?>"><br><br>
    
    <label for="header_menu_text_color">Header Menu Text Color:</label>
    <input type="color" name="header_menu_text_color" value="<?= set_value('header_menu_text_color', '#000000'); ?>"><br><br>
    
    <label for="product_box_text_color">Product Box Text Color:</label>
    <input type="color" name="product_box_text_color" value="<?= set_value('product_box_text_color', '#000000'); ?>"><br><br>
    
    <label for="banner_text_color">Banner Text Color:</label>
    <input type="color" name="banner_text_color" value="<?= set_value('banner_text_color', '#000000'); ?>"><br><br>
    
    <label for="body_color">Body Color:</label>
    <input type="color" name="body_color" value="<?= set_value('body_color', '#ffffff'); ?>"><br><br>
    
    <label for="product_box_color">Product Box Color:</label>
    <input type="color" name="product_box_color" value="<?= set_value('product_box_color', '#ffffff'); ?>"><br><br>
    
    <label for="buy_button_color">Buy Button Color:</label>
    <input type="color" name="buy_button_color" value="<?= set_value('buy_button_color', '#ff0000'); ?>"><br><br>
    
    <label for="desktop_sidebar_menu_color">Desktop Sidebar Menu Color:</label>
    <input type="color" name="desktop_sidebar_menu_color" value="<?= set_value('desktop_sidebar_menu_color', '#000000'); ?>"><br><br>
    
    <button type="submit">Create Theme</button>
    
    </form>
</body>
</html>
