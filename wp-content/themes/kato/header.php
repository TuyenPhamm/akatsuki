<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kato
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="./img/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
      
    <script src="https://cdn.tailwindcss.com"></script>
    <?php wp_head(); ?>
</head>
<div class=" lg:flex lg:justify-between  h-auto max-w-[1170px] py-[26[px] mx-auto px-[15px] ">
                <div class="max-md:hidden w-full flex justify-between max-lg:flex-wrap  max-lg:justify-center ml-[40px] my-auto max-lg:mb-[20px] max-lg:w-full max-lg:mx-auto">
                    <div class="max-lg:mx-auto w-[100px]">
                        <?php
                            dynamic_sidebar('logo');
                        ?>
                    </div>
                    <div class="flex">
                        <?php
                            $customPostType = new WP_Query(array(
                                'posts_per_page' => 9,
                                'post_type' => 'describe'
                            ));
                            while($customPostType -> have_posts()) {
                                $customPostType-> the_post();
                        ?>
                            <div class="flex max-lg:ml-[40px] my-auto pl-[20px] max-[880px]:pl-[5px] ">
                                <img class="h-[40px]" src="<?php echo get_image_featured_path(get_the_ID()); ?>" alt="">
                                <div class="pl-[18px]">
                                    <p class="text-[16px] max-[880px]:text-[14px] font-bold hover:text-[#1c1c1c]"><?php the_title(); ?></p>
                                    <p class="text-[#777777] text-[14px] max-[880px]:text-[12px] font-normal">
                                        <?php the_excerpt(); ?>
                                    </p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            <div class="hidden mx-auto w-full text-center">
                <?php
                    $customPostType = new WP_Query(array(
                        'posts_per_page' => 9,
                        'post_type' => 'describe'
                    ));
                    while($customPostType -> have_posts()) {
                    $customPostType-> the_post();
                ?>
                    <div class=" my-auto mx-auto pb-[20px]">
                        <img class="h-[40px] mx-auto" src="<?php echo get_image_featured_path(get_the_ID()); ?>" alt="">
                        <div class="">
                            <p class="text-[16px] font-bold "><?php the_title(); ?></p>
                            <p class="text-[#777777] text-[14px] font-normal">
                                <?php the_excerpt(); ?>                            
                            </p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

        </div>
        <div class="max-w-[1170px] mx-auto flex justify-between border-1 border-t border-[#ebebeb]   ">
            <div class="pl-[20px] flex w-full max-md:hidden">
                <div class="flex justify-between mr-[52px]  max-[1200px]:mr-[48px]  max-[1140px]:mr-[30px] max-[950px]:mr-[15px] max-[880px]:mr-[10px]  py-[19px]">
                    <h1 class="text-[15px] max-lg:text-[13px] max-[900px]:text-[10px] font-bold my-auto">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'main-menu',
                                'menu_id'        => 'main-menu',
                            ) );
                         ?>
                    </h1>
                </div>
            </div>
            <div class="my-auto bg-[#172745] hover:bg-[#ffd105] max-md:hidden w-auto mr-[20px]">
                <button class="font-bold text-[14px] text-[#FFF] py-[20px] px-[47px] max-[900px]:px-[30px] leading-[24px] whitespace-nowrap ">GET FREE CONSULTATION</button>
            </div>
            <div class="md:hidden w-[100%] px-[12px]">
                <div class=" flex justify-between ">
                    <div class="w-[70px]">
                        <?php
                            dynamic_sidebar('logo');
                        ?>
                    </div>
                    <div class="my-auto">
                        <button id="showDivButton"  class="my-auto">
                            <i  class="my-auto fa-solid fa-bars pl-[10px] text-[30px] text-[#ffd105] "></i>
                            </button>
                        <button id="hideDivButton" class="my-auto hidden">
                            <i class="my-auto fa-solid fa-xmark pl-[10px] text-[30px] text-[#ffd105]"></i>
                        </button>
                    </div>
                </div>
                    <div id="hiddenDiv" class=" bg-[#f8f8f8] hidden">
                        <div class="px-[20px] py-[10px] border-b-[1px] border-[#EA3838]">
                            <p class="text-[20px]">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'main-menu',
                                    'menu_id'        => 'main-menu',
                                ) );
                            ?>
                            </p>
                        </div>
                    </div>
            </div>
        </div>
       

        <script>
        var showButton = document.getElementById('showDivButton');
        var hideButton = document.getElementById('hideDivButton');
        var div = document.getElementById('hiddenDiv');
      
        showButton.addEventListener('click', function() {
          div.style.display = 'block';
          showButton.classList.add('hidden');
          hideButton.classList.remove('hidden');
        });
      
        hideButton.addEventListener('click', function() {
          div.style.display = 'none';
          hideButton.classList.add('hidden');
          showButton.classList.remove('hidden');
        });
      </script>