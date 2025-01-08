<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$form = get_sub_field('form');
$image = get_sub_field('image');

?>

<section class="pre-footer">
    <?php if($image):?>
        <div class="bg">
            <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
        </div>
    <?php endif;?>
    <div class="content-width">
        <div class="content">
            <?php if($title):?>
                <h2><?= $title;?></h2>
            <?php endif;?>
            <?php if($image):?>
                <figure>
                    <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
                </figure>
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