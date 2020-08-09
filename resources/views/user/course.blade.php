@extends('user.layouts.app')

@section('content')
    <x-course.header/>
    <x-whykmd/>
@endsection

@push('js')
    <script src="{{ asset('js/homestagger.js') }}"></script>
@endpush
