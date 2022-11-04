<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haflo's Signature</title>

    <style>
        .container {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: #151b32;
            border: 1px solid rgba(209, 208, 213, 0.52);
            background-color: #F1F1F1;
            width: 100%;

        }

        .content {
            padding: 20px;
        }

        body {
            margin: 0px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            /* width: 100%; */
            padding-top: 1%;
            padding-bottom: 1%;
            padding-right: 20px;
            background-color: #000231;
            font-size: 20px;
        }

        .navbar_toggle {
            height: 35px;
            margin-left: 10px;
            margin-top: 7px;
        }

        .logo {
            margin-left: 20px;
            color: #ffffff;
            font-size: 25px;
            font-weight: bold;
            margin-top: 10px;
        }

        .logo_header {
            display: flex;
        }

        .main_nav {
            /* display: flex; */
            width: 60%;
            /* float: right; */
            margin-left: -50px;
            /* justify-content: space-between; */
            list-style: none;
        }

        .main_nav li:hover {
            /* border-radius: 50px; */
        }

        .main_nav li {
            display: inline;
            color: #ffffff;
        }

        .main_nav li a {
            color: #ffffff;
        }

        .logo_header {
            /* width: ; */
            /* justify-content: space-between; */
            display: flex;
            gap: 10px;
            /* margin-right: 2%; */
        }

        /* .navbar_toggle {
display: none;
} */
        /* .content {} */

        .search-btn {
            background-color: #1e54f6;
            border: none;
            color: white;
            border-radius: 5px;
            padding: 0px 10px 0px 10px;
            height: 30px;
            margin-top: 7px;
            font-weight: bold;
        }

        .search-btn:hover {
            box-shadow: 1px 1px 2px 2px #3d3d3d41;

        }

        .search {
            border-radius: 50px;
            border: 2px solid lightgray;
            padding: 3px 10px 3px 10px;
            height: 35px;
            width: 100%;
            /* margin: auto; */
            cursor: pointer;
            margin-top: 5px;
            /* margin-right: 50px;
            margin-left: -50px; */
        }

        .search:hover {
            border: 2px solid rgb(168, 168, 168);
        }

        .top {
            /* box-shadow: 0px 4px 5px 0px #c4c4c6ab; */
            /* height: 75px; */
            /* display: flex; */
            /* justify-content: space-between; */
            /* background-color: white; */

        }

        .grid {
            display: grid;
            grid-template-areas:
                "head1 head2 head3"
                "mid1 mid2 mid3"
                "foot1 foot2 foot3";
            gap: 7px;
            background-color: rgb(250, 250, 250);
            padding-top: 50px;
            width: 100%;
            padding-bottom: 60px;
            padding-left: 10px;
            padding-right: 10px;
            margin-top: -45px;
        }

        .title {
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            margin-bottom: -65px;
        }

        .body-container {
            display: block;
            padding: 20px;
            border-radius: 5px;
            border: 2px solid lightgray;
            background-color: #fbfcff;
            height: auto;
            width: 1fr;
            box-shadow: 2px 2px 3px 1px #b0b0b041;
        }

        .shopping-cart {
            /* background-color: #fbfcff; */

        }

        /* 
        .box:hover {
            box-shadow: 0px 0px 3px 3px #33333341;

        }

        .box .box1 {
            grid-area: head1;
        }

        .box .box2 {
            grid-area: head2;

        }

        .box .box3 {
            grid-area: head3;
        }

        .box .box4 {
            grid-area: foot1;
        }

        .box .box5 {
            grid-area: foot2;
        }

        .box .box6 {
            grid-area: foot3;
        } */

        /* .product-img {
            width: 1fr;
            height: 150px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .product-name {
            font-size: 12px;
            margin: auto;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin-bottom: -5px;
        }

        .product-price {
            margin-bottom: -10px;
            font-size: 15px;
            font-weight: bold;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .txt {
            display: none;

        }

        .rating {
            display: none;
        }

        .info {
            padding: 10px;
        }

        h3 {
            font-size: 13px;
            margin-left: -5px;

        } */
        .info {
            margin-left: 20px;
        }

        .remove-product {
            border: 0;
            padding: 4px 8px;
            background-color: #c66;
            color: #fff;
            font-size: 12px;
            border-radius: 3px;
            margin-top: -7px;
            height: 25px;


        }

        .remove-product:hover {
            background-color: #a44;
        }

        .checkout {
            border: none;
            margin-top: 20px;
            padding: 6px 25px;
            background-color: #6b6;
            color: #fff;
            font-size: 25px;
            border-radius: 3px;
            /* margin-left: 70%; */

            margin-bottom: 20px;
        }

        .check_box {}

        .checkout:hover {
            background-color: #494;
        }

        .product {
            /* margin-bottom: 20px; */
            /* padding-bottom: 10px; */
            display: flex;

        }

        /* .product-image {
    text-align: center;} */

        img {
            width: 150px;
        }


        .product-title {
            /* margin-left: 20px; */
            font-size: 17px;
            margin-bottom: 10px;
        }

        .product-quantity input {
            width: 50px;
            text-align: center;
            height: 20px;
            margin-bottom: 10px;
        }

        .product-line-price {
            margin-top:-15px;
            margin-left:-50px;
            display: flex;
            /* gap: 20px; */
            font-size: 16px;
            font-weight: 900;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .product-price {
            font-size: 16px;
            font-weight: 900;
            margin-bottom: 5px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .product-details-btm {
            display: inherit;
            gap: 20px;
        }
.eql_{
    margin-right: 15px;
}
        h1 {
            font-weight: 100;
        }

        .total {
            display: flex;
            gap: 50%;
        }

        .totals-item {
            float: right;
            clear: both;
            width: 100%;
        }

        .totals-value {
            float: right;
            width: 21%;
            text-align: right;
            font-weight: 600;

        }



        .footer {
            color: white;
        }

        .ft-top {
            display: flex;
            background-color: #282828;
            margin-top: -20px;
            padding-left: 30px;
            /* height: 55px; */
            margin: auto;
            gap: 20px;
        }

        .ft-bottom {
            margin: auto;
            background-color: #323232;
            display: flex;
            gap: 25px;
            padding-left: 17px;
        }

        .ft-txt {
            font-size: 15px;
            margin-top: -9px;
            font-weight: 700;
        }

        .about-txt1 {
            font-size: 13px;
        }

        .about-txt2 {
            font-size: 13px;
            margin-top: -10px;
        }

        .mail-icon {
            font-size: 15px;
            margin-top: 0;
            font-weight: bold;
        }

        .mail {
            font-size: 13px;
            margin-top: 1px;
        }

        .email {
            display: flex;
            gap: 10px;
            margin-top: -7px;
            margin-bottom: -37px;
        }

        .number {
            font-size: 12px;
        }

        .about-us {
            font-size: 11px;
            text-decoration: none;
            color: aliceblue;
        }

        .contact {
            font-size: 11px;
            text-decoration: none;
            color: aliceblue;
        }

        .fb {
            font-size: 11px;
            text-decoration: none;
            color: aliceblue;
        }

        /* *{
  margin: 0;
  padding: 0;
} */

        a {
            text-decoration: none;
        }


        @media(min-width:767px) {
            .container {
                /* padding-bottom: 50px; */
            }

            .content {
                padding-left: 70px;
                padding-right: 70px;
            }

            .search-btn {
                border-radius: 10px;
                margin-top: 3px;
                width: 100px;
                height: 40px;
                font-size: 14px;
            }

            .search {
                height: 45px;
                /* width: 400px; */
                margin: auto;
                margin-top: 2px;
                margin-bottom: 2px;
            }

            .nav-bar {
                margin-top: 12px;
            }

            .main_nav {
                gap: 17%;
                display: flex;
            }

            /* .top {
                height: 57px;
            } */

            .top-box {
                margin-top: -10px;
            }

            .logo {
                margin-left: 20px;
                font-size: 35px;
                margin-top: 5px;
            }

            .grid {
                display: grid;
                grid-template-areas:
                    "head1 head2 head3"
                    "mid1 mid2 mid3"
                    "foot1 foot2 foot3";
                gap: 13px;
            }

            .box {
                display: block;
                background-color: #fbfcff;
                border-radius: 10px;
                border: 2px solid lightgray;
            }

            .box .box1 {
                grid-area: head1;
            }

            .box .box2 {
                grid-area: head2;

            }

            .box .box3 {
                grid-area: mid1;
            }

            .box .box4 {
                grid-area: mid2;
            }

            .box .box5 {
                grid-area: foot1;
            }

            .box .box6 {
                grid-area: foot2;
            }

            .product-img {
                width: 100%;
                height: auto;
            }

            .stars {
                display: inherit;
                margin-top: 18px;
            }

            .star {
                width: 14px;
                height: 14px;
                display: inherit;
            }

            .txt {
                font-size: 10px;
                display: inherit;
            }

            .review-no {
                font-size: 12px;
                display: inherit;
            }

            .rating {
                display: flex;
                margin-bottom: -27px;
                gap: 7px;
            }

            h3 {
                font-size: 15px;
            }

            .info {
                padding-top: 17px;
                display: flex;
                gap: 20px;

            }
     
            .product-quantity input {
                margin-bottom: 5px;
                margin-top: -5px;
            }

            .product-line-price {
                margin-top: 50px;
                /* position: absolute; */
                /* margin-left: 10%; */
            }

            .total {
                display: block;
            }

            .ft-top {
                gap: 30px;
                /* height: 55px; */
                padding-top: -50px;
                padding-left: 70px;
            }

            .ft-bottom {
                gap: 40px;
                /* height: 160px; */
                padding-left: 70px;
            }

            .ft-txt {
                font-size: 17px;
                margin-top: -1px;
            }

            .about-txt1 {
                font-size: 15px;
            }

            .about-txt2 {
                font-size: 15px;
            }

            .mail-icon {
                font-size: 16px;
            }

            .mail {
                font-size: 15px;
            }

            .number {
                font-size: 13px;
            }

            .about-us {
                font-size: 12px;
            }

            .contact {
                font-size: 12px;
            }

            .fb {
                font-size: 12px;
            }

        }

        @media only screen and (max-width : 992px) {

            .navbar {
                display: flex;
                flex-direction: column;
                /* justify-content: space-between;
                width: 100vw; */
                padding-top: 12px;
                padding-bottom: 12px;
                background-color: #000231;

                font-size: 20px;
            }

            .nav_links {
                border-bottom: 2px solid rgb(109, 109, 109);
            }

            .main_nav {
                display: none;
            }

            .show_nav {
                padding-top: 50px;
                display: flex;
                width: 85%;
                height: 100vh;
                flex-direction: column;
                justify-content: flex-start;
            }

            .main_nav li {
                /* width: 100%; */
                height: 50px;
                font-size: 25px;
                justify-content: center;
                text-align: center;
                padding: 0%;
            }

            .navbar_toggle {
                margin-left: -5px;
                /* margin-right: -10px; */
                margin-bottom: 2px;
                /* margin-top: 10px; */
                font-size: 30px;
                color: #ffffff;
                /* background: transparent; */
                /* border-color: transparent; */
                transition: all 0.3s linear;
                cursor: pointer;
                display: block;
            }


        }

        @media(min-width:850px) {
            .product-title {
                font-size: 19px;
                width: 100%;
            }

            .info {
                margin-right: 20px;
            }

            img {
                width: 170px;
            }
        }

        @media(min-width:992px) {
            .container {
                /* margin-left: 265px; */
            }

            .logo {
                /* padding-right: 25px; */
                margin-top: 10px;
            }

            .navbar {
                padding-right: 40px;
                padding-left: 40px;
                /* width: 45px; */
                /* display: flex; */
            }

            .logo_header {
                display: flex;
                gap: 50px;
            }

            .navbar_toggle {
                display: none;
            }

            .content {
                padding-left: 100px;
                padding-right: 100px;
            }

            .search {
                /* width: 60%; */
                /* margin: auto; */
                /* margin-right: 50px; */
                height: 40px;
                /* width: 100%; */
                margin-top: 11px;

            }

            .search-btn {
                border-radius: 10px;
                height: 33px;
                margin-right: 70px;
                font-size: 15px;
                margin-top: 15px;

            }

            img {
                width: 230px;
            }

            .product-title {
                font-size: 22px;
            }
.product-line-price{
    font-size: 17px;
}.product-price{
    font-size: 17px;
}

            .ft-top {
                gap: 30px;
                /* height: 55px; */
                padding-top: 5px;
                padding-left: 70px;
                padding-bottom: 15px;
            }

            .ft-txt {
                font-size: 20px;
                margin-top: -1px;
                margin-bottom: 0px;
            }

            .mail {
                font-size: 17px;
            }

            .number {
                font-size: 14px;
            }

            .about-us {
                font-size: 13px;
            }

            .contact {
                font-size: 13px;
            }

            .fb {
                font-size: 13px;
            }

            /* .top {
                height: 69px;
            } */

            .top-box {
                margin-top: -10px;
            }
        }
    </style>

</head>

<body>
    <div class="top">
        <!-- <div class="menu">
            <img class="nav-bar" src="bx-menu.svg" alt="nav-bar">
        </div>
        <div class="search-box">
            <input class="search" type="search" placeholder="Search Products Here ...">
        </div>
        <div>
            <button class="search-btn">Search</button>
        </div> -->

        <nav class="navbar">
            <div class="logo_header">
                <a href="#" class="logo">Logo</a>
                <!-- <button class="navbar_toggle">
            <i class="fas fa-bars"></i>
        </button> -->
                <img src="references/bx-menu.svg" alt="" class="navbar_toggle">
                <input class="search" type="search" placeholder="Search Products Here ...">
                <button class="search-btn">Search</button>
            </div>


            <ul class="main_nav">
                <li>
                    <a href="#" class="nav_links">Home</a>
                </li>
                <li>
                    <a href="#" class="nav_links">Products</a>
                </li>
                <li>
                    <a href="#" class="nav_links">About</a>
                </li>
                <li>
                    <a href="#" class="nav_links">Contact</a>
                </li>
            </ul>

        </nav>

    </div>

    <div class="container">

        <!-- <div class="left">

        </div> -->
        <div class="content">
            <div class="body-container">
                <!-- <div class="title">
                    <h1>Grocceries</h1>
                </div> -->
                <!-- <div id="shopify-section-template--14673296982101__cart-items" class="shopify-section">
                         
                        <style data-shopify>
                            .section-template--14673296982101__cart-items-padding {
                                padding-top: 27px;
                                padding-bottom: 27px;
                            }
                        
                            @media screen and (min-width: 750px) {
                                .section-template--14673296982101__cart-items-padding {
                                    padding-top: 36px;
                                    padding-bottom: 36px;
                                }
                            }
                        </style>
                <cart-items class="page-width section-template--14673296982101__cart-items-padding">
                    <div class="title-wrapper-with-link">
                        <h1 class="title title--primary">Your cart</h1>
                    </div>
                
                    <div class="cart__warnings">
                        <a href="index.html" class="button">
                            Continue shopping
                        </a>
                    </div>

                <form action="/cart" class="cart__contents critical-hidden" method="post" id="cart">
                    <div class="cart__items" id="main-cart-items" data-id="template--14673296982101__cart-items">
                        <div class="js-contents">
                            <table class="cart-items">
                        <thead>
                            <tr>
                                <th class="caption-with-letter-spacing">Product Total Quantity Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="cart-item" id="CartItem-1">
                                <td class="cart-item__media">
                        
                        
                        
                                    <div class="cart-item__image-container gradient global-media-settings">
                                        <img src="products/Women Bag Crossbody Bag Handbag Underarm Bag Ladies Sling Purse Tote Hobo Bag Female Messenger Shoulder Bag Wallet Satchel - Black.jpg"
                                            class="cart-item__image" alt="" loading="lazy" width="150" height="133">
                                    </div>
                        
                                </td>
                        
                                <td class="cart-item__details"><a
                                        href="products/Women Bag Crossbody Bag Handbag Underarm Bag Ladies Sling Purse Tote Hobo Bag Female Messenger Shoulder Bag Wallet Satchel - Black.jpg"
                                        class="cart-item__name h4 break">Women Bag | Handbag | Underarm Bag | Ladies Sling Purse | Tote Hobo Bag
                                        Female Messenger Shoulder Bag | Wallet Satchel - Black</a>
                                    <div class="product-option">
                                        $ 29,00
                                    </div>
                                    <dl>
                                        <div class="product-option">
                                            <dt>Size: </dt>
                                            <dd>4</dd>
                                        </div>
                                        <div class="product-option">
                                            <dt>Color: </dt>
                                            <dd>burgandy</dd>
                                        </div>
                                    </dl>
                        
                                    <p class="product-option"></p>
                                    <ul class="discounts list-unstyled" role="list" aria-label="Discount"></ul>
                                </td>
                        
                                <td class="cart-item__totals right medium-hide large-up-hide">
                        
                                    <div class="cart-item__price-wrapper"><span class="price price--end">
                                            €174,00
                                        </span></div>
                                </td>
                        
                                <td class="cart-item__quantity">
                                    <div class="cart-item__quantity-wrapper">
                                        <label class="visually-hidden" for="Quantity-1">
                                            Quantity
                                        </label>
                                        <quantity-input class="quantity">
                                            <button class="quantity__button no-js-hidden" name="minus" type="button">
                                                <span class="visually-hidden">Decrease quantity for Women Bag | Handbag | Underarm Bag | Ladies
                                                    Sling Purse | Tote Hobo Bag Female Messenger Shoulder Bag | Wallet Satchel -
                                                    Black</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" role="presentation"
                                                    class="icon icon-minus" fill="none" viewBox="0 0 10 2">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M.5 1C.5.7.7.5 1 .5h8a.5.5 0 110 1H1A.5.5 0 01.5 1z" fill="currentColor">
                                                </svg>
                        
                                            </button>
                                            <input class="quantity__input" type="number" name="updates[]" value="6" min="0"
                                                aria-label="Quantity for VANS |AUTHENTIC | LO PRO | BURGANDY/WHITE" id="Quantity-1"
                                                data-index="1">
                                            <button class="quantity__button no-js-hidden" name="plus" type="button">
                                                <span class="visually-hidden">Increase quantity for Women Bag | Handbag | Underarm Bag | Ladies
                                                    Sling Purse | Tote Hobo Bag Female Messenger Shoulder Bag | Wallet Satchel -
                                                    Black</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" role="presentation"
                                                    class="icon icon-plus" fill="none" viewBox="0 0 10 10">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M1 4.51a.5.5 0 000 1h3.5l.01 3.5a.5.5 0 001-.01V5.5l3.5-.01a.5.5 0 00-.01-1H5.5L5.49.99a.5.5 0 00-1 .01v3.5l-3.5.01H1z"
                                                        fill="currentColor">
                                                </svg>
                        
                                            </button>
                                        </quantity-input>
                        
                                        <cart-remove-button id="Remove-1" data-index="1">
                                            <a href="/cart/change?id=40365771391061:7987530b0a4af8dc27899c3128bd7cc6&quantity=0"
                                                class="button button--tertiary"
                                                aria-label="Remove Women Bag | Handbag | Underarm Bag | Ladies Sling Purse | Tote Hobo Bag Female Messenger Shoulder Bag | Wallet Satchel - Black - 4 / burgandy">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" aria-hidden="true" focusable="false"
                                                    role="presentation" class="icon icon-remove">
                                                    <path
                                                        d="M14 3h-3.53a3.07 3.07 0 00-.6-1.65C9.44.82 8.8.5 8 .5s-1.44.32-1.87.85A3.06 3.06 0 005.53 3H2a.5.5 0 000 1h1.25v10c0 .28.22.5.5.5h8.5a.5.5 0 00.5-.5V4H14a.5.5 0 000-1zM6.91 1.98c.23-.29.58-.48 1.09-.48s.85.19 1.09.48c.2.24.3.6.36 1.02h-2.9c.05-.42.17-.78.36-1.02zm4.84 11.52h-7.5V4h7.5v9.5z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M6.55 5.25a.5.5 0 00-.5.5v6a.5.5 0 001 0v-6a.5.5 0 00-.5-.5zM9.45 5.25a.5.5 0 00-.5.5v6a.5.5 0 001 0v-6a.5.5 0 00-.5-.5z"
                                                        fill="currentColor" />
                                                </svg>
                        
                                            </a>
                                        </cart-remove-button>
                                    </div>
                                    <div class="cart-item__error" id="Line-item-error-1" role="alert">
                                        <small class="cart-item__error-text"></small>
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-error"
                                            viewBox="0 0 13 13">
                                            <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2" />
                                            <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7" />
                                            <path
                                                d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z"
                                                fill="white" />
                                            <path
                                                d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z"
                                                fill="white" stroke="#EB001B" stroke-width="0.7">
                                        </svg>
                                    </div>
                                </td>
                        
                                <td class="cart-item__totals right small-hide">
                                    <div class="loading-overlay hidden">
                                        <div class="loading-overlay__spinner">
                                            <svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                            </svg>
                                        </div>
                                    </div>
                        
                                    <div class="cart-item__price-wrapper"><span class="price price--end">
                                            €174,00
                                        </span></div>
                                </td>
                            </tr>
                        </tbody>
                            </table>
                        </div>
                    </div>
                
                </form>
            </cart-items>
        </div> -->

                <h1>Shopping Cart</h1>

                <div class="shopping-cart">

                    <!-- <div class="column-labels">
                <label class="product-image">Image</label>
                <label class="product-details">Product</label>
                <label class="product-price">Price</label>
                <label class="product-quantity">Quantity</label>
                <label class="product-removal">Remove</label>
                <label class="product-line-price">Total</label>
            </div> -->
                    <hr>
                    <div class="product">
                        <div class="img-box">

                            <div class="product-image">
                                <img src="products/2PCS Mens Beach Floral Short Sleeve Shirt(BLUEORANGE).jpg">
                            </div>
                        </div>
                        <div class="info">
                            <div class="product-details-top">
                                <div class="product-title">MENS BEACH FLORAL SHORT SLEEVE SHIRT</div>
                            </div>
                            <div class="product-details-btm">
                                <div class="product-price">$12.99</div>

                                <div class="product-quantity">
                                    <input type="number" value="1" min="1">
                                </div>
                                <div class="total">
                                    <div class="product-removal">
                                        <button class="remove-product">
                                            Remove
                                        </button>
                                    </div>
                                <div class="product-line-price">
                                    <p>Sum</p>
                                    <p class="eql_">=</p>
                                    <p>$25.99</p>
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="product">
                        <div class="img-box">

                            <div class="product-image">
                                <img src="products/ADIDAS SPORTS PERFORMANCE SWEATER TEEN YB MH BOS PO.jpg">
                            </div>
                        </div>
                        <div class="info">
                            <div class="product-details">
                                <div class="product-title">ADIDAS SPORTS PERFORMANCE SWEATER TEEN YB MH BOS PO</div>
                            </div>
                            <div class="product-price">$45.99</div>

                            <div class="product-quantity">
                                <input type="number" value="1" min="1">
                            </div>
                            <div class="total">
                                <div class="product-removal">
                                    <button class="remove-product">
                                        Remove
                                    </button>
                                </div>
                            
                                    <div class="product-line-price">
                                        <p>Sum</p>  
                                        <p class="eql_">=</p>
                                       <p>$45.99</p> </div>

                                </div>

                            </div>

                        </div>
                    </div>
                    <hr>
                    <div class="totals">
                        <div class="totals-item">
                            <label>Subtotal</label>
                            <div class="totals-value" id="cart-subtotal">71.97</div>
                        </div>
                        <div class="totals-item">
                            <label>Tax (5%)</label>
                            <div class="totals-value" id="cart-tax">3.60</div>
                        </div>
                        <div class="totals-item">
                            <label>Shipping</label>
                            <div class="totals-value" id="cart-shipping">15.00</div>
                        </div>
                        <div class="totals-item totals-item-total">
                            <label>Grand Total</label>
                            <div class="totals-value" id="cart-total">90.57</div>
                        </div>
                    </div>
                    <div class="check-box">
                        <input type="submit" name="checkout" class="checkout" value="Checkout">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="ft-top">
                <div class="top-box">
                    <img src="" alt="">
                    <p class="10k ft-txt">10K Customers Served</p>
                </div>

                <div class="top-box">
                    <img src="" alt="">
                    <p class="10-days ft-txt">10 Days Money back Guarantee</p>
                </div>

                <div class="top-box">
                    <img src="" alt="">
                    <p class="100% ft-txt">100% Satisfaction Guaranteed</p>
                </div>
            </div>
            <div class="ft-bottom">
                <div class="about">
                    <p class="about-txt1">
                        We are your one stop shop for a variety of carefully
                        <br>
                        selected items such as clothing, accessories,
                        <br>
                        bags, shoes and much
                        more.
                    </p>
                    <p class="about-txt2">
                        If you don't see it we can get it for you.
                    </p>
                    <div class="email">
                        <p class="mail-icon">
                            @
                        </p>
                        <p class="mail">
                            company.gmail.com
                        </p>
                    </div>

                    <div class="phone">
                        <img src="" alt="">
                        <p class="number">
                            08099200589
                        </p>
                    </div>
                </div>
                <div class="links">
                    <h3>Quick Links</h3>
                    <a href="#" class="about-us">
                        <p>ABOUT US</p>
                    </a>
                    <a href="#" class="contact">
                        <p>CONTACT</p>
                    </a>
                </div>
                <div class="follow">
                    <h3>Follow</h3>
                    <a href="#" class="fb">
                        <p>FACEBOOK</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    const navToggle = document.querySelector(".navbar_toggle");
    const links = document.querySelector(".main_nav");

    navToggle.addEventListener('click', function () {
        links.classList.toggle("show_nav");
    })
</script>

</html>