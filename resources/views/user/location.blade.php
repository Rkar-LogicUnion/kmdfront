@extends('user.layouts.app')

@section('content')
    <x-location.location/>
    <x-whykmd/>
@endsection

@push('js')
    <script src="{{ asset('js/homestagger.js') }}"></script>
    <script src="{{ asset('js/location.js') }}"></script>
@endpush
@push('css')
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmR74BZ0H5dGQoKkRxcyBzMh8G7U0An4k&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
@endpush
