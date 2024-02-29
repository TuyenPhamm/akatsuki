<section>
    <div class="pt-[50px]">
        <h2 class="text-[30px] font-bold text-[#222222] pb-[10px] text-center mb-[42px]">
            KINH NGHIỆM 
        </h2>
        <div class="grid grid-cols-3 max-[992px]:grid-cols-2 max-md:grid-cols-1 gap-[30px] max-w-[1200px] px-[15px] mx-auto">
            <?php
                $customPostType = new WP_Query(array(
                'posts_per_page' => 10,
                'post_type' => 'blog'
                ));
                while($customPostType -> have_posts()) {
                $customPostType-> the_post();
            ?>
                <div class=" ">
                    <a href="<?php the_permalink(); ?>">
                        <div class="mb-[40px]">
                            <img class=""
                                src="<?php echo get_image_featured_path(get_the_ID()); ?>"
                            alt="">
                            <h2 class="font-bold text-[17px] text-[#222222] pt-[25px] transition duration-500 hover:text-[#a6261b]">
                                <?php the_title(); ?>
                            </h2>
                        </div>
                    </a>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>