@extends('layouts.front.app')

@section('og')
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection

@section('content')
    @include('layouts.front.home-slider')
    <div class="container">
        <div class="row" style="margin-top: 50px; margin-bottom:50px;">
            <div class="col-md-4 text-center">
                <p><i class="fa fa-check" aria-hidden="true"></i> <strong>Unique Everything</strong></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-4 text-center">
                <p><i class="fa fa-check" aria-hidden="true"></i> <strong>Trusted Brands</strong></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-4 text-center">
                <p><i class="fa fa-check" aria-hidden="true"></i> <strong>Secure Shopping</strong></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, nam?</p>
            </div>
        </div>
    </div>
    @if(!$cat1->products->isEmpty())
        <section class="new-product t100 home">
            <div class="container">
                <div class="section-title b50">
                    <p >{{ $cat1->name }}</p>
                </div>
                @include('front.products.product-list', ['products' => $cat1->products->where('status', 1)])
                <div id="browse-all-btn"> <a class="btn btn-default browse-all-btn" href="{{ route('front.category.slug', $cat1->slug) }}" role="button">browse all items</a></div>
            </div>
        </section>
    @endif
    @if(!$cat2->products->isEmpty())
        <div class="container">
            <div class="section-title" style="margin-bottom:40px;">
                <h2 style="font-family:graphik;"><strong>{{ $cat2->name }}</strong></h2>
            </div>
            @include('front.products.product-list', ['products' => $cat2->products->where('status', 1)])
            <div id="browse-all-btn"> <a class="btn btn-default browse-all-btn" href="{{ route('front.category.slug', $cat2->slug) }}" role="button">browse all items</a></div>
        </div>
    @endif
    <hr />
    <div style="background: #FF883E; height: 250px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 style="color:white; font-family:graphik; margin-top:40px; margin-bottom:25px;"><strong>We keep you safe</strong></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <p class="text-light" style="font-size:19px"><strong>Trustworthy sellers</strong></p>
                    <p class="text-light">You can read their reviews and policies, and contact them with any questions</p>
                </div>
                <div class="col-md-4 text-center">
                    <p class="text-light"><strong>World-class security</strong></p>
                    <p class="text-light">Safeguarding your information is the top priority of our dedicated security experts</p>
                </div>
                <div class="col-md-4 text-center">
                    <p class="text-light"><strong>Purchase protection</strong></p>
                    <p class="text-light">If anything goes wrong, our global support team has got your back</p>
                </div>
            </div>
        </div>
    </div>
    @include('mailchimp::mailchimp')
    <div style="margin-bottom: 160px;"></div>
@endsection