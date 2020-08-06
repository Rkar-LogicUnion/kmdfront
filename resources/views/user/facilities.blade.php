@extends('user.layouts.app')

@section('content')
    <x-facilities.header/>
    <x-facilities.category/>
    <x-whykmd/>
@endsection

@push('js')
    <script src="{{ asset('js/homestagger.js') }}"></script>
@endpush
