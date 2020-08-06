@extends('user.layouts.app')

@section('content')
    <x-facilities.photo-header/>
    <x-facilities.photo/>
    <x-whykmd/>
@endsection

@push('js')
    <script src="{{ asset('js/homestagger.js') }}"></script>
@endpush
