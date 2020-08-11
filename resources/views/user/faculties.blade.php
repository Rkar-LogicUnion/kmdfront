@extends('user.layouts.app')

@section('content')
    <x-department.faculties/>
    <x-whykmd/>
@endsection

@push('js')
    <script src="{{ asset('js/homestagger.js') }}"></script>
@endpush
