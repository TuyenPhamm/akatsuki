<section >
<div class="partner relative bg-cover bg-center bg-no-repeat h-[100px] w-[100%] bg-[#ffd105] "
            style="background-image: url('http://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/pattern-1.png');">
            <div class="px-[10px] py-[10px] max-w-[1120px] mx-auto owl-carousel owl-theme grid grid-cols-5 gap-[100px] ">
                <div class="item px-[50px] ">
                    <img class="w-[109px] mx-auto my-auto " src="http://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/2.png" alt="">
                </div>
                <div class="item px-[50px] max-sm:hidden">
                    <img class="w-[109px] mx-auto my-auto " src="http://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/1.png" alt="">
                </div>
                <div class="item px-[50px] max-md:hidden">
                    <img class="w-[109px] mx-auto my-auto " src="http://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/5.png" alt="">
                </div>
                <div class="item px-[50px] max-[992px]:hidden">
                    <img class="w-[109px] mx-auto my-auto " src="http://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/4.png" alt="">
                </div>
                <div class="item px-[50px] max-[992px]:hidden">
                    <img class="w-[109px] mx-auto my-auto " src="http://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/1.png" alt="">
                </div>
            </div>
        </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $(".partner .owl-carousel").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000, 
            autoplayHoverPause: true,
            responsive: {
                0: {
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