<section class=" font-roboto">
    <section class=" font-roboto relative" id="nav-check">
        <div class=" container mx-auto h-70vh relative">
            <div class="absolute w-full lg:w-2/4 h-full z-10 flex items-center">
                <div class=" bg-white w-full shadow-lg px-4 lg:px-6 py-4 lg:py-8 rounded">
                    <h2 class=" text-2xl mb-2">Faculties and departments</h2>
                    <div class=" bg-primary h-1 w-1/3 mb-4"></div>
                    <p class=" mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione quidem quis delectus cum soluta aliquid placeat eos quo itaque repellat, ad id deserunt rerum omnis nam autem earum fugiat qui?</p>
                </div>
            </div>
        </div>
        <div class="absolute top-0 w-full lg:w-4/6 h-full right-0 bg-cover bg-no-repeat" style="background-image: url({{ asset('images/03.jpg') }});">
        </div>
    </section>


    <div class=" container mx-auto mt-6">
        <div class="">
            <div class=" grid grid-cols-1 md:grid-cols-2 mt-2 ">
                <a href="#">
                    <div class=" faculties-box">
                        <img src="{{ asset('images/02.jpg') }}" class=" w-full object-cover" alt="">
                        <div class=" absolute bottom-0 right-0 w-full bg-blue-700 text-center text-white p-3">
                            <h2 class=" text-xl">International Diploma and Degrees Department</h2>
                        </div>
                    </div>
                </a>
                <div class=" flex flex-col justify-evenly mt-2 md:mt-0">
                    <div class=" flex items-center mt-2 md:mt-0">
                        <div class=" w-16 h-1 bg-blue-700"></div>
                        <a href="#">
                            <div class="department-box">
                                <img src="{{ asset('images/02.jpg') }}" class=" w-24 rounded shadow-md border border-white" alt="">
                                <p class=" ml-2">HND Department</p>
                            </div>
                        </a>
                    </div>
                    <div class=" flex items-center mt-2 md:mt-0">
                        <div class=" w-16 h-1 bg-blue-700"></div>
                        <a href="#">
                            <div class="department-box">
                                <img src="{{ asset('images/02.jpg') }}" class=" w-24 rounded shadow-md border border-white" alt="">
                                <p class=" ml-2">HND Department</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class=" grid grid-cols-1 md:grid-cols-2 mt-4">
                <a href="#" class=" order-none md:order-1">
                    <div class=" faculties-box">
                        <img src="{{ asset('images/02.jpg') }}" class=" w-full object-cover" alt="">
                        <div class=" absolute bottom-0 right-0 w-full bg-blue-700 text-center text-white p-3">
                            <h2 class=" text-xl">International Diploma and Degrees Department</h2>
                        </div>
                    </div>
                </a>
                <div class=" flex flex-col justify-evenly">
                    <div class=" flex items-center justify-end mt-2 md:mt-0">
                        <div class=" w-16 h-1 bg-blue-700 order-2"></div>
                        <a href="#">
                            <div class=" department-box">
                                <img src="{{ asset('images/02.jpg') }}" class=" w-24 rounded shadow-md border border-white" alt="">
                                <p class=" ml-2">HND Department</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
