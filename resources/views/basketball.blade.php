@extends('layouts/app')

@section('title', 'Category Basketball')

@section('content')
    @include('layouts/navbar')
    <div class="banner bg-main text-center" style="padding:300px">
        <h1>Basketball</h1>
    </div>
    <div class="container">
        <h1 class="text-center">Pilih Lapangan Basket</h1>
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
            </div>
            <div class="col">
                <div class="main-search">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button type="submit" class="btn btn-outline-primary">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="bg-light">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="product-card">
                            <a href="/product/{{ $product->id }}">
                                <img src="/picture/basket4.jpeg" alt="{{ $product->name }}" />
                                <h1 class="name">{{ $product->name }}</h1>
                                <span class="price">{{ $product->price }}</span>
                                <p class="open_hours">{{ $product->open_hours }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col text-center">
                    <button class="btn btn-primary" type="submit">Load more...</button>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
@endsection
