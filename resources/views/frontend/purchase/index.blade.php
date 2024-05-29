@extends('frontend.layouts.master')

@section('title', 'purchase')

@section('content')
    <style>
        button {
            position: relative;
            border: none;
            background: transparent;
            padding: 0;
            cursor: pointer;
            outline-offset: 4px;
            transition: filter 250ms;
            user-select: none;
            touch-action: manipulation;
        }

        .shadow {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 12px;
            background: hsl(0deg 0% 0% / 0.25);
            will-change: transform;
            transform: translateY(2px);
            transition: transform 600ms cubic-bezier(0.3, 0.7, 0.4, 1);
        }

        .edge {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 12px;
            background: linear-gradient(to left,
                    hsl(340deg 100% 16%) 0%,
                    hsl(340deg 100% 32%) 8%,
                    hsl(340deg 100% 32%) 92%,
                    hsl(340deg 100% 16%) 100%);
        }

        .front {
            display: block;
            position: relative;
            padding: 12px 27px;
            border-radius: 12px;
            font-size: 1.1rem;
            color: white;
            background: hsl(345deg 100% 47%);
            will-change: transform;
            transform: translateY(-4px);
            transition: transform 600ms cubic-bezier(0.3, 0.7, 0.4, 1);
        }

        button:hover {
            filter: brightness(110%);
        }

        button:hover .front {
            transform: translateY(-6px);
            transition: transform 250ms cubic-bezier(0.3, 0.7, 0.4, 1.5);
        }

        button:active .front {
            transform: translateY(-2px);
            transition: transform 34ms;
        }

        button:hover .shadow {
            transform: translateY(4px);
            transition: transform 250ms cubic-bezier(0.3, 0.7, 0.4, 1.5);
        }

        button:active .shadow {
            transform: translateY(1px);
            transition: transform 34ms;
        }

        button:focus:not(:focus-visible) {
            outline: none;
        }

        .container-making {
            max-width: 1024px;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .img-section {
            flex: 1 1 100%;
            max-width: 48%;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .img-section img {
            width: 100%;
            border-radius: 6px;
        }

        .img-gallery {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .img-gallery img {
            cursor: pointer;
            transition: transform 0.2s;
            width: 100px;
            height: 75px;
        }

        .img-gallery img:hover {
            transform: scale(1.05);
        }

        .product-details {
            flex: 1 1 100%;
            max-width: 48%;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .product-title {
            font-size: 24px;
            font-weight: bold;
        }

        .price {
            font-size: 20px;
            color: #dc2626;
            font-weight: 600;
        }

        .rating {
            color: #f59e0b;
            font-size: 18px;
        }

        .sku,
        .availability,
        .description,
        .size-label {
            color: #4b5563;
            font-size: 14px;
        }

        .size-select {
            width: 100%;
            padding: 8px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            transition: border-color 0.2s;
        }

        .size-select:focus {
            border-color: #6366f1;
            outline: none;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity-control button {
            color: #4b5563;
            background: none;
            border: none;
            cursor: pointer;
            transition: color 0.2s;
        }

        .quantity-control button:hover {
            color: #1f2937;
        }

        .quantity-control input {
            width: 50px;
            text-align: center;
            padding: 4px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            transition: border-color 0.2s;
        }

        .quantity-control input:focus {
            border-color: #6366f1;
            outline: none;
        }

        .add-to-cart {
            background-color: #dc2626;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .add-to-cart:hover {
            background-color: #b91c1c;
        }

        @media (max-width: 768px) {

            .img-section,
            .product-details {
                max-width: 100%;
            }
        }
    </style>


    <main>
        <!-- section -->
        <section>
            <div class="container-making my-4">
                <div class="img-section">
                    <img src="image/dress2.jpeg" width="400" height="300" class="main-img" />
                    <div class="img-gallery">
                        <img src="image/dress.webp" class="thumbnail" />
                        <img src="image/dress3.jpg" class="thumbnail" />
                        <img src="{{ asset('img/dress2.jpeg') }}" class="thumbnail" />
                    </div>
                </div>
                <div class="product-details">
                    <h2 class="product-title">Inner Feel Comfortable</h2>
                    <p class="price">Rs. 2,000</p>
                    <div class="rating">★★★★★</div>
                    <p class="sku">SKU: DX4233001</p>
                    <p class="availability">AVAILABILITY: Limited Stock</p>
                    <p class="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia
                        natus similique in sed officia, nam aspernatur cupiditate corporis
                        architecto eligendi, pariatur atque expedita distinctio ducimus
                        nostrum! Expedita totam ut vero.
                    </p>
                    <div>
                        <label for="size-select" class="size-label">SIZE:</label>
                        <select id="size-select" class="size-select">
                            <option>Select Size...</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                    </div>
                    <div class="quantity-control">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </button>
                    </div>
                    <button>
                        <span class="shadow"></span>
                        <span class="edge"></span>
                        <span class="front text">Add to Cart </span>
                    </button>
                </div>
            </div>
        </section>
    </main>


@endsection
