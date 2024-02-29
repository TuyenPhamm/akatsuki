<section class="security">
<div class="pt-[100px] pb-[80px] max-[769px]:pt-[40px] max-[769px]:pb-[40px] max-sm:pt-[15px] max-sm:pb-[15px] max-w-[1170px] mx-auto max-lg:px-[12px]">
            <div class="text-center mb-[42px]">
                <h2 class="text-[#222222] text-[30px] font-bold pb-[15px]">LĨNH VỰC</h2>
                <p class="text-[#777777] text-[14px]">The Love Boat promises something for everyone now to beat every of
                    just one</p>
            </div>
            <div class="grid grid-cols-4 max-[992px]:grid-cols-2 max-md:grid-cols-1 owl-carousel owl-theme">
                <?php
                    $customPostType = new WP_Query(array(
                        'posts_per_page' => 9,
                        'post_type' => 'guard'
                    ));
                    while($customPostType -> have_posts()) {
                        $customPostType-> the_post();
                ?>
                <div class=" px-[15px] max-md:mt-[15px] max-md:w-full max-md:h-auto mx-auto ">
                    <a href="<?php the_permalink(); ?>">
                    <div class="group relative">
                            <div class="h-0 opacity-0 overflow-hidden transition-all duration-700 group-hover:h-full opacity-80 absolute inset-x-0 bottom-0 bg-gradient-to-t from-red-500 to-white">
                            </div>
                            <div class="w-full h-full hover:opacity-0 group-hover:opacity-100">
                               <img class="max-md:w-full max-md:h-auto" src="<?php echo get_image_featured_path(get_the_ID()); ?>" />
                            </div>
                            <div class="h-0 transition-all duration-700 group-hover:h-[auto] opacity-100 absolute inset-x-0 bottom-[0px]"
                                style="background-color:#333333;">
                                <div class="p-[18px]">
                                    <h2 class="text-[14px] text-[#ffffff]"><?php the_title(); ?></h2>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div> 
                <?php
                    }
                ?>
            </div>
        </div>
</section>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $(".security .owl-carousel").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000, 
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                500: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                992: {
                    items: 4,
                },
                
            }
        });
    });
</script>