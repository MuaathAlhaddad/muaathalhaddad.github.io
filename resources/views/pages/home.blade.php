@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="page-content">

        @include('components.home.slider')

        @include('components.home.why-choose-us')

        @include('components.home.services')

        @include('components.home.achieved')

        @include('components.home.services-features')

        @include('components.home.clients')

        {{-- Our Warehouses --}}
        @include('components.home.projects')

        @include('components.home.blog')

        @include('components.home.contact')

    </div>
@endsection
