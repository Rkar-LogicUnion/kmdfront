@extends('user.layouts.app')

@section('content')
    <x-service.service/>
    <x-whykmd/>
@endsection

@push('js')
    <script src="{{ asset('js/homestagger.js') }}"></script>
@endpush
