<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Little Closet template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

<!-- Menu -->

<div class="menu">

    <!-- Search -->
    <div class="menu_search">
        <form action="#" id="menu_search_form" class="menu_search_form">
            <input type="text" class="search_input" placeholder="Search Item" required="required">
            <button class="menu_search_button"><img
                        src="../../../../Users/Soufiane/Downloads/littlecloset/images/search.png" alt=""></button>
        </form>
    </div>

</div>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="header_overlay"></div>
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div class="logo">
                <a href="{{route('products.index')}}">
                    <div class="d-flex flex-row align-items-center justify-content-start">
                        <div>Gaming Webshop</div>
                    </div>
                </a>
            </div>
            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
            <nav class="main_nav">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    @if(auth()->check() && auth()->user()->isAdmin())
                        <li><a href="{{route('admin.home')}}">CMS</a></li>
                        <li><a href="{{route('login')}}">Profile</a></li>
                        <li><a href="{{route('logout')}}">Logout</a></li>
                    @elseif(auth()->check())
                        <li><a href="{{route('login')}}">Profile</a></li>
                        <li><a href="{{route('logout')}}">Logout</a></li>
                    @else
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                    @endif
                </ul>
            </nav>
            <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
                <!-- Search -->
                <div class="header_search">
                    <form action="#" id="header_search_form">
                        <input type="text" class="search_input" placeholder="Search Item" required="required">
                    </form>
                </div>
            </div>
            <div id="shopping_cart_button">
                <button class="btn btn-primary">Shopping cart &bigtriangledown;</button>

                <div id="shopping_cart" class="position-absolute bg-light p-3 border" style="display: none"></div>
            </div>
        </div>
    </header>

    <div class="super_container_inner">
        <div class="super_overlay"></div>

        <!-- Content -->
        <div class="mt-5 py-5">
            @yield('content')
        </div>

        <!-- Footer -->

        <footer class="footer">
            <div class="footer_bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
                                <div class="copyright order-md-1 order-2">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                    All rights reserved |
                                    Made by Soufiane Loukan
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>

<script>

    let shoppingCartProducts = [];

    if (localStorage.getItem('cart_items') !== null) {
        shoppingCartProducts = JSON.parse(localStorage.getItem('cart_items'));
        updateCart();
    }

    function addProductToCart(product) {
        if (product.classList.contains('newsletter_button')) {
            product = product.parentElement
        }
        if (shoppingCartProducts.indexOf(product) === -1) {
            shoppingCartProducts.push({id: product.id, name: product.attributes['data-title'].value})
        }
        localStorage.setItem('cart_items', JSON.stringify(shoppingCartProducts));
        updateCart();
    }

    document.querySelectorAll('.product_buttons').forEach((element) => {
        element.addEventListener('click', (element) => addProductToCart(element.target))
    });

    document.querySelector('#shopping_cart_button').addEventListener('click', () => {
        let shopping_cart = document.querySelector('#shopping_cart');
        if (shopping_cart.style.display === 'block') {
            shopping_cart.style.display = "none";
        } else {
            shopping_cart.style.display = "block";
        }
        updateCart()
    })
    function updateCart() {
        let shopping_cart = document.querySelector('#shopping_cart');
        shopping_cart.innerHTML = "";
        if (shoppingCartProducts.length) {
            shoppingCartProducts.forEach(product => {
                shopping_cart.innerHTML += '<div class="border-bottom p-1">' + product['name'] + '</div>';
            })
        } else {
            shopping_cart.innerHTML = "Winkelwagen is leeg.";
        }
    }
</script>
</body>
</html>