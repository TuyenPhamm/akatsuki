<section class="kc-elm kc_row">
<div class="pt-[135px] pb-[100px] max-w-[1170px] px-[15px] mx-auto">
            <div class="text-center mb-[42px]">
                <h2 class="text-[30px] font-bold pb-[10px]">NGHIÊN CỨU</h2>
                <p class="text-[14px] text-[#777777]">The Love Boat promises something for everyone now to beat every of
                    just one
                </p>
            </div>
            <div class="grid grid-cols-3 max-[992px]:grid-cols-2 max-md:grid-cols-1">
                <?php
                            $customPostType = new WP_Query(array(
                                'posts_per_page' => 12,
                                'post_type' => 'new'
                            ));
                            while($customPostType -> have_posts()) {
                                $customPostType-> the_post();
                ?>
                    <div class="px-[10px] max-[992px]:mb-[40px]">
                        <a href="<?php the_permalink(); ?>">

                            <div>
                                <img class="max-md:mx-auto w-[100%]"
                                    src="<?php echo get_image_featured_path(get_the_ID()); ?>"
                                    alt="">
                            </div>
                            <div class="pt-[20px]">
                                <div class="flex">
                                    <div class="flex my mr-[15px]">
                                        <i class="text-[#ffd105] text-[14px] fa-regular fa-calendar-days my-auto pr-[11px]"></i>
                                        <p class="text-[14px] text-[#777777]"> January 30, 2017</p>
                                    </div>
                                    <div class="flex">
                                        <i class="text-[#ffd105] text-[14px] fa-regular fa-user my-auto pr-[11px]"></i>
                                        <p class="text-[14px] text-[#777777]"> By admin</p>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="text-[18px] font-bold text-[#222222] my-[16px]">
                                        <?php the_title();?>
                                    </h2>
                                    <p class="text-[14px] text-[#777777]"></p>
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

