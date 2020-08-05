@extends('user.layouts.app')

@section('content')
    <x-testimonial.testimonial/>
    <x-whykmd/>
@endsection

@push('js')
    <script src="{{ asset('js/homestagger.js') }}"></script>
    {{-- <script src="{{ asset('js/testimonial.js') }}"></script> --}}
@endpush
