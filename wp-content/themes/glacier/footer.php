</div>
<footer class="footer">
    <div class="containers">
        <div class="footer__row">
            <div class="footer__left">
                <div class="footer__logo">
                    <img src="<?php echo get_field('footer_logo', 'options')['url'] ?>" alt="<?php echo get_field('footer_logo', 'options')['alt'] ?>">
                </div>
            </div>
            <div class="footer__right">
                <div class="footer-col">
                    <div class="footer-item-title">Контакти</div>
                    <div class="footer-wr-item">
                        <ul class="f-cont list-sltyle-none">
                            <li>
                                <a href="tel:<?php echo str_replace(' ', '', get_field('phone', 'options')) ?>"><b><?php echo get_field('phone', 'options') ?></b></a>
                            </li>
                            <li>
                                <a href="mailto:<?php echo str_replace(' ', '', get_field('email', 'options')) ?>"><?php echo get_field('email', 'options') ?></a>
                            </li>
                        </ul>
                        <div class="f-add">
                            <?php echo get_field('address', 'options') ?>
                        </div>
                    </div>
                </div>
                <div class="footer-col">
                    <div class="footer-item-title">Соцмережі</div>
                    <div class="footer-wr-item">
                        <ul class="social-footer list-sltyle-none">

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
                                        <span><?php echo $item['title'] ?></span>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>

                        </ul>
                    </div>
                </div>
                <div class="footer-col">
                    <div class="footer-item-title">Мапа сайту</div>
                    <div class="footer-wr-item">
                        <ul class="menu-f list-sltyle-none">

                            <?php
                            $menu_items = wp_get_nav_menu_items('Site map');
                            if (is_array($menu_items)) {
                                $index = 1;
                                foreach ($menu_items as $menu_item) {
                                    if ($menu_item->menu_item_parent == '0') {
                                        ?>
                                        <li><a href="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></a></li>
                                        <?php
                                    }
                                    $index++;
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

<script>
    window.ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>

<!--<script src="libs/jquery.js"></script>-->
<!--<script src="libs/jquery.mask.min.js"></script>-->
<!--<script src="libs/simpleParallax.min.js"></script>-->
<!--<script src="libs/ScrollTrigger.min.js"></script>-->
<!--<script src="libs/swiper/swiper.min.js"></script>-->
<!--<script src="js/main.js"></script>-->
</body>

</html>