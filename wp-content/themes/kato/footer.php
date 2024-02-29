<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kato
 */
?>
        <div class="bg-[#121e37]">
            <div class="max-w-[1460px]  mx-auto ">
                <div class="max-w-[1200px]  mx-auto grid grid-cols-4 max-[992px]:grid-cols-2 max-md:grid-cols-1">
                    <div class="mb-[30px] px-[15px] pt-[100px] max-[992px]:pt-[50px]">
                        <h2 class="text-[16px] font-bold text-[#ffffff] mb-[30px]">ABOUT US</h2>
                        <img class="w-[100%] h-auto"
                            src="http://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/footer-img.jpg"
                            alt="">
                        <p class="my-[30px] text-[14px] text-[#ebebeb]">The Love Boat promises something for every the
                            beat
                            of very best to a make the others comfortable.</p>
                    </div>
                    <div class="mb-[30px] px-[15px] pt-[100px] max-sm:pt-[10px] max-[992px]:pt-[50px]">
                        <h2 class="text-[16px] font-bold text-[#ffffff] mb-[30px] max-sm:mb-[15px]">QUICK LINKS</h2>
                        <div>
                            <a href="">
                                <div class="text-[#ebebeb] flex mb-[7px]">
                                    
                                    <p class="text-[14px] pl-[5px] text-[#ebebeb]">
                                    
                                        <?php
                                            wp_nav_menu( array(
                                                'theme_location' => 'footer-menu',
                                                'menu_id'        => 'footer-menu',
                                            ) );
                                        ?>
                                    </p>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="mb-[30px] px-[15px] pt-[100px] max-[992px]:pt-[50px] max-sm:pt-[30px]">
                        <h2 class="text-[16px] font-bold text-[#ffffff] mb-[30px]">LATEST TWEETS</h2>
                        <a href="">
                            <div class=" flex">
                                <i class="fa-brands fa-twitter text-[#006bbb] text-[18px] my-auto"></i>
                                <p class="pl-[5px] text-[14px] text-[#ebebeb] hover:text-[#ffdd44]">http://fontawesome.io/cheats</p>
                            </div>
                        </a>
                    </div>
                    <div
                        class="mb-[30px] max-[992px]:pb-[50px] px-[15px] bg-[#121e37] pt-[100px] max-[992px]:pt-[50px] max-sm:pt-[30px] px-[39px]">
                        <h2 class="text-[16px] font-bold text-[#ffffff] mb-[30px]">CONTACT US</h2>
                        <div class="mb-[15px]">
                            <input class=" w-[100%] mb-[20px] py-[8px] px-[10px]" type="text" placeholder="Name" name=""
                                id="">
                            <input class=" w-[100%] mb-[20px] py-[8px] px-[10px]" type="email" placeholder="Email"
                                name="" id="">
                            <button
                                class=" w-[100%] mb-[20px] py-[6px] px-[47px] border-2 border-[#ffd105] text-[14px] font-bold text-[#172745] bg-[#ffd105] hover:bg-[#121e37]  hover:text-[#ffffff]">SEND
                                MESSAGE</button>
                        </div>
                        <div class="text-[#ffffff]  grid grid-cols-5">
                            <div class="flex justify-center items-center">
                                <a href="">
                                    <i class="hover:text-[#ffd105] fab fa-facebook-f text-center"></i>
                                </a>
                            </div>
                            <div class="flex justify-center items-center">
                                <a href="">
                                    <i class="hover:text-[#ffd105] fa-brands fa-twitter text-center"></i>
                                </a>
                            </div>
                            <div class="flex justify-center items-center">
                                <a href="">
                                    <i class="hover:text-[#ffd105] fa-brands fa-linkedin-in text-center"></i>
                                </a>
                            </div>
                            <div class="flex justify-center items-center">
                                <a href="">
                                    <i class="hover:text-[#ffd105] fa-brands fa-instagram text-center"></i>
                                </a>
                            </div>
                            <div class="flex justify-center items-center">
                                <a href="">
                                    <i class="hover:text-[#ffd105] fa-brands fa-vimeo-v text-center"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-[#121e37] h-auto ">
                <div class="max-w-[1170px] px-[20px] mx-auto flex justify-between pt-[15px] pb-[12px] max-sm:hidden">
                    <div>
                        <p class=" text-[14px] text-[#ebebeb]">© 2023 Bristol Security. All Rights Reserved.</p>
                    </div>
                    <div class="flex">
                        <a href="">
                            <p
                                class="px-[10px] text-[14px] text-[#ebebeb] border-r-[1px] border-[#ebebeb] hover:text-[#ffd105]">
                                Privacy Policy
                            </p>
                        </a>
                        <a href="">
                            <p class="px-[10px] text-[14px] text-[#ebebeb] hover:text-[#ffd105]">Terms & Condition</p>
                        </a>
                    </div>

                </div>
                <div class="max-w-[1170px] text-center pb-[12px] sm:hidden">
                    <div>
                        <p class=" text-[10px] text-[#ebebeb]">© 2023 Bristol Security. All Rights Reserved.</p>
                    </div>
                    <div class="flex justify-center">
                        <a href="">
                            <p
                                class="px-[10px] text-[10px] text-[#ebebeb] border-r-[1px] border-[#ebebeb] hover:text-[#ffd105]">
                                Privacy Policy
                            </p>
                        </a>
                        <a href="">
                            <p class="px-[10px] text-[10px] text-[#ebebeb] hover:text-[#ffd105]">Terms & Condition</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php wp_footer(); ?>
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 2,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
</body>
</html>