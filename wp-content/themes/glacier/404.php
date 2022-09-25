<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

    <div class="page-error page-pt">
        <div class="containers">
            <div class="page-error__row">
                <div class="page-error__img">
                    <img src="<?php echo get_field('image_404', 'options')['url'] ?>"
                         alt="<?php echo get_field('image_404', 'options')['alt'] ?>">
                </div>
                <div class="page-error__title"><?php echo get_field('title_404', 'options') ?></div>
                <div class="page-error__subtitle"><?php echo get_field('subtitle_404', 'options') ?></div>
                <div class="page-error__text"><?php echo get_field('text_404', 'options') ?></div>
                <div class="page-error__wr-btn">
                    <a href="<?php echo get_home_url() ?>" class="btn-type-one btn-type-three"><span>повернутися на головну</span></a>
                </div>
            </div>
        </div>
    </div>

