<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$form = get_sub_field('form');
$image = get_sub_field('image');
$mob_image = get_sub_field('mob_image');

?>

<section class="pre-footer">
    <?php if($image):?>
        <div class="bg">
            <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
            <?php if($mob_image):?>
                <img src="<?= $mob_image['url'];?>" alt="<?= $mob_image['alt'];?>" class="mob">
            <?php endif;?>
        </div>
    <?php endif;?>
    <div class="content-width">
        <div class="content">
            <?php if($title):?>
                <h2><?= $title;?></h2>
            <?php endif;?>

            <?php if($subtitle):?>
                <h6><?= $subtitle;?></h6>
            <?php endif;?>
            <?php if($form){
                echo do_shortcode('[contact-form-7 id="' . $form . '"]');
            }?>
        </div>
    </div>
</section>