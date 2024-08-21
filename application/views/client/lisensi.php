<?php
include(APPPATH .'views/layout/header-client.php');
?>
    <div class="layout_content_dekstop">
            <h2 style="text-align: center;margin-top: 1vw;">License</h2>
                <?php if($lisensi == null){
                }else{
                    foreach ($lisensi as $lisensi): 
                ?>
                <div class="card" style="margin: 3vw auto;background-color: <?php echo get_setting('box_license') ?>;">
                    <div class="card-content">
                        <h3 class="card-title"><?= $lisensi->title ?></h3>
                        <span class="card-text">
                            <?=  $lisensi->description ?>
                    </span>
                        <!-- <a href="#" class="card-button">Read More</a> -->
                    </div>
                </div>
                <?php endforeach; } ?>
    </div>
    <?php
            include(APPPATH .'views/layout/space_dekstop.php');
        ?>
<?php
include(APPPATH .'views/layout/footer-client.php');
?>