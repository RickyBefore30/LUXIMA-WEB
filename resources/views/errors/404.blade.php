@extends('layouts.master')

@section('title', '404')

@section('styles')
    <!-- Additional styles for this page -->
    <style>
        /* Custom styles specific to this page */
    </style>
@endsection

@section('banner', '1.jpg')


@section('content')


 <!-- MAIN CONTENT -->
 <div class="page-content">
    <!-- isi content disini -->
        <div class="uk-section-default">
            <div class="uk-section uk-background-cover uk-background-primary uk-overflow-hidden uk-light uk-flex" style="background-image: url(assets/images/404.jpg); height:80vh"
             uk-parallax="bgy: -500; saturate: 200;" uk-height-viewport="offset-top: true;" >

            <h1 class="uk-heading-xlarge uk-margin-auto uk-margin-auto-vertical">404</h1>

            </div>
            </div>
        </div>
    <!-- akhir konten -->
    </div>

@endsection

@section('modals')
    @include('partials.modals')
@endsection

@section('footer')
    @include('partials.footer')
@endsection



@section('scripts')

@endsection