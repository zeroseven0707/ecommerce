</div>
</div>
</div>
</div>
<?php if(get_setting('footer') == true){ ?>
<div class="container-footer">
<div class="footer-two">
    <div class="logo-footer">
        <div>
            <img src="<?php echo base_url('uploads/') . get_setting('image_footer'); ?>" alt="">
        </div>
        <div>
            <p class="cpy"><?= get_setting('copyright') ?></p>
        </div>
    </div>
    <div>
        <p style="padding-left: 1.5vw;">Informasi</p>
        <ul style="padding-left: 1.5vw;">
            <?php
        $CI =& get_instance();
        $shortcut_items = $CI->Shortcut_model->get_shortcuts();
        ?>
        <?php foreach ($shortcut_items as $item): ?>
            <li class="dot-li"><a href="<?= $item->link ?>"><?= $item->title ?></a></li>
        <?php endforeach; ?>
        </ul>
    </div>
    <div>
        <p>Social Media</p>
        <ul>
            <?php
        $CI =& get_instance();
        $sosmeds = $CI->Sosmed_model->get_sosmed();
        ?>
        <?php foreach ($sosmeds as $sosmed): ?>
            <?php if($sosmed->link == ""){}else{ ?>
            <li><a href="<?= $sosmed->link ?>" class="dot-sosmed"></iconify-icon><?= $sosmed->icon ?>&nbsp; <?= $sosmed->name ?></a></li>
        <?php
        } 
        endforeach; ?>
        </ul>
    </div>
    <div>
        <p class="subscribe">Mari berlangganan informasi situs ini </p>
        <form action="<?php echo site_url('trafficts'); ?>" method="post">
            <div>
                <input type="text" placeholder="Nama" name="name">
            </div>
            <div>
                <input type="text" placeholder="Email" name="email">
            </div>
            <button type="submit">Berlangganan</button>
        </form>
    </div>
    </div>
</div>
<?php } ?>
    <script>
        document.querySelector('.hamburger').addEventListener('click', function() {
            const sidebar = document.querySelector('.sidebar');
            const icon = document.querySelector('.hamburger iconify-icon');

            if (sidebar.classList.contains('show')) {
                sidebar.classList.remove('show');
                setTimeout(() => {
                    sidebar.style.display = 'none';
                }, 300); // Match this duration with the CSS transition duration
                icon.setAttribute('icon', 'clarity:menu-line');
            } else {
                sidebar.style.display = 'block';
                setTimeout(() => {
                    sidebar.classList.add('show');
                }, 10); // Small delay to allow the display property to take effect
                icon.setAttribute('icon', 'clarity:close-line');
            }
        });
    </script>
</body>
</html>