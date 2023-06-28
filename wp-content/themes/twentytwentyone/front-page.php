<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

// Custom field



//training
$training = get_field('training');
$tr_subtitle = $training['sub_title'];
$tr_title = $training['title'];
$tr_items = $training['items'];

//infrastructure
$infrastructure = get_field('infrastructure');
$inf_subtitle = $infrastructure['sub_title'];
$inf_title = $infrastructure['title'];
$inf_content = $infrastructure['content'];
$inf_columns = $infrastructure['columns'];

//news
$new = get_field('news');

//review
$review = get_field('review');
$r_subtitle = $review['sub_title'];
$r_title = $review['title'];

//our partner
$our_partner = get_field('our_partner');
$op_subtitle = $our_partner['subtitle'];
$op_title = $our_partner['title'];
$op_partners = $our_partner['partners'];

//register get advice
$register_get_advice = get_field('register_get_advice');
$rga_title = $register_get_advice['title'];
$rga_content = $register_get_advice['content'];
$rga_image = $register_get_advice['image'];
$rga_cf7code = $register_get_advice['cf7_code'];

get_template_part('template-parts/content/home/slider');
get_template_part('template-parts/content/home/about-us');
get_footer();
