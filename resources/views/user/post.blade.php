@extends('user.layouts.app')

@section('content')
    <x-post.post/>
    <x-whykmd/>
@endsection

@push('js')
    <script src="{{ asset('js/homestagger.js') }}"></script>
@endpush
