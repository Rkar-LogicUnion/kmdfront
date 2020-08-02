<section class="h-max bg-red-200 flex flex-col md:grid md:grid-cols-2 md:gap-4" id="nav-check">
    <div class=" w-screen h-screen absolute top-0 left-0 ">
        <img src="{{ asset('images/03.jpg') }}" class=" w-screen h-screen object-cover slide-stagger3 slide-img" alt="">
    </div>
    <div class=" w-screen h-screen absolute top-0 left-0 gradient-slide none"></div>

    <div class=" z-10 h-screen flex items-center justify-center flex-col">
        <img src="{{ asset('images/logo.svg') }}" class=" w-64 slide-stagger" alt="" >
        <img src="{{ asset('images/03.jpg') }}" class="object-cover shadow-2xl slide-stagger block md:hidden slide-img" alt="">
        <div class=" w-full md:w-2/3 text-center text-white pt-4 font-roboto">
            <h4 class=" text-3xl mb-4 slide-stagger" id="slide-title">One Stop for All IT Needs</h4>
            <p class=" text-lg mb-4 font-thin slide-stagger" id="slide-description">KMD Group of Companies has been successfully delivering solutions for all technology needs of Industries. With the experience of 30+ years, KMD has established itself as</p>
            <a href="#" class="btn-primary slide-stagger" id="slide-link">Read More</a>
        </div>
    </div>

    <div class=" hidden md:flex items-center z-10">
        <img src="{{ asset('images/03.jpg') }}" class="object-cover shadow-2xl slide-stagger2 slide-img" alt="">
    </div>

</section>

@push('js')
    <script src="{{ asset('js/slideshow.js') }}" defer></script>
@endpush

@push('css')
    <style>
        .slide-stagger3{
            filter: blur(5px);
        }
    </style>
@endpush
