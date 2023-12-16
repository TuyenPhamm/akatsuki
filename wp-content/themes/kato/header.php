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
            <div>
                <img class="max-lg:mx-auto h-[100px]" src="./img/ảnh_Viber_2023-07-24_14-04-37-905.png" alt="">
            </div>
            <div
                class="max-sm:hidden flex max-lg:flex-wrap  max-lg:justify-center ml-[40px] my-auto max-lg:mb-[20px] max-lg:w-full max-lg:mx-auto">
                <div class="flex max-lg:ml-[40px]">
                    <i class="ti-timer text-[32px] text-[#ffdd44]"></i>
                    <div class="pl-[18px]">
                        <p class="text-[16px] font-bold ">WORKING HOURS</p>
                        <p class="text-[#777777] text-[14px] font-normal">Moday - Sunday: 8.00am to 10.30pm</p>
                    </div>
                </div>
                <div class="flex ml-[40px]">
                    <i class="ti-mobile text-[32px] text-[#ffdd44]"></i>
                    <div class="pl-[18px]">
                        <p class="text-[16px] font-bold ">CALL US</p>
                        <p class="text-[#777777] text-[14px] font-normal">+1-234-678-8900</p>
                    </div>
                </div>
                <div class="flex ml-[40px]">
                    <i class="ti-email text-[32px] text-[#ffdd44]"></i>
                    <div class="pl-[18px]">
                        <p class="text-[16px] font-bold ">MAIL US</p>
                        <p class="text-[#777777] text-[14px] font-normal">example@support.com</p>
                    </div>
                </div>
            </div>
            <div class="sm:hidden mx-auto w-full text-center">
                <div class="mx-auto">
                    <i class="ti-timer text-3xl text-[#ffdd44]"></i>
                    <div class="mt-2">
                        <p class="text-xl font-bold">WORKING HOURS</p>
                        <p class="text-[#777777] text-base font-normal">Monday - Sunday: 8.00am to 10.30pm</p>
                    </div>
                </div>
                <div class="mx-auto mt-6">
                    <i class="ti-mobile text-3xl text-[#ffdd44]"></i>
                    <div class="mt-2">
                        <p class="text-xl font-bold">CALL US</p>
                        <p class="text-[#777777] text-base font-normal">+1-234-678-8900</p>
                    </div>
                </div>
                <div class="mx-auto mt-6 mb-[20px]">
                    <i class="ti-email text-3xl text-[#ffdd44]"></i>
                    <div class="mt-2">
                        <p class="text-xl font-bold">MAIL US</p>
                        <p class="text-[#777777] text-base font-normal">example@support.com</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="max-w-[1170px] mx-auto flex justify-between border-1 border-t border-[#ebebeb]   ">
            <div class="pl-[20px] flex w-full max-md:hidden">
                <div
                    class="flex mr-[52px] max-[1200px]:mr-[48px] max-[1140px]:mr-[30px] max-[950px]:mr-[15px] max-[880px]:mr-[10px]  py-[19px]">
                    <h1 class="text-[15px] max-lg:text-[13px] max-[900px]:text-[10px] font-bold my-auto">HOME</h1>
                    <i class="ti-angle-down my-auto font-bold pl-[5px]"></i>
                </div>
                <div
                    class="flex mr-[52px] max-[1200px]:mr-[48px] max-[1140px]:mr-[30px] max-[950px]:mr-[20px] max-[880px]:mr-[10px]  py-[19px]">
                    <h1 class="text-[15px] max-lg:text-[13px] max-[900px]:text-[10px] font-bold my-auto whitespace-nowrap">ABOUT US</h1>
                </div>
                <div
                    class="flex mr-[52px] max-[1200px]:mr-[48px] max-[1140px]:mr-[30px] max-[950px]:mr-[20px] max-[880px]:mr-[10px]  py-[19px]">
                    <h1 class="text-[15px] max-lg:text-[13px] max-[900px]:text-[10px] font-bold my-auto">SERVICES</h1>
                    <i class="ti-angle-down my-auto font-bold pl-[5px]"></i>
                </div>
                <div
                    class="flex mr-[52px] max-[1200px]:mr-[48px] max-[1140px]:mr-[30px] max-[950px]:mr-[20px] max-[880px]:mr-[10px]  py-[19px]">
                    <h1 class="text-[15px] max-lg:text-[13px] max-[900px]:text-[10px] font-bold my-auto">GALLERY</h1>
                    <i class="ti-angle-down my-auto font-bold pl-[5px]"></i>
                </div>
                <div
                    class="flex mr-[52px] max-[1200px]:mr-[48px] max-[1140px]:mr-[30px] max-[950px]:mr-[20px] max-[880px]:mr-[10px]  py-[19px]">
                    <h1 class="text-[15px] max-lg:text-[13px] max-[900px]:text-[10px] font-bold my-auto">BLOG</h1>
                    <i class="ti-angle-down my-auto font-bold pl-[5px]"></i>
                </div>
                <div
                    class="flex mr-[52px] max-[1200px]:mr-[48px] max-[1140px]:mr-[30px] max-[950px]:mr-[20px] max-[880px]:mr-[10px]  py-[19px]">
                    <h1 class="text-[15px] max-lg:text-[13px] max-[900px]:text-[10px] font-bold my-auto">PAGES</h1>
                    <i class="ti-angle-down my-auto font-bold pl-[5px]"></i>
                </div>
                <div
                    class="flex mr-[52px] max-[1200px]:mr-[48px] max-[1140px]:mr-[30px] max-[950px]:mr-[20px] max-[880px]:mr-[10px]  py-[19px]">
                    <h1 class="text-[15px] max-lg:text-[13px] max-[900px]:text-[10px] font-bold my-auto whitespace-nowrap">CONTACT US</h1>
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
                        <i class="ti-menu text-[34px] text-[#ffffff] bg-[#ffd105]"></i>
                    </div>
                </div>
            </div>
        </div>
        <header class="">
        <div class="fixed top-0 left-0 w-full z-50 lg:hidden">
            <div class=" bg-[#EA3838] ">
                <div class="flex justify-between max-lg:justify-between max-w-[1120px] mx-auto pr-[10px]">
                    <div class="px-[15px]">
                        <?php
                            dynamic_sidebar('logo');
                        ?>
                    </div>
                    <button id="showDivButton" class="my-auto toggle-btn">
                        <i class="fas fa-bars pl-2 pl-[10px] text-[30px] text-[#ffffff]"></i>
                    </button>
                    <button id="hideDivButton" class="my-auto toggle-btn hidden">
                        <i class="fas fa-times pl-2 pl-[10px] text-[30px] text-[#ffffff]"></i>
                    </button>
                </div>
            </div>
            <div id="hiddenDiv" class=" bg-[#f8f8f8] hidden">
                <div class=" px-[20px] py-[10px] border-b-[1px] border-[#EA3838]">
                    <p class="text-[16px]">
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
        <div class="fixed top-0 left-0 w-full bg-[#ffffff] z-50">
            <div class="flex justify-between max-lg:hidden l max-w-[1120px] mx-auto ">
                <div class="px-[15px]">
                    <?php
                    dynamic_sidebar('logo');
                    ?>
                </div>
                <div class="flex justify-between w-[885px] px-[15px]">
                    
                        <div class="flex my-auto px-[10px]  ">
                            <p class="text-[16px]">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'main-menu',
                                    'menu_id'        => 'main-menu',
                                ) );
                             ?>
                            </p>
                        </div>
                   
                    <div class="my-auto flex">
                        <button
                            class=" bg-[#EA3838] hover:bg-[#bd2d10] border-[2px] border-[#EA3838] hover:border-[#bd2d10] mx-[10px] py-[11px] px-[24px] rounded-[3px] text-[14px] text-[#ffffff]">
                            Get A Quote
                        </button>
                        <div class="my-auto">
                            <i class="ti-menu pl-[10px] text-[30px] text-[#EA3838] "></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>

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