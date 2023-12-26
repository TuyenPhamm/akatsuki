

<section class="field">
<div class="relative bg-cover bg-center bg-no-repeat h-[815.750px] max-lg:h-[1300px] max-[992px]:h-[1250px] max-sm:h-[2000px] max-[540px]:h-[1900px] max-[400px]:h-[1700px] w-[100%] "
            style="background-image: url('http://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/1-1.jpg');">
            <div class="absolute inset-0 bg-[#172745f7] opacity-100"></div>
            <div class="pt-[140px] pb-[100px]">
                <div class="absolute w-[100%]">
                    <div class="text-[#ffffff]  text-center w-[100%] mb-[42px]">
                        <h2 class="text-[30px] font-bold leading-[42px] pb-[10px]">OUR ADVANTAGES</h2>
                        <p class="text-[14px] leading-[25px]">The Love Boat promises something for everyone now to beat
                            every of just one</p>
                    </div>
                    <div class=" grid grid-cols-3 max-lg:grid-cols-2 max-lg:grid-rows-2 max-sm:grid-cols-1 mx-auto max-w-[1200px] w-[100%]">
                        <?php
                            $customPostType = new WP_Query(array(
                                'posts_per_page' => 9,
                                'post_type' => 'advantages'
                            ));
                            while($customPostType -> have_posts()) {
                                $customPostType-> the_post();
                        ?>
                            <div class="px-[15px] max-lg:pb-[30px]">
                                <a href="<?php the_permalink(); ?>">
                                    <img class="mx-auto w-[100%]"
                                        src="http://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/adventure-1.jpg"
                                        alt="">
                                    <div class="flex">
                                        <div>
                                            <i class="fa-solid fa-headphones text-[30px] py-[30px] px-[20px] font-bold bg-[#ffd105] text-[#172745]"></i>
                                        </div>
                                        <div class="pl-[20px] pt-[20px]">
                                            <h3 class="text-[18px] max-lg:text-[16px] text-[#ffffff] font-bold mb-[7px] hover:text-[#ffd105]">
                                                <?php the_title(); ?>
                                            </h3>
                                            <p class="text-[13px] max-lg:text-[14px] text-[#c0c0c0]">
                                                <?php the_excerpt(); ?>
                                            </p>

                                            <button
                                                class="text-[14px] font-bold text-[#ffffff] hover:text-[#ffd105] mt-[17px] ">
                                                READ MORE
                                                <i class=" fa-solid fa-arrow-right font-bold text-[10.5px] pl-[7px]"></i>
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $(".field .owl-carousel").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000, 
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                380: {
                    items: 2,
                },
                500: {
                    items: 3,
                },
                768: {
                    items: 4,
                },
                992: {
                    items: 5,
                },
                
            }
        });
    });
</script>
