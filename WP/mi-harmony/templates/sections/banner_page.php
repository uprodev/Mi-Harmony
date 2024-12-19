<?php

$title = get_sub_field('title');
$text = get_sub_field('text');
$form = get_sub_field('form');
$image = get_sub_field('image');

?>

<section class="page-banner">
    <div class="content-width">
        <div class="text">
            <?php if($title):?>
                <h1><?= $title;?>></h1>
            <?php endif;?>
            <div class="wrap">
                <?= $text;?>
                <?php if($form){
                    echo do_shortcode('[contact-form-7 id="' . $form . '"]');
                }?>
            </div>

        </div>
        <?php if($image):?>
            <figure>
                <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
            </figure>
        <?php endif;?>
    </div>
</section>
