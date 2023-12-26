
<section class="services">
<div class="pt-[150px] max-w-[1140px] mx-auto">
            <div class="text-center mb-[92px]">
                <h2 class="text-[30px] leading-[42px] font-bold">DỊCH VỤ</h2>
                <p class="text-[14px] text-[#777777] leading-[25px]">The Love Boat promises something for everyone now
                    to beat every of just one</p>
            </div>
            <div class="grid grid-cols-3 max-lg:grid-cols-2 max-lg:grid-rows-2 max-md:grid-cols-1 max-md:grid-rows-3 relative bg-cover bg-center bg-no-repeat h-auto w-[100%] "
                style="background-image: url('http://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/dotted-map.png');">
                <div class="px-[15px] max-lg:order-1">
                    <?php
                        $customPostType = new WP_Query(array(
                            'posts_per_page' => 9,
                            'post_type' => 'service_feft'
                        ));
                        while($customPostType -> have_posts()) {
                            $customPostType-> the_post();
                    ?>
                        <div class="max-md:hidden">
                            <a href="<?php the_permalink(); ?>">
                                <div class="flex pb-[70px]">
                                    <div class="text-right pr-[30px]">
                                        <h3 class="text-[16px] leading-[24px] font-bold text-[#222222] mb-[10px]">
                                            <?php the_title(); ?>
                                        </h3>
                                        <p class=" text-[13px] text-[#777777]">
                                            <?php the_excerpt(); ?>
                                        </p>
                                    </div>
                                    <div class="my-auto ">
                                        <i
                                            class="hover:bg-[#ffd105] fa-solid fa-shield text-[20px] p-[20px] border-2 border-[#ffd105]"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="md:hidden flex flex-col justify-center items-center">
                            <a href="<?php the_permalink(); ?>">
                                <div class="pb-8 text-center">
                                    <i class="hover:bg-[#ffd105] fa-solid fa-shield text-4xl p-5 border-2 border-[#ffd105] mx-auto"></i>
                                    <div class="mt-[35px]">
                                        <h3 class="text-2xl leading-6 font-bold text-[#222222] mb-2">
                                            <?php the_title(); ?>
                                        </h3>
                                        <p class="text-base text-[#777777]">
                                            <?php the_excerpt(); ?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="px-[15px] max-lg:col-span-2 max-md:col-span-1 max-lg:order-3 max-lg:mx-auto">
                    <img class="max-h-[578px]"
                        src="https://akatsuki.vn/wp-content/uploads/2022/10/Hinh-tuyen-dung-end-01-1-768x914.png"
                        alt="">
                </div>
                <div class="px-[15px] max-lg:order-2">
                    <?php
                        $customPostType = new WP_Query(array(
                            'posts_per_page' => 9,
                            'post_type' => 'service_right'
                        ));
                        while($customPostType -> have_posts()) {
                            $customPostType-> the_post();
                    ?>
                        <div class="max-md:hidden">
                            <a href="<?php the_permalink(); ?>">
                                <div class="flex pb-[70px]">
                                    <div class="my-auto ">
                                        <i
                                            class="hover:bg-[#ffd105] fa-regular fa-user text-[20px] p-[20px] border-2 border-[#ffd105]"></i>
                                    </div>
                                    <div class="text-left pl-[30px]">
                                        <h3 class="text-[16px] leading-[24px] font-bold text-[#222222] mb-[10px]">
                                            <?php the_title(); ?>
                                        </h3>
                                        <p class=" text-[13px] text-[#777777]">
                                            <?php the_excerpt(); ?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="md:hidden flex flex-col justify-center items-center">
                            <a href="<?php the_permalink(); ?>">
                                <div class="pb-8 text-center">
                                    <i class="hover:bg-[#ffd105] fa-solid fa-shield text-4xl p-5 border-2 border-[#ffd105] mx-auto"></i>
                                    <div class="mt-[35px]">
                                        <h3 class="text-2xl leading-6 font-bold text-[#222222] mb-2">
                                            <?php the_title(); ?>
                                        </h3>
                                        <p class="text-base text-[#777777]">
                                            <?php the_excerpt(); ?>
                                        </p>
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
</section>