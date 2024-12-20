<?php

$title = get_sub_field('title');
$text = get_sub_field('text');

?>

<section class="thank">
    <div class="bg"></div>
    <div class="content-width">
        <?php if($title):?>
            <h1><?= $title;?></h1>
        <?php endif;?>
        <?php if($text):?>
            <div class="content">
                <?= $text;?>
            </div>
        <?php endif;?>
    </div>
</section>
