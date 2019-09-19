@extends('layouts.app')

@section('title')
    Product: {{$product->name}}
@endsection

@section('content')
    <div class="product mt-5">
        <div class="container">
            <div class="row">

                <!-- Product Image -->
                <div class="col-lg-6">
                    <div class="product_image_slider_container">
                        <img src="http://images.pushsquare.com/44d8c567ed72a/cyberpunk-2077s-cover-featuring-male-v.large.jpg">
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-6 product_col">
                    <div class="product_info">
                        <h2>{{$product->name}}</h2>
                        <div class="product_category">{{$product->studio}}</div>
                        <div class="product_category">Genre: {{$product->genre}}</div>
                        <div class="product_price mb-3">&euro;{{$product->getPrice()}}</div>
                        <div class="product_text">
                            <p>{{$product->description}}</p>
                        </div>
                        <div class="product_buttons">
                            <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                <div class="w-100 product_button product_cart text-center d-flex flex-column align-items-center justify-content-center ">
                                    <div class="newsletter_button position-relative">+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection