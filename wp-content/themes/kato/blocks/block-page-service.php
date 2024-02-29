<section>
    <h2 class="text-[30px] font-bold text-center pb-[50px]" >
        DỊCH VỤ
    </h2>
    <div class="grid grid-cols-3 max-[992px]:grid-cols-2 max-[992px]:px-[15px] max-md:grid-cols-1 gap-x-[60px] max-w-[1200px] mx-auto ">
        <?php
            $customPostType = new WP_Query(array(
            'posts_per_page' => 9,
            'post_type' => 'service_page'
            ));
            while($customPostType -> have_posts()) {
            $customPostType-> the_post();
        ?>
            <div class="pb-[35px] max-md:mt-[15px] max-md:w-full max-md:h-auto mx-auto ">
                <a href="<?php the_permalink(); ?>">
                    <div class="relative group">
                        <div class="absolute inset-0 bg-[#172745f7] opacity-80 duration-500 group-hover:bg-[#ffffff] group-hover:opacity-100">
                        </div>
                        <div class="w-full h-full " >
                            <img class="max-md:w-full max-md:h-auto " src="<?php echo get_image_featured_path(get_the_ID()); ?>" />
                        </div>
                        <div class="h-[auto] opacity-100 absolute inset-x-0 top-[0px]">
                            <div class="p-[18px] text-[#ffffff] group-hover:text-black">
                                <h2 class="text-[18px]  font-bold"><?php the_title(); ?></h2>
                                <p class="pt-[10px] text-[13px]"><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div> 
        <?php
            }
        ?>
    </div> 
</section>