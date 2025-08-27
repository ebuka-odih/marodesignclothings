@extends('pages.layout.app2')

@section('title', 'Welcome')

@section('content')
@php
    // Define the numbered image files from media folder
    $sliderImages = [
        '1.jpeg',
        '2.jpeg',
        '3.jpeg',
        '4.jpeg',
        '5.jpeg',
        '6.jpeg'
    ];
@endphp

<!-- Quick View Popup Modal -->
<div class="shop-single-section popup-quick-view">
        <div class="shop-product-single">
            <a href="#" title="" class="close-popup">
                <img src="images/close2.png" alt="" />
            </a>
            <div class="shop-product-main-image">
                <span class="pr-bar">new</span>
                <div class="cart-product-large-slider">
                    <div class="cart-product-large-image">
                        <img src="images/resource/jacket1.png" alt="" />
                    </div>
                    <div class="cart-product-large-image">
                        <img src="images/resource/jacket2.png" alt="" />
                    </div>
                    <div class="cart-product-large-image">
                        <img src="images/resource/jacket3.png" alt="" />
                    </div>
                </div>
            </div>
            <div class="shop-product-single-info">
                <h3><a href="shop-single.html" title="">Studiofit Light Grey Hooded Jacket</a></h3>
                <div class="prod-ratings">
                    <ul class="ratings">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>4.5</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel turpis non, vulputate luctus ex. </p>
                <div class="price">
                    <span>$25.45</span>
                    <del>$35.00</del>
                </div>
                <div class="size-colors">
                    <div class="product-size">
                        <span>Size</span>
                        <a href="#" title="">size guide</a>
                        <ul class="size-list">
                            <li class="active">l</li>
                            <li>m</li>
                            <li>s</li>
                            <li>xl</li>
                            <li>xll</li>
                        </ul>
                    </div>
                    <div class="product-colors">
                        <span>color</span>
                        <ul class="colors-list">
                            <li class="active">
                                <span class="clr1"></span>
                            </li>
                            <li>
                                <span class="clr2"></span>
                            </li>
                            <li>
                                <span class="clr3"></span>
                            </li>
                            <li>
                                <span class="clr4"></span>
                            </li>
                            <li>
                                <span class="clr5"></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="cart-items-add">
                    <div class="quantity">
                        <button class="plus-btn" type="button" name="button">
                            <i class="fa fa-plus"></i>
                        </button>
                        <input type="text" name="name" value="1" aria-autocomplete="list">
                        <button class="minus-btn" type="button" name="button">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <a href="shop-single.html" title="" class="theme-btn">buy now</a>
                    <a href="#" title="" class="theme-btn">add to cart</a>
                </div>
                <div class="cart-product-thumb-slider">
                    <div class="cart-product-thumb">
                        <img src="images/resource/jacket1.png" alt="" />
                    </div>
                    <div class="cart-product-thumb">
                        <img src="images/resource/jacket2.png" alt="" />
                    </div>
                    <div class="cart-product-thumb">
                        <img src="images/resource/jacket3.png" alt="" />
                    </div>
                </div>
                <div class="promo">
                    <img src="images/vt.png" alt="" />
                    50% off Studiofit Light Grey Hooded Jacket code FGLPW245
                </div>
            </div>
        </div><!--shop-product-singele-->
    </div><!--shop-single-section-->

    <section class="main-slider-v2">
        <div class="slider-nav">
            <div class="main-slider-slide">
                <img src="images/resource/main-banner1.jpg" alt=""  class="animated" data-animation-in="zoomInImage" />
                <div class="main-slider-content">
                    <span>Haute Couture</span>
                    <h1>New Arrivals</h1>
                    <p>Porem ipsum dolor sit amet consectetur </p>
                    <a href="shop-single.html" title="" class="theme-btn">buy now</a>
                </div>
            </div><!--main-slider-slide-->
            <div class="main-slider-slide">
                <img src="images/resource/main-banner2.jpg" alt=""  class="animated" data-animation-in="zoomInImage" />
                <div class="main-slider-content">
                    <span>Haute Couture</span>
                    <h1>New Arrivals</h1>
                    <p>Porem ipsum dolor sit amet consectetur </p>
                    <a href="shop-single.html" title="" class="theme-btn">buy now</a>
                </div>
            </div><!--main-slider-slide-->
            <div class="main-slider-slide">
                <img src="images/resource/main-banner3.jpg" alt=""  class="animated" data-animation-in="zoomInImage" />
                <div class="main-slider-content">
                    <span>Haute Couture</span>
                    <h1>New Arrivals</h1>
                    <p>Porem ipsum dolor sit amet consectetur </p>
                    <a href="shop-single.html" title="" class="theme-btn">buy now</a>
                </div>
            </div><!--main-slider-slide-->
        </div>
        <div class="slider-dots-box"></div>
    </section><!--main-slider-->
    
 
    <section class="about-section-v2">
        <div class="container">
            <div class="about-content-v2">
                <h2>Style is the <img src="images/resource/c1.png" alt="" /> perfection  <img src="images/resource/c2.png" alt="" /> point of view <img src="images/resource/c3.png" alt="" /></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel turpis non, vulputate luctus ex. Phasellus pharetra ut dolor ac rutrum. Curabitur molestie nec mi in congue. Nam luctus ante quis urna molestie, ut venenatis diam sagittis. Nam ligula velit, </p>
                <a href="about.html" title="" class="theme-btn">about more</a>
            </div>
        </div>
    </section>

    <section class="lookbook-section-v2">
        <div class="container">
            <div class="lookbook-v2-slide">
                <div class="lookbook-v2 row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                        <div class="lookbook-inner wow fadeIn" data-wow-delay="200ms">
                            <img src="images/resource/book1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                        <div class="lookbook-inner wow fadeIn" data-wow-delay="400ms">
                            <img src="images/resource/book2.jpg" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                        <div class="lookbook-inner wow fadeIn" data-wow-delay="600ms">
                            <img src="images/resource/book3.jpg" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                        <div class="lookbook-inner wow fadeIn" data-wow-delay="800ms">
                            <img src="images/resource/book4.jpg" alt="" />
                        </div>
                    </div>

                </div>
                <h1 class="pb-text wow slideInUp">lookbook</h1>
            </div>
        </div>
    </section><!--lookbook-section-v2-->

    <section class="marquee-section v2 web-slides">
        <div class='marquee6' data-duration='17000' data-gap='10' data-duplicated='true' >
            <h2>The best fashion store can deliver</h2>
        </div>
    </section>

    <section class="category-section-v2">
        <div class="container-full">
            <div class="sec-title space-v2 wow fadeInUp">
                <h2>GLANCE Category</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel turpis</p>
            </div>
            <div class="categories-v2">
                <div class="swiper-container swiper3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="category-slide">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery1.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Men Clothing</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery2.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Men's Grooming</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery3.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Innerwear & Loungewear</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery4.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Accessories</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery5.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Sunglasses</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-slide">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery1.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Men Clothing</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery2.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Men's Grooming</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery3.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Innerwear & Loungewear</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery4.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Accessories</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery5.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Sunglasses</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-slide">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery1.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Men Clothing</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery2.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Men's Grooming</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery3.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Innerwear & Loungewear</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery4.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Accessories</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery5.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Sunglasses</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-slide">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery1.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Men Clothing</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery2.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Men's Grooming</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery3.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Innerwear & Loungewear</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery4.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Accessories</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery5.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Sunglasses</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-slide">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery1.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Men Clothing</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery2.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Men's Grooming</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery3.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Innerwear & Loungewear</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery4.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Accessories</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery5.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Sunglasses</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-slide">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery1.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Men Clothing</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery2.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Men's Grooming</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery3.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Innerwear & Loungewear</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery4.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Accessories</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="category-v2">
                                            <div class="category-v2-img">
                                                <img src="images/resource/gallery5.jpg" alt="" />
                                            </div>
                                            <h3><a href="shop-single.html" title="">Sunglasses</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- scrollbar -->
                    <div class="swiper-scrollbar v3">
                        <span class="swiper-scrollbar-drag"><span class="drag-inner">DISCOVER MORE</span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-view-section">
        <div class="container-fluid">
            <div class="product-view-banner">
                <h2>Sports</h2>
                <h2 class="v2">Glance</h2>
                <div class="product-view-slider">
                    <div class="product-view-slide">
                        <div class="product-card">
                            <span>Deodorant</span>
                            <h3><a href="shop-single.html" title="">Women's Perfume</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper lacus id libero porta blandit. </p>
                            <div class="price">
                                <span>$25.45</span>
                                <del>$35.00</del>
                            </div>
                            <div class="cart-items-add">
                                <div class="quantity">
                                    <button class="plus-btn" type="button" name="button">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    <input type="text" name="name" value="1">
                                    <button class="minus-btn" type="button" name="button">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <a href="shop-single.html" title="" class="theme-btn">buy now</a>
                            </div>
                        </div>
                        <div class="product-view-image">
                            <img src="images/resource/product-img1.png" alt="" />
                        </div>
                    </div><!--product-view-slides-->
                    <div class="product-view-slide">
                        <div class="product-card">
                            <span>Deodorant</span>
                            <h3><a href="shop-single.html" title="">Women's Perfume</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper lacus id libero porta blandit. </p>
                            <div class="price">
                                <span>$25.45</span>
                                <del>$35.00</del>
                            </div>
                            <div class="cart-items-add">
                                <div class="quantity">
                                    <button class="plus-btn" type="button" name="button">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    <input type="text" name="name" value="1">
                                    <button class="minus-btn" type="button" name="button">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <a href="shop-single.html" title="" class="theme-btn">buy now</a>
                            </div>
                        </div>
                        <div class="product-view-image">
                            <img src="images/resource/product-img3.png" alt="" />
                        </div>
                    </div><!--product-view-slides-->
                    <div class="product-view-slide">
                        <div class="product-card">
                            <span>Deodorant</span>
                            <h3><a href="shop-single.html" title="">Women's Perfume</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper lacus id libero porta blandit. </p>
                            <div class="price">
                                <span>$25.45</span>
                                <del>$35.00</del>
                            </div>
                            <div class="cart-items-add">
                                <div class="quantity">
                                    <button class="plus-btn" type="button" name="button">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    <input type="text" name="name" value="1">
                                    <button class="minus-btn" type="button" name="button">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <a href="shop-single.html" title="" class="theme-btn">buy now</a>
                            </div>
                        </div>
                        <div class="product-view-image">
                            <img src="images/resource/product-img1.png" alt="" />
                        </div>
                    </div><!--product-view-slides-->
                </div><!--product-view-slider-->
            </div>
        </div>
    </section><!--product-view-section-->

    <section class="marquee-section v2">
        <div class='marquee' data-duration='17000' data-gap='10' data-duplicated='true' >
            <h2>The best fashion store can deliver</h2>
        </div>
    </section>

    <section class="collection-section v2">
        <div class="container-fluid">
            <div class="sec-title space-v2 wow slideInUp">
                <h2>new collection</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel turpis</p>
            </div>
            <div class="product-categories v2 without-slide row">
                <div class="col-lg-2">
                    <div class="product-cat">
                        <div class="product-img">
                            <img src="images/resource/ct1.jpg" alt="">
                            <span class="pro-category">new</span>
                        </div>
                        <div class="product-hover-info">
                            <div class="product-hover-head">
                                <ul class="pt-links">
                                    <li>new</li>
                                    <li>sales</li>
                                </ul>
                                <a href="#" title="" class="fvrt-product"><img src="images/icons/heart.svg" alt="" /></a>
                            </div>
                            <div class="product-info-hover">
                                <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                                <span>Loues Vuitto</span>
                                <div class="pricee">
                                    <span>$25.45</span>
                                </div>
                                <ul class="pro-colors">
                                    <li class="clr1"></li>
                                    <li class="clr2"></li>
                                    <li class="clr3"></li>
                                    <li class="clr4"></li>
                                </ul>
                                <ul class="variations">
                                    <li>s</li>
                                    <li>m</li>
                                    <li>l</li>
                                </ul>
                                <ul class="pro-buttons">
                                    <li><a href="#" title="" class="theme-btn">quick add</a></li>
                                    <li><a href="#" title="" class="theme-btn quick-view-btn">quick view</a></li>
                                </ul>
                            </div>
                        </div><!--product-hover-info-->
                        <div class="product-info">
                            <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                            <span class="product-price">$25.45</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="product-cat">
                        <div class="product-img">
                            <img src="images/resource/ct2.jpg" alt="">
                            <span class="pro-category">new</span>
                        </div>
                        <div class="product-hover-info">
                            <div class="product-hover-head">
                                <ul class="pt-links">
                                    <li>new</li>
                                    <li>sales</li>
                                </ul>
                                <a href="#" title="" class="fvrt-product"><img src="images/icons/heart.svg" alt="" /></a>
                            </div>
                            <div class="product-info-hover">
                                <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                                <span>Loues Vuitto</span>
                                <div class="pricee">
                                    <span>$25.45</span>
                                </div>
                                <ul class="pro-colors">
                                    <li class="clr1"></li>
                                    <li class="clr2"></li>
                                    <li class="clr3"></li>
                                    <li class="clr4"></li>
                                </ul>
                                <ul class="variations">
                                    <li>s</li>
                                    <li>m</li>
                                    <li>l</li>
                                </ul>
                                <ul class="pro-buttons">
                                    <li><a href="#" title="" class="theme-btn">quick add</a></li>
                                    <li><a href="#" title="" class="theme-btn quick-view-btn">quick view</a></li>
                                </ul>
                            </div>
                        </div><!--product-hover-info-->
                        <div class="product-info">
                            <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                            <span class="product-price">$25.45</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="product-cat">
                        <div class="product-img">
                            <img src="images/resource/col1.jpg" alt="">
                            <span class="pro-category">new</span>
                        </div>
                        <div class="product-hover-info">
                            <div class="product-hover-head">
                                <ul class="pt-links">
                                    <li>new</li>
                                    <li>sales</li>
                                </ul>
                                <a href="#" title="" class="fvrt-product"><img src="images/icons/heart.svg" alt="" /></a>
                            </div>
                            <div class="product-info-hover">
                                <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                                <span>Loues Vuitto</span>
                                <div class="pricee">
                                    <span>$25.45</span>
                                </div>
                                <ul class="pro-colors">
                                    <li class="clr1"></li>
                                    <li class="clr2"></li>
                                    <li class="clr3"></li>
                                    <li class="clr4"></li>
                                </ul>
                                <ul class="variations">
                                    <li>s</li>
                                    <li>m</li>
                                    <li>l</li>
                                </ul>
                                <ul class="pro-buttons">
                                    <li><a href="#" title="" class="theme-btn">quick add</a></li>
                                    <li><a href="#" title="" class="theme-btn quick-view-btn">quick view</a></li>
                                </ul>
                            </div>
                        </div><!--product-hover-info-->
                        <div class="product-info">
                            <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                            <span class="product-price">$25.45</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="product-cat">
                        <div class="product-img">
                            <img src="images/resource/ct4.jpg" alt="">
                            <span class="pro-category">new</span>
                        </div>
                        <div class="product-hover-info">
                            <div class="product-hover-head">
                                <ul class="pt-links">
                                    <li>new</li>
                                    <li>sales</li>
                                </ul>
                                <a href="#" title="" class="fvrt-product"><img src="images/icons/heart.svg" alt="" /></a>
                            </div>
                            <div class="product-info-hover">
                                <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                                <span>Loues Vuitto</span>
                                <div class="pricee">
                                    <span>$25.45</span>
                                </div>
                                <ul class="pro-colors">
                                    <li class="clr1"></li>
                                    <li class="clr2"></li>
                                    <li class="clr3"></li>
                                    <li class="clr4"></li>
                                </ul>
                                <ul class="variations">
                                    <li>s</li>
                                    <li>m</li>
                                    <li>l</li>
                                </ul>
                                <ul class="pro-buttons">
                                    <li><a href="#" title="" class="theme-btn">quick add</a></li>
                                    <li><a href="#" title="" class="theme-btn quick-view-btn">quick view</a></li>
                                </ul>
                            </div>
                        </div><!--product-hover-info-->
                        <div class="product-info">
                            <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                            <span class="product-price">$25.45</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="product-cat">
                        <div class="product-img">
                            <img src="images/resource/ct5.jpg" alt="">
                            <span class="pro-category">new</span>
                        </div>
                        <div class="product-hover-info">
                            <div class="product-hover-head">
                                <ul class="pt-links">
                                    <li>new</li>
                                    <li>sales</li>
                                </ul>
                                <a href="#" title="" class="fvrt-product"><img src="images/icons/heart.svg" alt="" /></a>
                            </div>
                            <div class="product-info-hover">
                                <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                                <span>Loues Vuitto</span>
                                <div class="pricee">
                                    <span>$25.45</span>
                                </div>
                                <ul class="pro-colors">
                                    <li class="clr1"></li>
                                    <li class="clr2"></li>
                                    <li class="clr3"></li>
                                    <li class="clr4"></li>
                                </ul>
                                <ul class="variations">
                                    <li>s</li>
                                    <li>m</li>
                                    <li>l</li>
                                </ul>
                                <ul class="pro-buttons">
                                    <li><a href="#" title="" class="theme-btn">quick add</a></li>
                                    <li><a href="#" title="" class="theme-btn quick-view-btn">quick view</a></li>
                                </ul>
                            </div>
                        </div><!--product-hover-info-->
                        <div class="product-info">
                            <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                            <span class="product-price">$25.45</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="product-cat">
                        <div class="product-img">
                            <img src="images/resource/ct6.jpg" alt="">
                            <span class="pro-category">new</span>
                        </div>
                        <div class="product-hover-info">
                            <div class="product-hover-head">
                                <ul class="pt-links">
                                    <li>new</li>
                                    <li>sales</li>
                                </ul>
                                <a href="#" title="" class="fvrt-product"><img src="images/icons/heart.svg" alt="" /></a>
                            </div>
                            <div class="product-info-hover">
                                <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                                <span>Loues Vuitto</span>
                                <div class="pricee">
                                    <span>$25.45</span>
                                </div>
                                <ul class="pro-colors">
                                    <li class="clr1"></li>
                                    <li class="clr2"></li>
                                    <li class="clr3"></li>
                                    <li class="clr4"></li>
                                </ul>
                                <ul class="variations">
                                    <li>s</li>
                                    <li>m</li>
                                    <li>l</li>
                                </ul>
                                <ul class="pro-buttons">
                                    <li><a href="#" title="" class="theme-btn">quick add</a></li>
                                    <li><a href="#" title="" class="theme-btn quick-view-btn">quick view</a></li>
                                </ul>
                            </div>
                        </div><!--product-hover-info-->
                        <div class="product-info">
                            <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                            <span class="product-price">$25.45</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="product-cat">
                        <div class="product-img">
                            <img src="images/resource/ct7.jpg" alt="">
                            <span class="pro-category">new</span>
                        </div>
                        <div class="product-hover-info">
                            <div class="product-hover-head">
                                <ul class="pt-links">
                                    <li>new</li>
                                    <li>sales</li>
                                </ul>
                                <a href="#" title="" class="fvrt-product"><img src="images/icons/heart.svg" alt="" /></a>
                            </div>
                            <div class="product-info-hover">
                                <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                                <span>Loues Vuitto</span>
                                <div class="pricee">
                                    <span>$25.45</span>
                                </div>
                                <ul class="pro-colors">
                                    <li class="clr1"></li>
                                    <li class="clr2"></li>
                                    <li class="clr3"></li>
                                    <li class="clr4"></li>
                                </ul>
                                <ul class="variations">
                                    <li>s</li>
                                    <li>m</li>
                                    <li>l</li>
                                </ul>
                                <ul class="pro-buttons">
                                    <li><a href="#" title="" class="theme-btn">quick add</a></li>
                                    <li><a href="#" title="" class="theme-btn quick-view-btn">quick view</a></li>
                                </ul>
                            </div>
                        </div><!--product-hover-info-->
                        <div class="product-info">
                            <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                            <span class="product-price">$25.45</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="product-cat">
                        <div class="product-img">
                            <img src="images/resource/ct8.jpg" alt="">
                            <span class="pro-category">new</span>
                        </div>
                        <div class="product-hover-info">
                            <div class="product-hover-head">
                                <ul class="pt-links">
                                    <li>new</li>
                                    <li>sales</li>
                                </ul>
                                <a href="#" title="" class="fvrt-product"><img src="images/icons/heart.svg" alt="" /></a>
                            </div>
                            <div class="product-info-hover">
                                <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                                <span>Loues Vuitto</span>
                                <div class="pricee">
                                    <span>$25.45</span>
                                </div>
                                <ul class="pro-colors">
                                    <li class="clr1"></li>
                                    <li class="clr2"></li>
                                    <li class="clr3"></li>
                                    <li class="clr4"></li>
                                </ul>
                                <ul class="variations">
                                    <li>s</li>
                                    <li>m</li>
                                    <li>l</li>
                                </ul>
                                <ul class="pro-buttons">
                                    <li><a href="#" title="" class="theme-btn">quick add</a></li>
                                    <li><a href="#" title="" class="theme-btn quick-view-btn">quick view</a></li>
                                </ul>
                            </div>
                        </div><!--product-hover-info-->
                        <div class="product-info">
                            <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                            <span class="product-price">$25.45</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="product-cat">
                        <div class="product-img">
                            <img src="images/resource/ct9.jpg" alt="">
                            <span class="pro-category">new</span>
                        </div>
                        <div class="product-hover-info">
                            <div class="product-hover-head">
                                <ul class="pt-links">
                                    <li>new</li>
                                    <li>sales</li>
                                </ul>
                                <a href="#" title="" class="fvrt-product"><img src="images/icons/heart.svg" alt="" /></a>
                            </div>
                            <div class="product-info-hover">
                                <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                                <span>Loues Vuitto</span>
                                <div class="pricee">
                                    <span>$25.45</span>
                                </div>
                                <ul class="pro-colors">
                                    <li class="clr1"></li>
                                    <li class="clr2"></li>
                                    <li class="clr3"></li>
                                    <li class="clr4"></li>
                                </ul>
                                <ul class="variations">
                                    <li>s</li>
                                    <li>m</li>
                                    <li>l</li>
                                </ul>
                                <ul class="pro-buttons">
                                    <li><a href="#" title="" class="theme-btn">quick add</a></li>
                                    <li><a href="#" title="" class="theme-btn quick-view-btn">quick view</a></li>
                                </ul>
                            </div>
                        </div><!--product-hover-info-->
                        <div class="product-info">
                            <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                            <span class="product-price">$25.45</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="product-cat">
                        <div class="product-img">
                            <img src="images/resource/ct10.jpg" alt="">
                            <span class="pro-category">new</span>
                        </div>
                        <div class="product-hover-info">
                            <div class="product-hover-head">
                                <ul class="pt-links">
                                    <li>new</li>
                                    <li>sales</li>
                                </ul>
                                <a href="#" title="" class="fvrt-product"><img src="images/icons/heart.svg" alt="" /></a>
                            </div>
                            <div class="product-info-hover">
                                <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                                <span>Loues Vuitto</span>
                                <div class="pricee">
                                    <span>$25.45</span>
                                </div>
                                <ul class="pro-colors">
                                    <li class="clr1"></li>
                                    <li class="clr2"></li>
                                    <li class="clr3"></li>
                                    <li class="clr4"></li>
                                </ul>
                                <ul class="variations">
                                    <li>s</li>
                                    <li>m</li>
                                    <li>l</li>
                                </ul>
                                <ul class="pro-buttons">
                                    <li><a href="#" title="" class="theme-btn">quick add</a></li>
                                    <li><a href="#" title="" class="theme-btn quick-view-btn">quick view</a></li>
                                </ul>
                            </div>
                        </div><!--product-hover-info-->
                        <div class="product-info">
                            <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                            <span class="product-price">$25.45</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--collection-section-->

    <section class="glance-banner">
        <div class="video-intro wow fadeInUp">
            <video id="video1" controls autoplay="autoplay" loop muted>
                <source src="media/v1.mp4" type="video/mp4"/>
                Your browser does not support the video tag.
            </video>
        </div>
    </section>   
    <section class="testimonial-section-v2">
        <div class="container-full">
            <div class="sec-title space-v2 wow fadeInUp">
                <h2>client testimonials</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel turpis</p>
            </div>
            <div class="row testi-v2-slider wow slideInUp">
                <div class="col-lg-4">
                    <div class="testi2-slide">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. In luctus leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel turpis</p>
                        <div class="testi2-info">
                            <img src="images/resource/author1.png" alt="" />
                            <h4>Arbaz Ali</h4>
                        </div>
                    </div><!--testi2-slide-->
                </div>
                <div class="col-lg-4">
                    <div class="testi2-slide">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. In luctus leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel turpis</p>
                        <div class="testi2-info">
                            <img src="images/resource/author2.png" alt="" />
                            <h4>Arbaz Ali</h4>
                        </div>
                    </div><!--testi2-slide-->
                </div>
                <div class="col-lg-4">
                    <div class="testi2-slide">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. In luctus leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel turpis</p>
                        <div class="testi2-info">
                            <img src="images/resource/author3.png" alt="" />
                            <h4>Arbaz Ali</h4>
                        </div>
                    </div><!--testi2-slide-->
                </div>
                <div class="col-lg-4">
                    <div class="testi2-slide">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. In luctus leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel turpis</p>
                        <div class="testi2-info">
                            <img src="images/resource/author1.png" alt="" />
                            <h4>Arbaz Ali</h4>
                        </div>
                    </div><!--testi2-slide-->
                </div>
                <div class="col-lg-4">
                    <div class="testi2-slide">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. In luctus leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel turpis</p>
                        <div class="testi2-info">
                            <img src="images/resource/author2.png" alt="" />
                            <h4>Arbaz Ali</h4>
                        </div>
                    </div><!--testi2-slide-->
                </div>
                <div class="col-lg-4">
                    <div class="testi2-slide">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. In luctus leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel turpis</p>
                        <div class="testi2-info">
                            <img src="images/resource/author3.png" alt="" />
                            <h4>Arbaz Ali</h4>
                        </div>
                    </div><!--testi2-slide-->
                </div>
            </div>
        </div>
    </section><!--testimonial-section-v2-->

    <section class="trending-section-v2">
        <div class="container">
            <div class="sec-title space-v2 wow fadeInUp">
                <h2>trending of the week</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel turpis</p>
            </div>
            <div class="trending-slider wow slideInUp">
                <div class="trending-slide">
                    <div class="trending-img">
                        <img src="images/resource/trending1.jpg" alt="" />
                        <div class="trending-caption-v2">
                            <div class="trending-thumb">
                                <img src="images/resource/trending2.jpg" alt="" />
                            </div>
                            <h3><a href="shop-single.html" title="">Sunglasses</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur </p>
                            <div class="price">
                                <span>$25.45 <del>$35.00</del></span>
                            </div>
                        </div>
                    </div>
                    <div class="trending-img-v2">
                        <img src="images/resource/trending3.png" alt="" />
                        <div class="featured-hover">
                            <span class="hvr"></span>
                            <div class="hvr-content">
                                <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                                <span class="price">$25.45</span>
                                <ul class="varies">
                                    <li>S</li>
                                    <li>m</li>
                                    <li>l</li>
                                </ul>
                                <a href="#" title="" class="quick-add">quick add</a>
                            </div>
                        </div>
                        <div class="featured-hover v2">
                            <span class="hvr"></span>
                            <div class="hvr-content">
                                <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                                <span class="price">$25.45</span>
                                <ul class="varies">
                                    <li>S</li>
                                    <li>m</li>
                                    <li>l</li>
                                </ul>
                                <a href="#" title="" class="quick-add">quick add</a>
                            </div>
                        </div>
                        <div class="featured-hover v3">
                            <span class="hvr"></span>
                            <div class="hvr-content">
                                <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                                <span class="price">$25.45</span>
                                <ul class="varies">
                                    <li>S</li>
                                    <li>m</li>
                                    <li>l</li>
                                </ul>
                                <a href="#" title="" class="quick-add">quick add</a>
                            </div>
                        </div>
                        <div class="featured-hover v5">
                            <span class="hvr"></span>
                            <div class="hvr-content">
                                <h3><a href="shop-single.html" title="">Casual Jacket</a></h3>
                                <span class="price">$25.45</span>
                                <ul class="varies">
                                    <li>S</li>
                                    <li>m</li>
                                    <li>l</li>
                                </ul>
                                <a href="#" title="" class="quick-add">quick add</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--trending-section-v2-->


    <section class="brand-section v2">
        <div class="container">
            <div class="pt-logos">
                <div class="pt-logo wow fadeIn">
                    <img src="images/resource/pt1.png" alt="" />
                </div>
                <div class="pt-logo wow fadeIn" data-wow-delay="300ms">
                    <img src="images/resource/pt2.png" alt="" />
                </div>
                <div class="pt-logo wow fadeIn" data-wow-delay="500ms">
                    <img src="images/resource/pt3.png" alt="" />
                </div>
                <div class="pt-logo wow fadeIn" data-wow-delay="700ms">
                    <img src="images/resource/pt4.png" alt="" />
                </div>
                <div class="pt-logo wow fadeIn" data-wow-delay="900ms">
                    <img src="images/resource/pt5.png" alt="" />
                </div>
            </div>
        </div>
    </section><!--brand-section-->

    <section class="collection-new">
        <div class="container-fluid">
            <div class="title-clt wow slideInUp">
                <h2>The joy <img src="images/resource/cl1.png" alt="" /> of dressing <img src="images/resource/cl2.png" alt="" /> is an art</h2>
            </div>
            <div class="flex-container wow slideInUp">
                <div class="flex-slide accessories">
                    <h2>accessories</h2>
                    <div class="flex-content">
                        <h3>Blazer</h3>
                        <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                        <a href="shop-single.html" title="" class="theme-btn">shop now</a>
                    </div>
                </div>
                <div class="flex-slide fashion">
                    <h2>fashion</h2>
                    <div class="flex-content">
                        <h3>Blazer</h3>
                        <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                        <a href="shop-single.html" title="" class="theme-btn">shop now</a>
                    </div>
                </div>
                <div class="flex-slide sneekers">
                    <h2>sneakers</h2>
                    <div class="flex-content">
                        <h3>Blazer</h3>
                        <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                        <a href="shop-single.html" title="" class="theme-btn">shop now</a>
                    </div>
                </div>
                <div class="flex-slide blazer">
                    <h2>Blazer</h2>
                    <div class="flex-content">
                        <h3>Blazer</h3>
                        <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                        <a href="shop-single.html" title="" class="theme-btn">shop now</a>
                    </div>
                </div>
                <div class="flex-slide polo">
                    <h2>Polo shirt</h2>
                    <div class="flex-content">
                        <h3>Blazer</h3>
                        <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                        <a href="shop-single.html" title="" class="theme-btn">shop now</a>
                    </div>
                </div>
                <div class="flex-slide bag">
                    <h2>Hand bag</h2>
                    <div class="flex-content">
                        <h3>Blazer</h3>
                        <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                        <a href="shop-single.html" title="" class="theme-btn">shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> 

