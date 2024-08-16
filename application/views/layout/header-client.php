<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo get_setting('meta_description'); ?>">
    <link rel="shortcut icon" href="<?php echo base_url('uploads/') . get_setting('favicon'); ?>" type="image/x-icon">
    <title><?php echo get_setting('title'); ?></title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/css/style.css')?>">
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="<?php echo base_url('uploads/') . get_setting('logo'); ?>" alt="">
                <span><?php echo get_setting('site_name'); ?></span>
            </div>
        <form action="<?= base_url('product/search'); ?>" class="search_box" method="get">
            <input type="text" name="query" placeholder="Cari..">
            <button type="submit" style="border: none; background: none;">
                <iconify-icon icon="iconamoon:search"></iconify-icon>
            </button>
        </form>
            <button class="hamburger">
                <iconify-icon icon="clarity:menu-line"></iconify-icon>
            </button>
            <a href="<?= base_url('guide') ?>" class="guide">
            <iconify-icon icon="tabler:album" width="48" height="48"></iconify-icon>
            </a>
        </div>
        <div class="sidebar">
            <?php
            $CI =& get_instance();
            $menu_items = $CI->Menu_model->get_menus();
            ?>
            <br>
             <div class="menu">
                    <a href="<?= base_url('guide') ?>">    
                        Guide
                    </a>
                </div>
            <?php foreach ($menu_items as $item): ?>
                <br>
                    <div class="menu">
                    <a href="<?php echo $item->link ?>">    
                        <?php echo $item->title; ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="layout_dashboard">
            <div class="fixed_menu">
                <a href="<?php echo site_url(''); ?>">
                    <div class="svg-container">
                        <svg viewBox="0 0 202.9 45.5" >
                          <clipPath id="menu" clipPathUnits="objectBoundingBox" transform="scale(0.0049285362247413 0.021978021978022)">
                            <path  d="M6.7,45.5c5.7,0.1,14.1-0.4,23.3-4c5.7-2.3,9.9-5,18.1-10.5c10.7-7.1,11.8-9.2,20.6-14.3c5-2.9,9.2-5.2,15.2-7
                              c7.1-2.1,13.3-2.3,17.6-2.1c4.2-0.2,10.5,0.1,17.6,2.1c6.1,1.8,10.2,4.1,15.2,7c8.8,5,9.9,7.1,20.6,14.3c8.3,5.5,12.4,8.2,18.1,10.5
                              c9.2,3.6,17.6,4.2,23.3,4H6.7z"/>
                          </clipPath>
                        </svg>
                    </div>
                    <div class="box_fixed_menu <?php echo ($active_page == 'home') ? 'active' : ''; ?>">
                    <iconify-icon icon="ci:house-01"></iconify-icon>
                        <h3>Home</h3>
                    </div>
                </a>
                <a href="<?php echo site_url('freebies'); ?>">
                    <div class="box_fixed_menu <?php echo ($active_page == 'freebies') ? 'active' : ''; ?>">
                    <iconify-icon icon="ci:cupcake"></iconify-icon>
                        <h3>Freebies</h3>
                    </div>
                </a>
                <a href="<?php echo site_url('catalog'); ?>">
                    <div class="box_fixed_menu <?php echo ($active_page == 'catalog') ? 'active' : ''; ?>">
                    <?php echo ($active_page == 'catalog') ? '<iconify-icon icon="ci:book-open"></iconify-icon>' : '<iconify-icon icon="ci:book"></iconify-icon>'; ?>
                        <h3>Catalog</h3>
                    </div>
                </a>
                <a href="<?php echo site_url('lisensi'); ?>">
                    <div class="box_fixed_menu <?php echo ($active_page == 'license') ? 'active' : ''; ?>">
                    <iconify-icon icon="ci:puzzle"></iconify-icon>
                        <h3>License</h3>
                    </div>
                </a>
                <a href="<?php echo site_url('contact'); ?>">
                    <div class="box_fixed_menu <?php echo ($active_page == 'contact') ? 'active' : ''; ?>">
                    <iconify-icon icon="ci:user-card-id"></iconify-icon>
                        <h3>Contact</h3>
                    </div>
                </a>
            </div>
            <div class="layout_dekstop">