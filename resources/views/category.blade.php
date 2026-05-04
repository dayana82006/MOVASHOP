@extends('layouts.mova')

@section('content')
<main class="main-scroll page-category">
    <section class="category-hero" style="--bg:url('{{ mova_media_url($category->imageUrl) }}')">
        <div class="category-hero__overlay"></div>
        <h1 class="category-hero__title">{{ $category->name }}</h1>
    </section>
    <section class="section category-placeholder">
        <p>Vista de categoría (<abbr title="Modelo Vista Controlador">MVC</abbr>): aquí cargarías productos desde el modelo <code>Product</code> filtrados por esta categoría.</p>
        <p><a class="section-link" href="{{ mova_page_href($movaBase, '/') }}">← Volver al inicio</a></p>
    </section>
</main>
@endsection
