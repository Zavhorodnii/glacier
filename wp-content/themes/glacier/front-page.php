<?php
get_header();
?>

<section class="s-section main-section">
    <div class="main-section__container">
        <div class="main-section__video-content">
            <video id="ca538990-a78a-dea5-d2ba-ffd8827e1d75-video" autoplay="" loop=""
                   style="background-image:url(<?php echo get_field('video_image')['url'] ?>)" muted="" playsinline=""
                   data-wf-ignore="true" data-object-fit="cover">
                <source src="<?php echo get_field('file_video')['url'] ?>" data-wf-ignore="true">
                <source src="<?php echo get_field('file_video_2')['url'] ?>" data-wf-ignore="true">
            </video>
        </div>
        <div class="main-section__content">
            <div class="container-pad-left">
                <h1 data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight"><?php echo get_field('main_title') ?></h1>
            </div>
        </div>
        <div class="main-section__wr-scrolling">
            <a href="#apartament" class="btn-scrolling-bot">
                <svg class="svg-icon">
                    <use xlink:href="<?php echo get_template_directory_uri() ?>/img/svg_sprite/sprite.svg#icon_scrolling"></use>
                </svg>
            </a>
        </div>
        <div class="btn-mob-tel-fix">
            <a href="tel:<?php echo str_replace(' ', '', get_field('phone', 'options')) ?>" class="btn-phone-f">
                <img src="<?php echo get_template_directory_uri()  ?>/img/svg_icon/phone_icon_hover.svg" alt="Позвонить">
            </a>
        </div>
    </div>
</section>
<div class="s-title js-sect" id="apartament">
    <?php
    $block_2 = get_field('block_2');
    ?>
    <div class="container">
        <h2 data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight"><?php echo $block_2['title'] ?></h2>
    </div>
</div>

