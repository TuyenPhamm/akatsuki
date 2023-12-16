<?php
$the_query = new WP_Query(array(
    'posts_per_page'      => 3,
    'post_type'		      => 'post',
    'ignore_sticky_posts' => 1,
    //'nopaging'            => true,
    'post_status'         => 'publish',
    'orderby'             => 'date',
    'order'               => 'DESC',
));
?>
<?php if( $the_query->have_posts() ): ?>
<!-- BLOG -->
<div class="relative bg-cover bg-center bg-no-repeat h-[820px] w-[100%] "
            style="background-image: url('https://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/1.jpg');">
            <div class="absolute inset-0 bg-[#1c1c1c] opacity-75">
                <div class="max-w-[1170px] h-[100%] px-[15px] mx-auto mb-auto">
                    <h3 class=" absolute bottom-0 text-[#172745] text-[18px] font-bold bg-[#ffd105] py-[11px] px-[57px] max-sm:text-[14px] max-sm:py-[8px] max-sm:px-[30px] mx-[10px]">CONTACT US FOR INQUIRY</h3>
                </div>
            </div>
            <div class="flex justify-center items-center h-full">
                <div class=" absolute text-white">
                    <p class="text-[20px] mb-[20px]">Securing is our best part of Life</p>
                    <h1
                        class="text-[40px] max-lg:text-[35px] max-md:text-[25px] max-sm:text-[20px] font-bold mb-[10px]">
                        THE BALANCE BETWEEN FREEDOM</h1>
                    <h1
                        class="text-[40px] max-lg:text-[35px] max-md:text-[25px] max-sm:text-[20px] font-bold mb-[10px]">
                        AND SECURITY IS A DELICATE ONE</h1>
                    <button
                        class="mt-[20px] py-[10px] text-[16px] bg-[#ffd105] hover:bg-[#1e2526] border-2 border-[#ffd105] font-semibold px-[25px] text-[#1c1c1c] hover:text-[#ffd105]">GET
                        INQUIRY</button>
                </div>
            </div>

</div>
<?php endif; ?>