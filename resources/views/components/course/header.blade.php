<section class=" font-roboto">
    <div class=" h-70vh bg-primary" id="nav-check">
        <div class="container relative flex flex-col md:flex-row items-center justify-center h-full mx-auto text-white z-10">
            <div class=" flex-1 text-center flex flex-col justify-end items-center">
                <img src="{{ asset('images/logo.svg') }}" class=" w-40 inline-block mb-2" alt="">
                <h1 class=" text-4xl font-bold text-center">iOffice 2016 + Qooco</h1>
            </div>
            <div class=" flex-1 relative w-4/5">
                <div>
                    <img src="{{ asset('images/02.jpg') }}" class=" object-cover" alt="">
                </div>
                <div class=" absolute top-0 left-0 w-full h-full flex items-center justify-center">
                    <a href="#"><i class="fas fa-play-circle fa-3x"></i></a>
                </div>
            </div>
        </div>
        <div class=" absolute top-0 left-0 h-70vh w-full bg-cover bg-fixed blur" style="background-image: url({{ asset('images/02.jpg') }})">
        </div>
        <div class=" absolute top-0 left-0 h-70vh w-full gradient-slide"></div>
    </div>
    <div class=" fixed w-full h-full top-0 left-0 z-max flex items-center justify-center hidden" id="youtube-model">
        <div class=" w-4/5 mx-auto">
            <div class="embed-responsive aspect-ratio-16/9">
                    <iframe class=" embed-responsive-item " src="https://www.youtube.com/embed/NR1D-L2YwbM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class=" container mx-auto grid grid-cols-5 gap-3 mt-5">
        <div class=" col-span-5 md:col-span-3">
            <div class=" bg-white p-4 rounded">
                <h3 class=" text-xl font-medium mb-3">Description</h3>
                <div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum tempora molestiae expedita ut rerum dicta blanditiis sint cum dolores quae maxime quos nisi eaque, at iure doloribus esse magni quia.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum tempora molestiae expedita ut rerum dicta blanditiis sint cum dolores quae maxime quos nisi eaque, at iure doloribus esse magni quia.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum tempora molestiae expedita ut rerum dicta blanditiis sint cum dolores quae maxime quos nisi eaque, at iure doloribus esse magni quia.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum tempora molestiae expedita ut rerum dicta blanditiis sint cum dolores quae maxime quos nisi eaque, at iure doloribus esse magni quia.</p>
                </div>
            </div>
        </div>
        <div class=" col-span-5 md:col-span-2">
            <div class=" bg-white p-4 rounded">
                <h3 class=" text-xl font-medium mb-3">What you'll learn</h3>
                <div class=" text-gray-700">
                    <ul class=" grid grid-cols-2">
                        <li class=" mb-2"><a href="#"><i class="fas fa-check"></i> Windows 7</a></li>
                        <li class=" mb-2"><a href="#"><i class="fas fa-check"></i> Windows 7</a></li>
                        <li class=" mb-2"><a href="#"><i class="fas fa-check"></i> Windows 7</a></li>
                        <li class=" mb-2"><a href="#"><i class="fas fa-check"></i> Windows 7</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=" bg-white p-4 rounded mt-4 container mx-auto">
        <h3 class=" text-xl font-medium mb-3">Time Table</h3>
        <div class=" flex flex-col">
            <div class=" px-2">
                <ul class=" flex justify-center flex-wrap">
                    <li class=" inline-block"><a href="#" class="course-center-list course-center-list-active">ပန်းဆိုးတန်း</a></li>
                    <li class=" inline-block"><a href="#" class="course-center-list ">ပန်းဆိုးတန်း</a></li>
                    <li class=" inline-block"><a href="#" class="course-center-list ">ပန်းဆိုးတန်း</a></li>
                    <li class=" inline-block"><a href="#" class="course-center-list ">ပန်းဆိုးတန်း</a></li>
                    <li class=" inline-block"><a href="#" class="course-center-list ">ပန်းဆိုးတန်း</a></li>
                    <li class=" inline-block"><a href="#" class="course-center-list ">ပန်းဆိုးတန်း</a></li>
                    <li class=" inline-block"><a href="#" class="course-center-list ">ပန်းဆိုးတန်း</a></li>
                </ul>
            </div>
            <div class=" flex-1">
                <div class=" overflow-auto">
                    <table class=" w-full course-table mt-6">
                        <thead>
                            <tr>
                                <th class="course-static-header"></th>
                                <th class=" course-table-header">12 - Mar - 2020</th>
                                <th class=" course-table-header">12 - Mar - 2020</th>
                                <th class=" course-table-header">12 - Mar - 2020</th>
                                <th class=" course-table-header">12 - Mar - 2020</th>
                            </tr>
                        </thead>
                        <tbody class=" text-center">
                            <tr>
                                <th>Time</th>
                                <td>01:00 PM - 02:30 PM</td>
                                <td>07:00 AM - 08:30 AM</td>
                                <td>07:00 AM - 08:30 AM</td>
                                <td>07:00 AM - 08:30 AM</td>
                            </tr>
                            <tr>
                                <th>Available User</th>
                                <td>12 Students</td>
                                <td>13 Students</td>
                                <td>13 Students</td>
                                <td>13 Students</td>
                            </tr>
                            <tr>
                                <th>Section</th>
                                <td>Mon - Fri</td>
                                <td>Sat - Sun</td>
                                <td>Sat - Sun</td>
                                <td>Sat - Sun</td>
                            </tr>
                            <tr>
                                <th>Promotion</th>
                                <td>30% Discount</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th>Fees</th>
                                <td>20000</td>
                                <td>20000</td>
                                <td>20000</td>
                                <td>20000</td>
                            </tr>
                            <tr>
                                <th></th>
                                <td><a href="#" class=" enroll-btn">Enroll</a></td>
                                <td><a href="#" class=" enroll-btn">Enroll</a></td>
                                <td><a href="#" class=" enroll-btn">Enroll</a></td>
                                <td><a href="#" class=" enroll-btn">Enroll</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class=" flex flex-col md:flex-row mt-6 px-8">
                    <div class=" flex-1">
                        <p class="mb-6"><i class="fas fa-location-arrow "></i> Location : <span>No.(174-182), Pansodan Road(Middle Block), Kyauktada Township, Yangon</span></p>
                        <p class="mb-6"><i class="fas fa-phone-alt"></i> Phone : <span>01-381123, 381776, 38105, 391286, 391287</span></p>
                        <p class="mb-6"><i class="fas fa-fax"></i> Fax : <span>375334</span></p>
                    </div>
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m20!1m8!1m3!1d7640.0614867556005!2d96.161841!3d16.775146!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m3!3m2!1d16.7754336!2d96.1616693!4m3!3m2!1d16.7751459!2d96.1618412!5e0!3m2!1sen!2smm!4v1596987465192!5m2!1sen!2smm" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" fixed w-full h-full top-0 left-0 z-max flex bg-black bg-opacity-25 items-center justify-center hidden">
        <div class=" bg-white w-3/5 shadow rounded">
            <h3 class=" text-lg bg-secondary text-white px-6 py-4 rounded-t">Windows 7</h3>
            <div class=" p-6 overflow-auto max-h-16">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga dolorum cupiditate quod hic ducimus, ex necessitatibus tempora, aut sit reprehenderit eaque! Sed hic amet nulla tenetur, consequuntur sint nesciunt consequatur.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga dolorum cupiditate quod hic ducimus, ex necessitatibus tempora, aut sit reprehenderit eaque! Sed hic amet nulla tenetur, consequuntur sint nesciunt consequatur.
            </div>
            <hr>
            <div class=" px-6 py-2 text-right">
                <button class=" btn-secondary">Close</button>
            </div>
        </div>
    </div>

    <div class=" z-max fixed top-0 left-0 bg-black bg-opacity-50 w-full h-full flex items-center justify-center hidden">
        <div class=" bg-white grid grid-cols-1 md:grid-cols-2 w-11/12 md:w-auto rounded">
            <div class=" relative">
                <a href="#" class=" absolute top-0 left-0 text-primary p-2"><i class="fas fa-times-circle"></i></a>
                <img src="{{ asset('images/02.jpg') }}" class=" w-full md:w-64 h-full object-cover rounded-t md:rounded-l" alt="">
            </div>
            <div class=" grid grid-cols-1 gap-4">
                <h3 class=" font-bold bg-secondary text-white py-4 text-center rounded-none md:rounded-tr">Registration Form</h3>
                <div class=" mx-4 py-3">
                    <form action="#" class=" grid grid-cols-1 gap-3">
                        <input type="text" placeholder="Name" class=" enroll-input">
                        <input type="text" placeholder="Phone" class=" enroll-input">
                        <input type="mail" placeholder="Email" class=" enroll-input">
                        <textarea placeholder="Message" class=" enroll-input"></textarea>
                        <div class=" flex justify-around">
                            <button>Cancel</button>
                            <button type="submit" class=" enroll-btn">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
