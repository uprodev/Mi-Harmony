<?php

$logo = get_field('logo', 'options');

?>

</main>
<footer>
    <div class="content-width">
        <nav class="footer-menu">
            <?php wp_nav_menu([
                'theme_location' => 'footer-menu',
                'container' => false,
                'menu_class' => '',
            ]);?>
        </nav>
        <div class="logo-wrap">
            <a href="<?= get_home_url();?>">
                <?php if($logo):?>
                    <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>" />
                <?php endif;?>
            </a>
        </div>
    </div>
</footer>
  <?php wp_footer(); ?>
	</body>
</html>