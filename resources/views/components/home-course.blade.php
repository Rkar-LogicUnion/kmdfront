<section class=" w-full md:w-9/12 mx-auto text-center font-roboto mt-8 font-roboto">
    <h2 class=" text-3xl">Programs and Courses</h2>
    <p class=" font-thin">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod culpa beatae exercitationem iusto fugiat et numquam, minima quisquam optio libero, eos impedit ducimus adipisci vel omnis, quis atque! Natus, consequuntur!</p>
    <div class=" grid grid-cols-3 mt-5">
        <div>
            <a href="#" class=" inline-block">
                <div class=" text-left mb-5 p-3 home-course">
                    <h4 class=" text-lg mb-2">Computer Application Courses</h4>
                    <div class=" bg-secondary w-1/4 h-1 mb-2 home-course-line"></div>
                    <p class=" font-thin">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate animi quidem esse non architecto tenetur? Blanditiis asperiores necessitatibus itaque eaque nam possimus cupiditate mollitia sequi, eos beatae a? Ducimus, ad?</p>
                </div>
            </a>
            <a href="#" class=" inline-block">
                <div class=" text-left mb-5 p-3 home-course">
                    <h4 class=" text-lg mb-2">Computer Application Courses</h4>
                    <div class=" bg-secondary w-1/4 h-1 mb-2 home-course-line"></div>
                    <p class=" font-thin">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate animi quidem esse non architecto tenetur? Blanditiis asperiores necessitatibus itaque eaque nam possimus cupiditate mollitia sequi, eos beatae a? Ducimus, ad?</p>
                </div>
            </a>
            <a href="#" class=" inline-block">
                <div class=" text-left mb-5 p-3 home-course">
                    <h4 class=" text-lg mb-2">Computer Application Courses</h4>
                    <div class=" bg-secondary w-1/4 h-1 mb-2 home-course-line"></div>
                    <p class=" font-thin">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate animi quidem esse non architecto tenetur? Blanditiis asperiores necessitatibus itaque eaque nam possimus cupiditate mollitia sequi, eos beatae a? Ducimus, ad?</p>
                </div>
            </a>
        </div>
        <div>
            <div>
                <object id="my-svg" type="image/svg+xml" data="{{ asset('images/logo-2.svg') }}"></object>
            </div>
        </div>
        <div>
            <a href="#" class=" inline-block">
                <div class=" text-right mb-5 p-3 home-course">
                    <h4 class=" text-lg mb-2">Computer Application Courses</h4>
                    <div class=" bg-secondary w-1/4 h-1 mb-2 home-course-line inline-block"></div>
                    <p class=" font-thin">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate animi quidem esse non architecto tenetur? Blanditiis asperiores necessitatibus itaque eaque nam possimus cupiditate mollitia sequi, eos beatae a? Ducimus, ad?</p>
                </div>
            </a>
            <a href="#" class=" inline-block">
                <div class=" text-right mb-5 p-3 home-course">
                    <h4 class=" text-lg mb-2">Computer Application Courses</h4>
                    <div class=" bg-secondary w-1/4 h-1 mb-2 home-course-line inline-block"></div>
                    <p class=" font-thin">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate animi quidem esse non architecto tenetur? Blanditiis asperiores necessitatibus itaque eaque nam possimus cupiditate mollitia sequi, eos beatae a? Ducimus, ad?</p>
                </div>
            </a>
        </div>
    </div>
</section>
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.5/vivus.min.js" integrity="sha512-NBLGIjYyAoYAr23l+dmAcUv7TvFj0XrqZoFa4i1o+F2VvF9SrERyMD8BHNnJn1SEGjl1AouBDcCv/q52L3ozBQ==" crossorigin="anonymous"></script>
    <script>
        new Vivus('my-svg', { type:"delayed",duration: 1000 });
    </script>
@endpush
