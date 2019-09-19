@extends('layouts.app')

@section('title')
    Producten
@endsection

@section('content')
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section_title text-center">Laatste games</div>
                </div>
            </div>
            <div class="row products_row">

            @foreach($products as $product)
                <!-- Product -->
                    <div class="col-xl-4 col-md-6">
                        <div class="product">
                            <div class="product_image p-3"><img src="http://images.pushsquare.com/44d8c567ed72a/cyberpunk-2077s-cover-featuring-male-v.large.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a
                                                        href="{{route('products.show', $product)}}">{{$product->name}}</a>
                                            </div>
                                            <div class="product_category">{{$product->studio}}</div>
                                        </div>
                                    </div>
                                    <div class="ml-auto text-right">
                                        <div class="product_price text-right">&euro;{{$product->getPrice()}}</div>
                                    </div>
                                </div>
                                <div class="product_buttons">
                                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                        <div class="w-100 product_button product_cart text-center d-flex flex-column align-items-center justify-content-center " data-title="{{$product->name}}" id="{{$product->id}}">
                                            <div class="newsletter_button position-relative">+</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection