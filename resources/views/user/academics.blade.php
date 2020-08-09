@extends('user.layouts.app')

@section('content')
    <x-academics.header/>
    <x-academics.courses/>
    <x-whykmd/>
@endsection

@push('js')
    <script src="{{ asset('js/homestagger.js') }}"></script>
@endpush
