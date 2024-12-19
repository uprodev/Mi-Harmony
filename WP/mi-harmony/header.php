<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo wp_get_document_title(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <?php wp_head();?>

</head>

<?php

$logo = get_field('logo', 'options');

?>

<body <?php body_class() ?>>
<header>
    <div class="top-line">
        <div class="content-width">
            <div class="logo-wrap">
                <a href="<?= get_home_url();?>">
                    <?php if($logo):?>
                        <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>" />
                    <?php endif;?>
                </a>
            </div>
        </div>
    </div>
</header>

<main>