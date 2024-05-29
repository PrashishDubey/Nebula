@extends('frontend.layouts.master')

@section('title', 'Shop')


@section('content')
    <main>

        <section class="test-slider">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner d-flex justify-content-center align-items-center"
                            style="
                background-image: linear-gradient(
                    rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)
                  ),
                  url('{{ asset('img/sales.webp') }}');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
                width: 100%;
                height: 70vh;
                position: relative;
              ">
                            <div class="container banner-house text-white">
                                <h1>!!!! Shop Now !!!!</h1>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Aliquid sit inventore dolore aspernatur, fugit consequatur?
                                </p>
                                <button type="button" class="btn btn-outline-light">
                                    Learn more
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>


        <section>
            <div class="container-box">
                <div class="container my-4">
                    <div class="text-center">
                        <p style="font-size: x-large">Here's The Clothes You Want</p>
                    </div>

                    <div class="mt-1 text-center">
                        <b
                            style="
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode',
                  'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-size: xx-large;
              ">
                            Let’s Check Some Latest brand.<br /></b>
                        <p class="text-center"
                            style="
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode',
                  'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-size: xx-large;
              ">
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3rd section -->
        <section>
            <div class="container col-12">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-style">
                                <div class="thumb">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('img/dress2.jpeg') }}" alt="Product Image" />
                                    </div>
                                    <a>
                                        <span class="limit">Available</span>
                                    </a>
                                </div>
                                <div class="content text-left">
                                    <h6 class="title">
                                        <a>Lorem ipsum dolor sit.</a>
                                    </h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart">
                                            <a href="/purchase">
                                                <i class="icon-add-to-cat text-white bg-black"></i>
                                                Purchase
                                            </a>
                                        </div>
                                        <div class="content-cart">
                                            <a class="btn btn-dark" class="text-dark" role="button">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="new-price">Rs. 2150</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-style">
                                <div class="thumb">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('img/dress2.jpeg') }}" alt="Product Image" />
                                    </div>
                                    <a>
                                        <span class="limit">Available</span>
                                    </a>
                                </div>
                                <div class="content text-left">
                                    <h6 class="title">
                                        <a>Lorem ipsum dolor sit.</a>
                                    </h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart">
                                            <a href="">
                                                <i class="icon-add-to-cat text-white bg-black"></i>
                                                Purchase
                                            </a>
                                        </div>
                                        <div class="content-cart">
                                            <a class="btn btn-dark" class="text-dark" role="button">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="new-price">Rs. 2150</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-style">
                                <div class="thumb">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('img/dress2.jpeg') }}" alt="Product Image" />
                                    </div>
                                    <a>
                                        <span class="limit">Available</span>
                                    </a>
                                </div>
                                <div class="content text-left">
                                    <h6 class="title">
                                        <a>Lorem ipsum dolor sit.</a>
                                    </h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart">
                                            <a href="">
                                                <i class="icon-add-to-cat text-white bg-black"></i>
                                                Purchase
                                            </a>
                                        </div>
                                        <div class="content-cart">
                                            <a class="btn btn-dark" class="text-dark" role="button">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="new-price">Rs. 2150</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-style">
                                <div class="thumb">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('img/dress2.jpeg') }}" alt="Product Image" />
                                    </div>
                                    <a>
                                        <span class="limit">Available</span>
                                    </a>
                                </div>
                                <div class="content text-left">
                                    <h6 class="title">
                                        <a>Lorem ipsum dolor sit.</a>
                                    </h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart">
                                            <a href="">
                                                <i class="icon-add-to-cat text-white bg-black"></i>
                                                Purchase
                                            </a>
                                        </div>
                                        <div class="content-cart">
                                            <a class="btn btn-dark" class="text-dark" role="button">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="new-price">Rs. 2150</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-style">
                                <div class="thumb">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('img/dress2.jpeg') }}" alt="Product Image" />
                                    </div>
                                    <a>
                                        <span class="limit">Available</span>
                                    </a>
                                </div>
                                <div class="content text-left">
                                    <h6 class="title">
                                        <a>Lorem ipsum dolor sit.</a>
                                    </h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart">
                                            <a href="">
                                                <i class="icon-add-to-cat text-white bg-black"></i>
                                                Purchase
                                            </a>
                                        </div>
                                        <div class="content-cart">
                                            <a class="btn btn-dark" class="text-dark" role="button">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="new-price">Rs. 2150</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-style">
                                <div class="thumb">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('img/dress2.jpeg') }}" alt="Product Image" />
                                    </div>
                                    <a>
                                        <span class="limit">Available</span>
                                    </a>
                                </div>
                                <div class="content text-left">
                                    <h6 class="title">
                                        <a>Lorem ipsum dolor sit.</a>
                                    </h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart">
                                            <a href="">
                                                <i class="icon-add-to-cat text-white bg-black"></i>
                                                Purchase
                                            </a>
                                        </div>
                                        <div class="content-cart">
                                            <a class="btn btn-dark" class="text-dark" role="button">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="new-price">Rs. 2150</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-style">
                                <div class="thumb">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('img/dress2.jpeg') }}" alt="Product Image" />
                                    </div>
                                    <a>
                                        <span class="limit">Available</span>
                                    </a>
                                </div>
                                <div class="content text-left">
                                    <h6 class="title">
                                        <a>Lorem ipsum dolor sit.</a>
                                    </h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart">
                                            <a href="">
                                                <i class="icon-add-to-cat text-white bg-black"></i>
                                                Purchase
                                            </a>
                                        </div>
                                        <div class="content-cart">
                                            <a class="btn btn-dark" class="text-dark" role="button">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="new-price">Rs. 2150</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-style">
                                <div class="thumb">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('img/dress2.jpeg') }}" alt="Product Image" />
                                    </div>
                                    <a>
                                        <span class="limit">Available</span>
                                    </a>
                                </div>
                                <div class="content text-left">
                                    <h6 class="title">
                                        <a>Lorem ipsum dolor sit.</a>
                                    </h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart">
                                            <a href="">
                                                <i class="icon-add-to-cat text-white bg-black"></i>
                                                Purchase
                                            </a>
                                        </div>
                                        <div class="content-cart">
                                            <a class="btn btn-dark" class="text-dark" role="button">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="new-price">Rs. 2150</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4the section -->
        <section>
            <div class="delivery-area my-5">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <div class="single-delivery text-center shadow-sm">
                                <img width="48" height="48" src="image/d2.png" alt="safe-ok" />
                                <h6>Delivery</h6>
                                <p>Track or off orders</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-delivery text-center shadow-sm">
                                <img width="48" height="48" src="image/pay.png" alt="safe-ok" />
                                <h6>ONLINE PAYMENT</h6>
                                <p>Payment methods</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-delivery text-center shadow-sm">
                                <img width="48" height="48" src="image/locker.png" alt="safe-ok" />
                                <h6>100% SAFE</h6>
                                <p>View our benefits</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-deliverys text-center shadow-sm">
                                <img width="48" height="48" src="{{ asset('img/support.png') }}"alt="safe-ok" />
                                <h6>24/7 Support</h6>
                                <p>9811253638</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
