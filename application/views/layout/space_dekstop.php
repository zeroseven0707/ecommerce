<div class="layout_sidebar_dekstop">
    <div class="space_layout_dekstop">
        <?php 
            $CI =& get_instance();
            $widgets_mobile = $CI->Widget_model->mobile();
            echo $widgets_mobile->value;
        ?> 
    </div>
    <?php
        $CI =& get_instance();
        $menu_items = $CI->Menu_model->get_menus();
        ?>
        <?php foreach ($menu_items as $item): ?>
            <div class="space_side"><a href="<?= $item->link ?>" style="width:100%; color: white;"><?= $item->title ?></a></div>
         <?php endforeach; ?>
    <div class="space_layout_dekstop">
         <?php 
            $CI =& get_instance();
            $widgets_mobile2 = $CI->Widget_model->mobile2();
            echo $widgets_mobile2->value;
         ?> 
    </div>
    <ul>
    <?php
        $CI =& get_instance();
        $shortcut_items = $CI->Shortcut_model->get_shortcuts();
        ?>
        <?php foreach ($shortcut_items as $item): ?>
            <li><a href="<?= $item->link ?>"><?= $item->title ?></a></li>
        <?php endforeach; ?>
        <!-- <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">About</a></li> -->
    </ul>
    <span><?php echo get_setting('copyright'); ?></span>
    <!-- <span>Copyright ©️ Produk Digital 2024</span> -->
</div>