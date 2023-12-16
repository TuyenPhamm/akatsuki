<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kato
 */

get_header();
global $post;
?>
    <div class="section subbanner relative" style="background-image: url('<?php echo get_image_featured_path($post->ID, false) ?>'); height: 240px;background-position: center;background-size: cover;background-repeat: no-repeat;}">
        <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 text-center break-all w-full px-[10px]">
            <h1 class="font-semibold lg:text-3xl text-[18px] text-white"><?php the_title() ?></h1>
            <p class="italic text-[#ced4da] mt-2 lg:text-normal text-[14px] "><?php get_breadcrumb()?></p>
        </div>
    </div>
    <div class="">
        <main id="primary" >
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
            <?php endwhile; ?>
        </main>
    </div>
<?php
get_footer();
