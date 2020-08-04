<section class=" font-roboto" >
    <x-testimonial.header/>

    <div class=" w-11/12 md:w-4/5 mx-auto mt-5 grid grid-cols-3 gap-2">
        <div class=" col-span-3 lg:col-span-2 grid grid-cols-1 gap-4">
            <div class=" testimonial">
                <div class=" text-center">
                    <img src="{{ asset('images/profile.jpg') }}" alt="">
                    <h3 class=" text-lg">Anna Deynah</h3>
                    <p class=" text-gray-600 text-sm">University of Calgary, US & Canada Regional Winner 2016, Medical Sciences</p>
                </div>
                <div class=" col-span-2 ">
                    <p class="text-lg font-thin">
                        <i class="fas fa-quote-left fa-2x text-gray-700"></i> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos eius quidem maxime repudiandae vero, nemo nihil, officiis dignissimos quaerat nostrum molestiae libero aperiam dolore ratione hic at alias vitae? Eveniet.
                        <i class="fas fa-quote-right text-gray-700"></i>
                    </p>
                    <p class=" mt-3 text-sm text-right">23/4/2020</p>
                </div>
            </div>
            <div class=" testimonial">
                <div class=" text-center order-2">
                    <img src="{{ asset('images/profile.jpg') }}" alt="">
                    <h3 class=" text-lg">Anna Deynah</h3>
                    <p class=" text-gray-600 text-sm">University of Calgary, US & Canada Regional Winner 2016, Medical Sciences</p>
                </div>
                <div class=" col-span-2 ">
                    <p class="text-lg font-thin">
                        <i class="fas fa-quote-left fa-2x text-gray-700"></i> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos eius quidem maxime repudiandae vero, nemo nihil, officiis dignissimos quaerat nostrum molestiae libero aperiam dolore ratione hic at alias vitae? Eveniet.
                        <i class="fas fa-quote-right text-gray-700"></i>
                    </p>
                    <p class=" mt-3 text-sm">23/4/2020</p>
                </div>
            </div>
        </div>
        <div class=" col-span-3 lg:col-span-1">
            <x-testimonial.academic/>
            <x-testimonial.course/>
        </div>
    </div>


</section>
