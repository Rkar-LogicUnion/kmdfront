@extends('user.layouts.app')

@section('content')
    <x-blog.header/>
    <x-blog.body/>
    <x-whykmd/>
@endsection

@push('js')
    <script src="{{ asset('js/homestagger.js') }}"></script>
@endpush
