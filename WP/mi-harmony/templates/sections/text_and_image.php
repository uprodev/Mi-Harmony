<?php

$title = get_sub_field('title');
$items = get_sub_field('items');

?>


<section class="text-img">
    <div class="content-width">
        <?php if($title):?>
            <h2><?= $title;?></h2>
        <?php endif;?>
        <?php if($items):
            foreach($items as $item):
                $pos = $item['position_text'];
                $bg = $item['background_colour'];
                $style = $item['image_style'];
                $img = $item['image'];
                $img1 = $item['image_1'];
                $img2 = $item['image_2'];
                $images = $item['6_images'];
                $titles = $item['title_item'];
            ?>
                <div class="item<?= $pos?' item-revers':'';?>"<?= $bg?' style="background:'.$bg.'"':'';?>>
                    <div class="text">
                        <?= $titles?'<h3>'.$titles.'</h3>':'';?>

                        <?php if($style == '1 Image'):?>
                            <figure>
                                <img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>">
                            </figure>
                        <?php elseif($style == 'No Border'):?>
                            <figure class="no-border">
                                <img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>">
                            </figure>
                        <?php elseif($style == '6 Images'):?>
                            <figure class="img-6x">
                                <?php foreach( $images as $im ): ?>
                                    <img src="<?= $im['url'];?>" alt="<?= $im['alt'];?>">
                                <?php endforeach;?>
                            </figure>
                        <?php elseif($style == '2 Images'):?>
                            <figure class="img-2x">
                                <img src="<?= $img1['url'];?>" alt="<?= $img1['alt'];?>">
                                <img src="<?= $img2['url'];?>" alt="<?= $img2['alt'];?>">
                            </figure>
                        <?php endif;?>
                        <?= $item['text'];?>
                    </div>
                    <?php if($style == '1 Image'):?>
                        <figure>
                            <img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>">
                        </figure>
                    <?php elseif($style == 'No Border'):?>
                        <figure class="no-border">
                            <img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>">
                        </figure>
                    <?php elseif($style == '6 Images'):?>
                        <figure class="img-6x">
                            <?php foreach( $images as $im ): ?>
                                <img src="<?= $im['url'];?>" alt="<?= $im['alt'];?>">
                            <?php endforeach;?>
                        </figure>
                    <?php elseif($style == '2 Images'):?>
                        <figure class="img-2x">
                            <img src="<?= $img1['url'];?>" alt="<?= $img1['alt'];?>">
                            <img src="<?= $img2['url'];?>" alt="<?= $img2['alt'];?>">
                        </figure>
                    <?php endif;?>
                </div>
            <?php endforeach;
        endif;?>

    </div>
</section>