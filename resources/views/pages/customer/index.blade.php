@extends('layouts.customer')

@section('content')
    {{-- HERO SECTION --}}
    @include('pages.customer.partials.hero')
    {{-- HERO SECTION END --}}

    {{-- CATEGORIES SECTION --}}
    @include('pages.customer.partials.categories')
    {{-- CATEGORIES SECTION END --}}

    {{-- BENEFIT SECTION --}}
    {{-- @include('pages.customer.partials.benefit') --}}
    {{-- BENEFIT SECTION END --}}

    {{-- CATEGORIES BY BRAND --}}
    @include('pages.customer.partials.by-budget')
    {{-- CATEGORIES BY BRAND END --}}

    {{-- FLASH SALE --}}
    @include('pages.customer.partials.flash-sale')
    {{-- FLASH SALE END --}}

    {{-- HOMEPAGE CONTENT --}}
    {{-- @include('pages.customer.partials.homepage-content') --}}
    {{-- HOMEPAGE CONTENT END --}}

    {{-- BEST SELLER --}}
    {{-- @include('pages.customer.partials.best-seller') --}}
    {{-- BEST SELLER END --}}

    {{-- BY BRAND --}}
    @include('pages.customer.partials.by-brand')
    {{-- BY BRAND END --}}
@endsection
