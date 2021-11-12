@extends('layouts.master')
@section('title','About')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/about.css') }}">

@endsection

@section('content')
    <h2 class="text">This is about</h2>
    <img src="{{ url('image/leeminho5.jpg') }}" alt="">
@endsection

@section('js')
    <script src="{{ asset('js/about.js') }}"></script>
@endsection
