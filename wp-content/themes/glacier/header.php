<!DOCTYPE html>
<html lang="ua">

<head>
<!--    <title>Апартаменти у підніжжя гір на березі озера</title>-->
<!--    <meta name="description" content="Апартаменти  у підніжжя гір на березі озера">-->
    <?php wp_head(); ?>
<!--    <link rel="stylesheet" href="libs/swiper/swiper.css">-->
<!--    <link rel="stylesheet" href="css/style.css">-->
<!--    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>-->
<!--    <link rel="shortcut icon" href="img/favicone/favicon.ico">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
          rel="stylesheet">
</head>

<body id="main-body">
<div class="body-wrapper">
    <header class="header js-header">
        <div class="header__top h-top js-h-top">
            <div class="container">
                <div class="header__row">
                    <div class="h-top__left">
                        <img src="<?php echo get_field('left_logo', 'options')['url'] ?>" alt="<?php echo get_field('left_logo', 'options')['alt'] ?>">
                    </div>
                    <div class="h-top__center">
                        <a href="<?php echo get_home_url() ?>">
                            <img src="<?php echo get_field('center_logo', 'options')['url'] ?>" alt="<?php echo get_field('center_logo', 'options')['alt'] ?>">
                        </a>
                    </div>
                    <div class="h-top__right">
                        <ul class="h-top__social list-sltyle-none">
                            <li>
                                <a href="tel:<?php echo str_replace(' ', '', get_field('phone', 'options')) ?>">
                                <span>
                                    <img src="<?php echo get_template_directory_uri() ?>/img/svg_icon/phone_icon_normal.svg">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/svg_icon/phone_icon_hover.svg">
                                </span>
                                    <span><?php echo get_field('phone', 'options') ?></span>
                                </a>
                            </li>
                            <?php
                            $social = get_field('social_repeater', 'options');
                            foreach ($social as $item){
                                ?>
                                <li>
                                    <a href="<?php echo $item['link'] ?>">
                                    <span>
                                        <img src="<?php echo $item['icon']['url'] ?>">
                                        <img src="<?php echo $item['hover_icon']['url'] ?>">
                                    </span>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <button class="btn-burger js-burger">
                        <span>
                        </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom h-bot js-h-bot">
            <div class="container">
                <div class="h-bot__row">
                    <div class="hed-mob-menu">
                        <div class="wr-mob-tel">
                            <a href="tel:<?php echo str_replace(' ', '', get_field('phone', 'options')) ?>" class="mob-tel"><?php echo get_field('phone', 'options') ?></a>
                        </div>
                    </div>
                    <nav class="main-menu m-menu">
                        <ul class="m-menu__list list-sltyle-none js-main-menu">

                            <?php
                            $menu_items = wp_get_nav_menu_items('Header menu');
                            if (is_array($menu_items)) {
                                $index = 1;
                                foreach ($menu_items as $menu_item) {
                                    if ($menu_item->menu_item_parent == '0') {
                                        ?>
                                        <li>
                                            <a href="<?php echo $menu_item->url ?>"><span><?php echo $menu_item->title ?></span></a>
                                        </li>
                                        <?php
                                        if (count($menu_items) == $index)
                                            continue;
                                        ?>
                                        <li>
                                            <span class="icon-menu"></span>
                                        </li>
                                        <?php
                                    }
                                    $index++;
                                }
                            }
                            ?>

                        </ul>
                    </nav>
                    <div class="bot-mob-menu">
                        <ul class="h-top__social list-sltyle-none">
                            <li>
                                <a href="tel:<?php echo str_replace(' ', '', get_field('phone', 'options')) ?>">
                                <span>
                                    <img src="<?php echo get_template_directory_uri() ?>/img/svg_icon/phone_icon_hover.svg">
                                </span>
                                </a>
                            </li>

                            <?php
                            $social = get_field('social_repeater', 'options');
                            foreach ($social as $item){
                                ?>
                                <li>
                                    <a href="<?php echo $item['link'] ?>">
                                    <span>
                                        <img src="<?php echo $item['hover_icon']['url'] ?>">
                                    </span>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>