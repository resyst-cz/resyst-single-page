@extends('layouts.app')

@section('title', $siteName . ' | ' . $siteSlogan)

@section('content')
    @include('aboutUs')
    @include('services')
    @include('contact')
@endsection