<?php
$options_repeater_block = get_field('options_repeater_block');
if (is_array($options_repeater_block) && count($options_repeater_block) > 0){
    foreach ($options_repeater_block as $block){
        ?>
        <section class="s-section apartament-section js-get-form-info s-apar <?php echo $block['reverse_block'] ? 'reverse' : '' ?> ">
            <div class="apartament-section__row">
                <div class="apartament-section__left">
                    <div class="apartament-section__content c-apart ">
                        <div class="c-apart__title js-get-title" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                            <h3><?php echo $block['title'] ?></h3>
                        </div>
                        <div class="c-apart__parameters">
                            <ul class="c-apart__list" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                                <?php
                                if (is_array($block['options_repeater']) && count($block['options_repeater']) > 0){
                                    foreach ($block['options_repeater'] as $option){
                                        ?>
                                        <li>
                                            <span><?php echo $option['title'] ?></span>
                                            <span><?php echo $option['value'] ?></span>
                                        </li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                        <?php
                        if (!empty($block['description'])){
                            ?>
                            <div class="c-apart__description" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                                <?php echo $block['description'] ?>
                            </div>
                            <?php
                        }
                        if (!empty($block['button']['title'])){
                            ?>
                            <div class="c-apart__wr-link" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                                <a href="<?php echo $block['button']['link'] ?>" class="btn-type-one"><span><?php echo $block['button']['title'] ?></span></a>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="apartament-section__right">
                    <div class="apartament-form">
                        <div class="apartament-form__wr">
                            <form>
                                <div class="form__row">
                                    <div class="item-in">
                                        <input type="text" class="in js-get-name" placeholder="Ім'я" required>
                                    </div>
                                    <div class="item-in">
                                        <input type="text" class="in js-get-phone js-phone-mask" name="phone" placeholder="Телефон">
                                    </div>
                                    <div class="item-in">
                                        <input type="email" class="in js-get-email" placeholder="E-mail" required>
                                    </div>
                                    <div class="item-in item-in_btn">
                                        <button class="btn-from js-button-click"><span>Зв'язатись з нами</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="с-visual">
                        <div class="с-visual__img">
                            <img src="<?php echo $block['image']['url'] ?>" alt="<?php echo $block['image']['alt'] ?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}
?>

<div class="s-title s-title_grey js-sect" id="buy_commercial_real_estate">
    <div class="container">
        <h2 data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight"><?php echo get_field('block_4')['title'] ?></h2>
    </div>
</div>
<div class="s-full">
    <?php
    $block_5 = get_field('block_5');
    ?>
    <div class="s-full__content">
        <img src="<?php echo $block_5['image']['url'] ?>" class="s-full__img imge" alt="<?php echo $block_5['image']['alt'] ?>">
        <div class="s-full__wr">
            <div class="s-full__con">
                <?php echo str_replace('<p>', '<p data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">', $block_5['description'])  ?>
            </div>
        </div>
        <div class="s-full__form apartament-form">
            <div class="apartament-form__wr">
                <form>
                    <div class="form__row js-get-form-info">
                        <div class="item-in">
                            <input type="text" class="in js-get-name" placeholder="Ім'я" required>
                        </div>
                        <div class="item-in">
                            <input type="text" class="in js-get-phone js-phone-mask" name="phone" placeholder="Телефон">
                        </div>
                        <div class="item-in">
                            <input type="email" class="in js-get-email" placeholder="E-mail" required>
                        </div>
                        <div class="item-in item-in_btn">
                            <button class="btn-from js-button-click"><span>Зв'язатись з нами</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<section class="s-section s-about js-sect" id="about">
    <?php
    $block_6 = get_field('block_6');
    ?>
    <div class="s-about__row">
        <div class="s-about__left">
            <div class="about-c">
                <div class="about-c__logo">
                    <img src="<?php echo $block_6['logo']['url'] ?>" alt="<?php echo $block_6['logo']['alt'] ?>">
                </div>
                <div class="about-c__imgs">
                    <div class="about-c__img-one">
                        <img src="<?php echo $block_6['image_1']['url'] ?>" alt="<?php echo $block_6['image_1']['alt'] ?>">
                    </div>
                    <div class="about-c__img-two">
                        <img src="<?php echo $block_6['image_2']['url'] ?>" alt="<?php echo $block_6['image_2']['alt'] ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="s-about__right">
            <div class="s-about__wrap">
                <div class="title-site-h2" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                    <h2><?php echo $block_6['title'] ?></h2>
                </div>
                <div class="s-about__content" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                    <h2><?php echo $block_6['title_2'] ?></h2>
                    <div class="s-about__description" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                        <?php echo $block_6['description'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="s-projects">
    <?php
    $block_7 = get_field('block_7');
    ?>
    <div class="containers">
        <div class="s-projects__row" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
            <div class="projects">
               <?php
               if (is_array($block_7['projects_list']) && count($block_7['projects_list']) > 0){
                   foreach ($block_7['projects_list'] as $item){
                       ?>
                       <div class="project-item">
                           <div class="project-item__top">
                               <a href="<?php echo get_post_permalink($item->ID) ?>">
                                   <img src="<?php echo get_field('project_image', $item->ID)['url'] ?>"
                                        alt="<?php echo get_field('project_image', $item->ID)['alt'] ?>">
                               </a>
                           </div>
                           <div class="project-item__bot">
                               <a href="<?php echo get_post_permalink($item->ID) ?>" class="project-item__link"><?php echo $item->post_title ?></a>
                           </div>
                       </div>
                       <?php
                   }
               }
               ?>
            </div>
            <div class="projects__wr-btn">
                <div class="wr-btn">
                    <a href="<?php echo $block_7['button']['link'] ?>" class="btn-type-one btn-type-three"><span><?php echo $block_7['button']['title'] ?></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$block_8 = get_field('block_8');
if (!$block_8['hide_block']){
    ?>
    <div class="s-document">
        <div class="s-document__row">
            <div class="s-document__left">
                <div class="s-document__content" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                    <div class="title-d"><?php echo $block_8['title'] ?></div>
                    <div class="s-document__description">
                        <?php echo $block_8['description'] ?>
                    </div>
                    <div class="s-document__wr-btn">
                        <div class="wr-btn">
                            <a href="<?php echo $block_8['button']['link'] ?>" class="btn-type-one btn-type-three"><span><?php echo $block_8['button']['title'] ?></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="s-document__right">
                <div class="s-document__img" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                    <img src="<?php echo $block_8['image_1']['url'] ?>" alt="<?php echo $block_8['image_1']['alt'] ?>">
                </div>
            </div>
        </div>
        <div class="s-document__bot">
            <div class="wr-btn">
                <a href="<?php echo $block_8['button']['link'] ?>" class="btn-type-one btn-type-three"><span><?php echo $block_8['button']['title'] ?></span></a>
            </div>
        </div>
    </div>
    <?php
}
$block_9 = get_field('block_9');
?>

<div class="s-title js-sect" id="complex">
    <div class="container">
        <h2 data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight"><?php echo $block_9['title'] ?></h2>
    </div>
</div>
<div class="s-complex">
    <div class="container-leg s-complex_cont">
        <div class="s-complex__row">
            <div class="s-complex__img">
                <img src="<?php echo $block_9['image']['url'] ?>" alt="<?php echo $block_9['image']['alt'] ?>">
            </div>
            <div class="s-complex__content">
                <div class="title-d" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight"><?php echo $block_9['title_description'] ?></div>
                <ol class="list-numbers" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                    <?php echo $block_9['description'] ?>
                </ol>
                <div class="s-complex__wr-btn" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                    <div class="wr-btn">
                        <a href="<?php echo $block_9['button']['link'] ?>" class="btn-type-one btn-type-three"><span><?php echo $block_9['button']['title'] ?></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="s-document__bot">
            <div class="wr-btn">
                <a href="<?php echo $block_9['button']['link'] ?>" class="btn-type-one btn-type-three"><span><?php echo $block_9['button']['title'] ?></span></a>
            </div>
        </div>
    </div>
</div>
<div class="s-video js-sect" id="s_video">
    <?php
    $block_10 = get_field('block_10');
    ?>
    <div class="s-video__row">
        <div class="s-video__left">
            <div class="s-document__content" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                <div class="title-d"><?php echo $block_10['title'] ?></div>
                <div class="s-document__description">
                    <?php echo $block_10['description'] ?>
                </div>
            </div>
        </div>
        <div class="s-video__right">
            <div class="s-video__wr">
                <iframe width="560" height="315" src="<?php echo $block_10['link'] ?>"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div class="s-baner s-baner_grey">
    <?php
    $block_11 = get_field('block_11');
    ?>
    <div class="containers">
        <div class="s-baner__row">
            <div class="s-baner__logo">
                <img src="<?php echo $block_11['logo']['url'] ?>" alt="<?php echo $block_11['logo']['alt'] ?>">
            </div>
            <div class="s-baner__images">
                <div class="s-baner__img-one" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                    <img src="<?php echo $block_11['image_1']['url'] ?>"
                         alt="<?php echo $block_11['image_1']['alt'] ?>">
                </div>
                <div class="s-baner__img-two" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                    <img src="<?php echo $block_11['image_2']['url'] ?>"
                         alt="<?php echo $block_11['image_2']['alt'] ?>">
                </div>
                <div class="s-baner__img-thee" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                    <img src="<?php echo $block_11['image_3']['url'] ?>"
                         alt="<?php echo $block_11['image_3']['alt'] ?>">
                </div>
            </div>
            <div class="s-baner__title">
                <div class="s-baner__text">
                    <?php echo $block_11['title_line_1'] ?>
                    <span><?php echo $block_11['title_line_2'] ?></span>
                    <span><?php echo $block_11['title_line_3'] ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="s-baner s-baner_reverse no-baner">
    <?php
    $block_12 = get_field('block_12');
    ?>
    <div class="containers">
        <div class="s-baner__row">
            <div class="s-baner__images">
                <div class="s-baner__img-one" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                    <img src="<?php echo $block_12['image_1']['url'] ?>"
                         alt="<?php echo $block_11['image_1']['alt'] ?>">
                </div>
                <div class="s-baner__img-two" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                    <img src="<?php echo $block_11['image_2']['url'] ?>"
                         alt="<?php echo $block_11['image_2']['alt'] ?>">
                </div>
                <div class="s-baner__img-thee" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                    <img src="<?php echo $block_11['image_3']['url'] ?>"
                         alt="<?php echo $block_11['image_3']['alt'] ?>">
                </div>
            </div>
            <div class="s-baner__title">
                <div class="s-baner__text">
                    <?php echo $block_12['title_line_1'] ?>
                    <span><?php echo $block_12['title_line_2'] ?></span>
                    <span><?php echo $block_12['title_line_3'] ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="s-baner s-baner_grey no-baner">
    <?php
    $block_13 = get_field('block_13');
    ?>
    <div class="containers">
        <div class="s-baner__row">
            <div class="s-baner__images">
                <div class="s-baner__img-one" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                    <img src="<?php echo $block_13['image_1']['url'] ?>"
                         alt="<?php echo $block_13['image_1']['alt'] ?>">
                </div>
                <div class="s-baner__img-two" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                    <img src="<?php echo $block_13['image_2']['url'] ?>"
                         alt="<?php echo $block_13['image_2']['alt'] ?>">
                </div>
                <div class="s-baner__img-thee" data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                    <img src="<?php echo $block_13['image_3']['url'] ?>"
                         alt="<?php echo $block_13['image_3']['alt'] ?>">
                </div>
            </div>
            <div class="s-baner__title">
                <div class="s-baner__text">
                    <?php echo $block_13['title_line_1'] ?>
                    <span><?php echo $block_13['title_line_2'] ?></span>
                    <span><?php echo $block_13['title_line_3'] ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="baner-foto">
    <?php
    $block_14 = get_field('block_14');
    ?>
    <div class="baner-foto__wr">
        <img src="<?php echo $block_14['banner']['url'] ?>" class="imge" alt="<?php echo $block_14['banner']['alt'] ?>">
    </div>
</div>

<?php
$block_15 = get_field('block_15');
?>
<div class="s-title s-pad">
    <div class="container">
        <h2 data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight"><?php echo $block_15['title'] ?></h2>
    </div>
</div>
<div class="s-news p-bot">
    <div class="containers">
        <div class="s-news__rows">
            <div class="s-news__item-col n-item s-news__item-col_one"
                 data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                <div class="n-item__content">
                    <a href="<?php echo $block_15['block_15_1']['link'] ?>">
                        <img src="<?php echo $block_15['block_15_1']['banner']['url'] ?>"
                             alt="<?php echo $block_15['block_15_1']['banner']['alt'] ?>">
                    </a>
                    <a href="<?php echo $block_15['block_15_1']['link'] ?>"
                       class="n-item__title"><?php echo $block_15['block_15_1']['title'] ?></a>
                </div>
            </div>
            <div class="s-news__item-col s-news__item-col_2 s-news__item-col_two"
                 data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                <div class="n-item">
                    <div class="n-item__content">
                        <a href="<?php echo $block_15['block_15_2']['link'] ?>">
                            <img src="<?php echo $block_15['block_15_2']['banner']['url'] ?>"
                                 alt="<?php echo $block_15['block_15_2']['banner']['alt'] ?>">
                        </a>
                        <a href="<?php echo $block_15['block_15_2']['link'] ?>"
                           class="n-item__title"><?php echo $block_15['block_15_2']['title'] ?></a>
                    </div>
                </div>
                <div class="n-item">
                    <div class="n-item__content">
                        <a href="#<?php echo $block_15['block_15_3']['link'] ?>">
                            <img src="<?php echo $block_15['block_15_3']['banner']['url'] ?>"
                                 alt="<?php echo $block_15['block_15_3']['banner']['alt'] ?>">
                        </a>
                        <a href="<?php echo $block_15['block_15_3']['link'] ?>"
                           class="n-item__title"><?php echo $block_15['block_15_3']['title'] ?></a>
                    </div>
                </div>
            </div>
            <div class="s-news__item-col n-item s-news__item-col_three"
                 data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                <div class="n-item__content">
                    <a href="<?php echo $block_15['block_15_4']['link'] ?>">
                        <img src="<?php echo $block_15['block_15_4']['banner']['url'] ?>"
                             alt="<?php echo $block_15['block_15_4']['banner']['alt'] ?>">
                    </a>
                    <a href="<?php echo $block_15['block_15_4']['link'] ?>"
                       class="n-item__title"><?php echo $block_15['block_15_4']['title'] ?></a>
                </div>
            </div>
            <div class="s-news__item-col s-news__item-col_2 s-news__item-col_four"
                 data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">
                <div class="n-item">
                    <div class="n-item__content">
                        <a href="<?php echo $block_15['block_15_5']['link'] ?>">
                            <img src="<?php echo $block_15['block_15_5']['banner']['url'] ?>"
                                 alt="<?php echo $block_15['block_15_5']['banner']['alt'] ?>">
                        </a>
                        <a href="<?php echo $block_15['block_15_5']['link'] ?>"
                           class="n-item__title"><?php echo $block_15['block_15_5']['title'] ?></a>
                    </div>
                </div>
                <div class="n-item">
                    <div class="n-item__content">
                        <a href="<?php echo $block_15['block_15_6']['link'] ?>">
                            <img src="<?php echo $block_15['block_15_6']['banner']['url'] ?>"
                                 alt="<?php echo $block_15['block_15_6']['banner']['alt'] ?>">
                        </a>
                        <a href="<?php echo $block_15['block_15_6']['link'] ?>"
                           class="n-item__title"><?php echo $block_15['block_15_6']['title'] ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-center-btn">
            <div class="wr-btn">
                <a href="<?php echo $block_15['button']['link'] ?>" class="btn-type-one btn-type-three"><span><?php echo $block_15['button']['title'] ?></span></a>
            </div>
        </div>
    </div>
</div>

<?php
$block_16 = get_field('block_16');
?>
<div class="s-title s-light-grey s-pad js-sect" id="construction_progress">
    <div class="container">
        <h2 data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight"><?php echo $block_16['title'] ?></h2>
    </div>
</div>
<div class="course-slider s-light-grey">
    <div class="containers">
        <div class="course-slider__wr">
            <div class="swiper js-swiper">
                <div class="swiper-wrapper">

                    <?php
                    if (is_array($block_16['image'])){
                        foreach ($block_16['image'] as $item){
                            ?>
                            <div class="swiper-slide" data-text="другий квартал 2023">
                                <div class="course-slider-item">
                                    <img src="<?php echo $item['url'] ?>" alt="<?php echo $item['alt'] ?>">
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
        <div class="course-slider__bot">
            <div class="course-slider__btns">
                <button class="btn-slider btn-slider_prev js-btn-next"></button>
                <span class="js-text-slide"><?php echo $block_16['second_title'] ?></span>
                <button class="btn-slider btn-slider_next js-btn-prev"></button>
            </div>
        </div>
    </div>
</div>

<div class="s-title s-pad js-sect" id="contacts">
    <div class="container">
        <h2 data-scroll="toggle(.fromTopIn, .fromTopOut) addHeight">Контакти</h2>
    </div>
</div>
<div class="s-contact">
    <div class="s-contact__bg">
        <img src="<?php echo get_field('contact_image', 'options')['url'] ?>"
             alt="<?php echo get_field('contact_image', 'options')['alt'] ?>">
    </div>
    <div class="containers">
        <div class="s-contact__row">
            <div class="s-contact__left">
                <div class="s-contact__left_con">
                    <div class="s-contact__map">
                        <iframe
                                src="<?php echo get_field('google_map', 'options') ?>"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="w-con">
                        <ul class="h-top__social list-sltyle-none">
                            <li class="m-r-a">
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
                        <div class="text-addres"><?php echo strip_tags(get_field('address', 'options')) ?></div>
                        <div class="time-info">
                            <img src="<?php echo get_template_directory_uri() ?>/img/svg_icon/time.svg">
                            <time><?php echo get_field('work_time', 'options') ?></time>
                        </div>
                    </div>
                </div>
            </div>
            <div class="s-contact__right">
                <div class="form-con">
                    <div class="form-con__title t_h3">Залишились питання? <br>Звертайтесь!</div>
                    <div class="form-con__wr-top">
                        <hr class="hr form-con_hr-top">
                    </div>
                    <div class="form-con__wr js-get-form-info">
                        <form>
                            <div class="form__row">
                                <div class="item-in">
                                    <input type="text" class="in js-get-name" placeholder="Ім'я" required>
                                </div>
                                <div class="item-in">
                                    <input type="text" class="in js-get-last_name" placeholder="Прізвище" required>
                                </div>
                            </div>
                            <div class="form__row">
                                <div class="item-in">
                                    <input type="email" class="in js-get-email" placeholder="E-mail" required>
                                </div>
                                <div class="item-in">
                                    <input type="text" class="in js-get-phone js-phone-mask" name="phone"
                                           placeholder="Телефон" required>
                                </div>
                            </div>
                            <div class="from-bnt-bot">
                                <button class="btn-from js-button-click"><span>Зв'язатись з нами</span></button>
                            </div>
                        </form>
                    </div>
                    <div class="form-con__wr-top">
                        <hr class="hr form-con_hr-bot">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>

