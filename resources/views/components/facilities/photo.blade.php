<div class=" w-4/5 mx-auto mt-10" id="photoBox">
    <div class=" grid grid-rows-2 md:grid-cols-4 gap-2">
        <div class=" relative col-span-2 row-span-2 photo-box" @click="showModal('/images/02.jpg')">
            <img src="{{ asset('images/02.jpg') }}" class=" photo-card " alt="">
            <div class=" photo-zoom">
                <img src="{{ asset('images/logo.svg') }}" class=" h-10" alt="">
            </div>
        </div>
        <div class=" relative photo-box" @click="showModal('/images/02.jpg')">
            <img src="{{ asset('images/02.jpg') }}" class=" photo-card " alt="">
            <div class=" photo-zoom">
                <img src="{{ asset('images/logo.svg') }}" class=" h-10" alt="">
            </div>
        </div>
        <div class=" relative photo-box" @click="showModal('/images/02.jpg')">
            <img src="{{ asset('images/02.jpg') }}" class=" photo-card " alt="">
            <div class=" photo-zoom">
                <img src="{{ asset('images/logo.svg') }}" class=" h-10" alt="">
            </div>
        </div>
        <div class=" relative photo-box" @click="showModal('/images/02.jpg')">
            <img src="{{ asset('images/02.jpg') }}" class=" photo-card " alt="">
            <div class=" photo-zoom">
                <img src="{{ asset('images/logo.svg') }}" class=" h-10" alt="">
            </div>
        </div>
    </div>
    <div v-if="showM" class=" fixed w-full h-full top-0 left-0 z-max flex items-center justify-center" @click.self="showM = false" id="youtube-model">
        <img v-bind:src="imgSrc" alt="">
    </div>
</div>
@push('js')
    <script type="text/javascript" src="{{ asset('js/photo.js') }}"></script>
@endpush
