<?php
include(APPPATH .'views/layout/header-client.php');
?>
    <div class="layout_content_dekstop">
            <h2 style="text-align: center; margin-top: 1vw;">Guide</h2>
                <?php if($guide == null){
                }else{
                    foreach ($guide as $guide): 
                ?>
                <div class="card" style="margin: 3vw auto; background-color: <?= get_setting('box_license') ?>;">
                    <div class="card-content">
                        <h3 class="card-title"><?= $guide->title ?></h3>
                        <p class="card-text"><?=  $guide->description ?></p>
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