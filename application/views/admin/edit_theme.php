<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Theme</title>
</head>
<body>
    <h1>Edit Theme</h1>
    
    <!-- Menampilkan error validasi jika ada -->
    <?= validation_errors(); ?>
    
    <!-- Form untuk mengedit tema yang sudah ada -->
    <?= form_open('admin/edit_theme/'.$theme['id']); ?>
   
    <label for="header_color">Theme Name:</label>
    <input type="text" name="theme_name" value="<?= set_value('theme_name', $theme['theme_name']); ?>"><br><br>

    <label for="header_color">Header Color:</label>
    <input type="color" name="header_color" value="<?= set_value('header_color', $theme['header_color']); ?>"><br><br>
    
    <label for="navbar_color">Navbar Color:</label>
    <input type="color" name="navbar_color" value="<?= set_value('navbar_color', $theme['navbar_color']); ?>"><br><br>
    
    <label for="text_color">Text Color:</label>
    <input type="color" name="text_color" value="<?= set_value('text_color', $theme['text_color']); ?>"><br><br>
    
    <label for="header_menu_text_color">Header Menu Text Color:</label>
    <input type="color" name="header_menu_text_color" value="<?= set_value('header_menu_text_color', $theme['header_menu_text_color']); ?>"><br><br>
    
    <label for="product_box_text_color">Product Box Text Color:</label>
    <input type="color" name="product_box_text_color" value="<?= set_value('product_box_text_color', $theme['product_box_text_color']); ?>"><br><br>
    
    <label for="banner_text_color">Banner Text Color:</label>
    <input type="color" name="banner_text_color" value="<?= set_value('banner_text_color', $theme['banner_text_color']); ?>"><br><br>
    
    <label for="body_color">Body Color:</label>
    <input type="color" name="body_color" value="<?= set_value('body_color', $theme['body_color']); ?>"><br><br>
    
    <label for="product_box_color">Product Box Color:</label>
    <input type="color" name="product_box_color" value="<?= set_value('product_box_color', $theme['product_box_color']); ?>"><br><br>
    
    <label for="buy_button_color">Buy Button Color:</label>
    <input type="color" name="buy_button_color" value="<?= set_value('buy_button_color', $theme['buy_button_color']); ?>"><br><br>
    
    <label for="desktop_sidebar_menu_color">Desktop Sidebar Menu Color:</label>
    <input type="color" name="desktop_sidebar_menu_color" value="<?= set_value('desktop_sidebar_menu_color', $theme['desktop_sidebar_menu_color']); ?>"><br><br>
    
    <button type="submit">Update Theme</button>
    
    </form>
</body>
</html>
