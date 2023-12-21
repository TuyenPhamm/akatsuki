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
                <div class="max-sm:hidden w-full flex justify-between max-lg:flex-wrap  max-lg:justify-center ml-[40px] my-auto max-lg:mb-[20px] max-lg:w-full max-lg:mx-auto">
                    <div class="max-lg:mx-auto">
                        <?php
                            dynamic_sidebar('logo');
                        ?>
                    </div>
                    <div class="flex">
                        <div class="flex max-lg:ml-[40px]">
                            <i class="fa-regular fa-clock text-[32px] text-[#ffdd44]"></i>
                            <div class="pl-[18px]">
                                <p class="text-[16px] font-bold ">WORKING HOURS</p>
                                <p class="text-[#777777] text-[14px] font-normal">Moday - Sunday: 8.00am to 10.30pm</p>
                            </div>
                        </div>
                        <div class="flex ml-[40px]">
                            <i class="fa-solid fa-mobile-screen-button text-[32px] text-[#ffdd44]"></i>
                            <div class="pl-[18px]">
                                <p class="text-[16px] font-bold ">CALL US</p>
                                <p class="text-[#777777] text-[14px] font-normal">+1-234-678-8900</p>
                            </div>
                        </div>
                        <div class="flex ml-[40px]">
                            <i class="fa-regular fa-envelope text-[32px] text-[#ffdd44]"></i>
                            <div class="pl-[18px]">
                                <p class="text-[16px] font-bold ">MAIL US</p>
                                <p class="text-[#777777] text-[14px] font-normal">example@support.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="sm:hidden mx-auto w-full text-center">
                <div class="mx-auto">
                    <i class="fa-regular fa-clock text-3xl text-[#ffdd44]"></i>
                    <div class="mt-2">
                        <p class="text-xl font-bold">WORKING HOURS</p>
                        <p class="text-[#777777] text-base font-normal">Monday - Sunday: 8.00am to 10.30pm</p>
                    </div>
                </div>
                <div class="mx-auto mt-6">
                    <i class="fa-solid fa-mobile-screen-button text-3xl text-[#ffdd44]"></i>
                    <div class="mt-2">
                        <p class="text-xl font-bold">CALL US</p>
                        <p class="text-[#777777] text-base font-normal">+1-234-678-8900</p>
                    </div>
                </div>
                <div class="mx-auto mt-6 mb-[20px]">
                    <i class="fa-regular fa-envelope text-3xl text-[#ffdd44]"></i>
                    <div class="mt-2">
                        <p class="text-xl font-bold">MAIL US</p>
                        <p class="text-[#777777] text-base font-normal">example@support.com</p>
                    </div>
                </div>
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
                <div class="mb-[20px] flex justify-between ">
                    <div class="my-auto bg-[#172745] hover:bg-[#ffd105]">
                        <button class="font-bold text-[14px] text-[#FFF] py-[20px] px-[47px] leading-[24px]">GET FREE
                            CONSULTATION</button>
                    </div>
                    <div>
                        <i class="fa-solid fa-bars text-[34px] text-[#ffffff] bg-[#ffd105]"></i>
                    </div>
                </div>
            </div>
        </div>
       