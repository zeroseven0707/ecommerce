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
    <style>
        *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Roboto", sans-serif;
        color: <?= get_setting('text_color') ?>;
    }
        .layout_dashboard{
            background-color: <?= get_setting('navbar_color') ?>;
        }
        /* Header */
        .header{
            display: grid;
            grid-template-columns: 27% 46% 27%;
            align-items: center;
            padding: .2vw 2vw;
            justify-items:end;
            background-color: <?= get_setting('header_color') ?>;
            width: 100%;
        }
        .fixed_menu{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2.4vw;
    padding-bottom: 0;
}
        .box_fixed_menu h3{
            color: <?= get_setting('header_menu_text_color') ?>;
            font-weight: 400;
            font-size: 2vw;
        }
        /* Menu Sidebar Dekstop */
        .space_side {
            font-size: 1.4vw;
            background-color: <?= get_setting('desktop_sidebar_menu_color') ?>;
            width: 100%;
            height: 2.8vw;
            margin-bottom: .5vw;
            color: <?= get_setting('desktop_sidebar_text_menu_color') ?>;
            display: flex;
            align-items: center; 
            justify-content: center;
            border-radius: 7vw;
        }

        /* Button Banner */
        .banner button{
            font-size: 1.4vw;
            border: none;
            outline: none;
            padding: .7vw 1.6vw;
            border-radius: 100vw;
            background-color: <?= get_setting('button_banner_color') ?>;
            color: <?= get_setting('button_banner_text_color') ?>;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            gap: .7vw;
            cursor: pointer;
        }
        .banner button iconify-icon{
            font-size: 1.3vw;
            color: <?= get_setting('button_banner_text_color') ?>;
        }
        /* Box Produk */
        .box_grid{
            padding: .4vw;
            background-color: <?= get_setting('product_box_color') ?>;
            border-radius: 1vw;
        }
        .price_grid span{
            color: white;
            font-size: 1.3vw;
            font-weight: bold;
        }
        .price_grid span p{
            color: white;
        }
            .banner h1{
            margin-top:0;
            z-index: 1;
            color: <?= get_setting('banner_text_color') ?>;
            font-family: "Lexend Deca", sans-serif;
            font-size: 3.2vw;
            font-weight: 640;
            margin-bottom: 2vw;
        }
        /* Lihat Selengkapnya */
        .see_other{
            margin-top: 1.4vw;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 1vw;
            font-size: 1.3vw;
            font-weight: 400;
            color: #0866ff;
        }
        /* buy button in detail produk */
        .buynow{
            cursor: pointer;
            width: 45%;
            margin-top: 1.5vw;
            border-radius:3vw;
            height: 3.3vw;
            font-size: 1.6vw;
            color: white;
            border: none;
            background-color: <?= get_setting('buy_button_color') ?>;
        }
        .content_grid h4{
            background: none;
                text-align: start;
                color: <?= get_setting('product_box_text_color') ?>;
                font-size: 1.3vw;
                font-weight: 400;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 2;
                overflow: hidden;
                text-overflow: ellipsis;
            }
        /* buy button index */
        .content_grid button{
            font-size: 1.3vw;
            background-color: <?= get_setting('buy_button_color') ?>;
            border: none;
            outline: none;
            color: white;
            cursor: pointer;
            padding: .4vw 1.7vw;
            width: max-content;
            border-radius: 100vw;
        }
        .card {
        width: 90%;
        border-radius: 10px;
        box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.4);
        overflow: hidden;
        transition: transform 0.3s ease;
        background-color: white;
        margin: 20px;
        padding: 5vw;
    }
    .guide{
    display: block;
    color: <?= get_setting('header_menu_text_color')?>;
    width: max-content;
    background-color: transparent;
    outline: none;
    font-size: 1.3vw;
    border: none;
    text-align: end;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    
}
        .layout_content_dekstop{
            background-color: <?= get_setting('body_color') ?>;
            margin: 1vw;
            margin-top: .10vw;
            border-radius: .7vw;
            overflow-y: scroll;
            height: <?php echo (get_setting('footer') == true) ? '64vh' : '87vh'; ?>;
        }
    /* Mobile */
    @media (max-width:768px) {
        .header{
        display: grid;
        grid-template-columns: 11% 78% 11%;
        align-items: center;
        padding: 2vw 2vw;
        justify-items:end;
        width: 100%;
    }
        .sidebar {
            display: none;
            right: 0;
            z-index: 3;
            background-color: #fff;
            width: 60%;
            position: absolute;
            height: 100%;
            border: 1px solid <?= get_setting('header_color') ?>;
            transition: transform 0.3s ease;
        }
            .content_grid h4{
            text-align: start;
            font-size: 3.2vw;
            font-weight: 400;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .sidebar .menu{
            width: 90%;
            height: 12vw;
            display: flex;
            align-items: center;
            border-radius: 5px;
            margin: auto;
            color: <?= get_setting('desktop_sidebar_text_menu_color') ?>;
            background-color: <?= get_setting('header_color') ?>;
        }
        .banner button{
            font-size: 3.7vw;
            border: none;
            outline: none;
            padding: 1.9vw 4.5vw;
            border-radius: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            gap: 2.2vw;
        }
        .content_grid button{
                font-size: 3.2vw;
                background-color: #00a349;
                border: none;
                outline: none;
                color: white;
                padding: .6vw 2.7vw;
                width: max-content;
                border-radius: 100vw;
            }
        .see_other{
            margin-top: 4vw;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 1vw;
            font-size: 4.3vw;
            font-weight: 400;
            color: #0866ff;
        }
        .lisensi{
            border-radius: 5vw;
            width: 100%;
            height: 8vw;
            text-align: left;
            padding: 1vw;
            background-color: <?= get_setting('header_color') ?>;
        }
        .price_grid span{
            font-size: 3vw;
        }   
        .banner h1{
        margin-top: -4.8vw;
        z-index: 1;
        font-family: "Lexend Deca", sans-serif;
        font-size: 6vw;
        margin-bottom: 6vw;
    }
    .buynow{
        cursor: pointer;
        width: 100%;
        border-radius:3vw;
        margin-top: 7vw;
        height: 12vw;
        font-size: 4.8vw;
        color: white;
        border: none;
    }
    .fixed_menu{
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        background-color: <?= get_setting('menu_mobile_color') ?>;
        z-index: 10;
        justify-items: center;
        padding: 3.6vw 8vw;
        padding-top: 0;
        align-items: flex-end;
    }
    .box_fixed_menu h3{
        color: <?= get_setting('text_menu_mobile_color') ?> ;
        font-weight: 400;
        font-size: 3vw;
    }
    .box_fixed_menu iconify-icon{
        font-size: 6vw;
        display: block;
        color: white;
    }
    .box_fixed_menu h3{
        color: <?= get_setting('text_menu_mobile_color') ?>;
        font-weight: 400;
        font-size: 3vw;
    }
    .active h3{
        color: <?= get_setting('menu_mobile_color') ?>;
    }
    .active iconify-icon{
        color: <?= get_setting('menu_mobile_color') ?>;
        font-size: 4.6vw;
    }
    .box_fixed_menu{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        position: relative;
        gap: 1vw;
    }
    .active{
        width: 14vw;
        height: 14vw;
        border-radius: 100vw;
        content: '';
        transform: scale(1.4);
        gap: .4vw;
        margin-top: -6vw;
        margin-bottom: 1vw;
        z-index: 3;
    }
    .active::before{
        left: -6.6vw;
        top: -2.8vw;
        width: 27vw;
        height: 5.8vw;
        position: absolute;
        clip-path: url(#menu);
        will-change: transform;
        background-color:<?= get_setting('menu_mobile_color') ?> ;
        transition: transform var(--timeOut , var(--duration));
        content: '';
        z-index: -1;
    }
    .active::after{
        width: 12.5vw;
        height: 12.5vw;
        position: absolute;
        background-color: <?= get_setting('text_menu_mobile_color') ?> ;
        border-radius: 100vw;
        content: '';
        z-index: -1;
    }
    .guide{
        display: none;
    }
    .footer-two{
        display: none;
    }
    }

  
    </style>
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
            <iconify-icon icon="tabler:album" width="2.2vw" style="color: white;" height="2.2vw"></iconify-icon> Guide
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
                    <iconify-icon icon="tabler:album" width="15" style="color: white;" height="15"></iconify-icon>   Guide
                    </a>
                </div>
            <?php foreach ($menu_items as $item): ?>
                <br>
                    <div class="menu">
                    <a href="<?php echo $item->link ?>">    
                        <img src="<?= base_url('uploads/icons/'.$item->icon) ?>" width="15" alt=""> &nbsp;  <?= $item->title; ?>
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
                <a href="<?php echo site_url('license'); ?>">
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