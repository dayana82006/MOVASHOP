@extends('layouts.mova')

@section('content')
<main class="main-scroll main-scroll--home">
    @include('partials.hero-dual')
    @include('partials.home-moments')
    @include('partials.home-collections')
    @include('partials.home-favorites')
    @include('partials.home-benefits')
</main>
@endsection
