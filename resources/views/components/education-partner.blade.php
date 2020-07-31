<section class=" w-full md:w-9/12 mx-auto text-center font-roboto mt-8">
    <h2 class=" text-3xl">Education Partners</h2>
    <p class=" font-thin">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod culpa beatae exercitationem iusto fugiat et numquam, minima quisquam optio libero, eos impedit ducimus adipisci vel omnis, quis atque! Natus, consequuntur!</p>

    <div class=" mt-5">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide text-center bg-white" style="width: 200px">
                    <img src="{{ asset('images/21.jpg') }}" class=" h-32 inline-block" alt="">
                </div>
                <div class="swiper-slide text-center bg-white" style="width: 200px">
                    <img src="{{ asset('images/21.jpg') }}" class=" h-32 inline-block" alt="">
                </div>
                <div class="swiper-slide text-center bg-white" style="width: 200px">
                    <img src="{{ asset('images/21.jpg') }}" class=" h-32 inline-block" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@push('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
@endpush
@push('js')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/educationpartner.js') }}" defer></script>
@endpush
