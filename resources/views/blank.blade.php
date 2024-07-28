@extends('layouts.master')

@section('title', 'Contact Us')

@section('styles')
    <!-- Additional styles for this page -->
    <style>
        /* Custom styles specific to this page */
    </style>
@endsection


@section('banner')
    <img src="{{ asset('assets/images/banner/24.jpg') }}" alt="banner" uk-cover>
@endsection


@section('content')


 

@endsection

@section('modals')
    @include('partials.modals')
@endsection

@section('footer')
    @include('partials.footer')
@endsection



@section('scripts')

@endsection