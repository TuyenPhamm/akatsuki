<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Kato
 */

get_header();
global $post;
?>

<?php
    $the_query = new WP_Query(array(
        'posts_per_page'      => 5,
        'post_type'		      => 'post',
        'ignore_sticky_posts' => 1,
        //'nopaging'            => true,
        'post_status'         => 'publish',
        'orderby'             => 'date',
        'order'               => 'DESC',
    ));
?>

<!-- BANNER -->
<div class="section subbanner relative h-[240px] bg-[#204291]" >
    <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 text-center break-all w-full px-[10px]">
        <h1 class="font-semibold lg:text-3xl text-[18px] text-white "><?php the_title() ?></h1>
        <p class="italic text-[#ced4da] lg:text-normal text-[14px]  mt-2"><?php get_breadcrumb()?></p>
    </div>
</div>

<div class="max-w-[1280px] w-full m-auto">
    <div class="my-[70px] flex justify-between flex-wrap ">
        <div class="lg:w-[65%] w-full p-[32px] break-all">
            <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
        <div class="lg:w-[35%] w-full p-[32px] lg:border-inherit border-white border-l-2 ">
            <h2 class="text-2xl mb-2 font-bold">Bài đăng mới nhất</h2>
            <ul class="">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <li class="flex items-center my-6">
                            <div class="w-[70px] h-[70px] bg-cover bg-center bg-no-repeat mr-3 rounded-md"  style="background-image: url(<?php echo get_image_featured_path(get_the_ID());?>)"></div>
                            <div class="max-w-[65%] w-full">
                                <h3 class="truncate font-semibold"><?php the_title() ?></h3>
                                <p class="text-[#1665f8] text-[14px]"><?php the_time( 'd - Y M' ) ?></p>
                            </div>
                        </li>
                    </a>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</div>

<?php
get_footer();
