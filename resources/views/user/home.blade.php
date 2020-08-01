@extends('user.layouts.app')

@section('content')
    <x-slide-show/>
    <x-education-service/>
    <x-quotes/>
    <x-home-course/>
    <x-home-blog/>
    <x-education-partner/>
    <x-whykmd/>
@endsection

@push('js')
    <script src="{{ asset('js/homestagger.js') }}"></script>
@endpush
