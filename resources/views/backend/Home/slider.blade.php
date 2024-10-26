@extends('backend.partials.layout')

@section('title')
    الاسليدر
@endsection

@section('css')
    <link href="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">
@endsection

@section('page-content')

@endsection
@section('js')
    <script src="{{ asset('backend/assets/libs/dropzone/min/dropzone.min.js')}}"></script>
    <!-- Sweet Alerts js -->
    <script src="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <!-- Sweet alert init js-->
    <script src="{{ asset('backend/assets/js/pages/custom-alerts.js')}}"></script>
    <script src="{{ asset('backend/assets/js/pages/alert.init.js')}}"></script>
@endsection
