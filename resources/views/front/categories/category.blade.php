@extends('layouts.front.app')

@section('og')
    <meta property="og:type" content="category"/>
    <meta property="og:title" content="{{ $category->name }}"/>
    <meta property="og:description" content="{{ $category->description }}"/>
    @if(!is_null($category->cover))
        <meta property="og:image" content="{{ asset("storage/$category->cover") }}"/>
    @endif
@endsection

@section('content')
    {{-- <div class="row">
        <div class="category-image">
            @if(isset($category->cover))
                <img src="{{ asset("storage/$category->cover") }}" alt="{{ $category->name }}" class="img-responsive" />
            @else
                <img src="https://placehold.it/1200x200" alt="{{ $category->cover }}" class="img-responsive" />
            @endif
        </div>
    </div> --}}
    <div class="container b100">
        
        <div class="row">
            <div class="category-top col-md-12 t25">
                <h2>{{ $category->name }}</h2>
                <p>{!! $category->description !!}</p>
            </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-md-3">
            <h3>Items</h3>
            @include('front.categories.sidebar-category')
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="row">
                    <div class="col-md-3 pull-right b20">
                        <select name="" id="" class=" form-control col-md-3">
                            <option value="">Sort: Popular</option>
                            <option value="">Sort: Relevance</option>
                        </select>
                    </div>
                </div>
                @include('front.products.product-list', ['products' => $products])
            </div>
        </div>
        </div>
    </div>
@endsection