<!-- Custom JavaScript removed to prevent null reference errors -->

<script>
// Comprehensive fix for overlay issues
document.addEventListener('DOMContentLoaded', function() {
    console.log('Index page loaded successfully');
    
    // Function to remove overlay classes
    function removeOverlayClasses() {
        const pageWrapper = document.querySelector('.page-wrapper');
        if (pageWrapper) {
            if (pageWrapper.classList.contains('overlay') || 
                pageWrapper.classList.contains('page-overlay') ||
                pageWrapper.classList.contains('overlay-remove')) {
                pageWrapper.classList.remove('overlay', 'page-overlay', 'overlay-remove');
            }
        }
    }
    
    // Remove overlay classes immediately
    removeOverlayClasses();
    
    // Check for any active popup modals and remove them
    const popupModals = document.querySelectorAll('.popup-quick-view, .subscribe-popup');
    popupModals.forEach(modal => {
        if (modal.classList.contains('active')) {
            console.log('Removing active class from popup:', modal.className);
            modal.classList.remove('active');
        }
    });
    
    // Hide any loading elements
    const loadingElements = document.querySelectorAll('.loading');
    loadingElements.forEach(loading => {
        if (loading.style.display !== 'none') {
            console.log('Hiding loading element');
            loading.style.display = 'none';
        }
    });
    
    // Override jQuery addClass to prevent overlay classes (one-time setup)
    if (window.jQuery) {
        const originalAddClass = window.jQuery.fn.addClass;
        window.jQuery.fn.addClass = function(className) {
            if (typeof className === 'string' && 
                (className.includes('overlay') || className.includes('page-overlay'))) {
                // Silently prevent overlay classes without console spam
                return this;
            }
            return originalAddClass.call(this, className);
        };
    }
    
    console.log('Comprehensive overlay protection applied');
});
</script>
@endsection 