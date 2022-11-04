<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haflo's Signature</title>

    <style>
        .container {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #151b32;
            border: 1px solid rgba(209, 208, 213, 0.52);
            background-color: #F1F1F1;
            width: 100%;
        }

        body {
            margin: 0px;
            padding: 0px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            width: 100;
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
            width: 60%;
            margin-left: -50px;
            list-style: none;
        }
        .main_nav li {
            display: inline;
            color: #ffffff;
        }

        .main_nav li a {
            color: #ffffff;
        }

        .logo_header {
            display: flex;
            gap: 10px;
        }
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
            cursor: pointer;
            margin-top: 5px;
        }

        .search:hover {
            border: 2px solid rgb(168, 168, 168);
        }

        .content {
            padding: 10px;
        }

        .hdr {
            text-align: center;

        }

        .hdr_2 {
            display: none;
        }

        .box {
            /* display: block; */
            padding: 20px;
            /* border-radius: 5px; */
            background-color: #fbfcff;
            /* box-shadow: 2px 2px 3px 1px #b0b0b041; */
        }

        .main {
            display: grid;
            grid-template-columns: auto;
            grid-gap: 10px;
            padding: 10px;
        }

        .main-box {
            /* text-align: center; */
            /* padding: 20px 0; */
            /* font-size: 30px; */
        }


        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
        /* 
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #000116;
        } */

        .slider {
            position: relative;
            background: #5e0050;
            width: 100%;
            height: 430px;
            overflow: hidden;
            border-radius: 10px;
        }

        .slider .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            clip-path: circle(0% at 0 50%);
        }

        .slider .slide.active {
            clip-path: circle(150% at 0 50%);
            transition: 2s;
        }

        .slider .slide img {
            position: absolute;
            width: 100%;
            height: 100%;
            /* object-fit: cover; */
        }

        /* 
        .slider .slide .info {
            position: absolute;
            color: #222;
            background: rgba(255, 255, 255, 0.3);
            width: 75%;
            margin-top: 50px;
            margin-left: 50px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 25px rgb(1 1 1 / 5%);
        }

        .slider .slide .info h2 {
            font-size: 2em;
            font-weight: 800;
        }

        .slider .slide .info p {
            font-size: 1em;
            font-weight: 400;
        } */

        .navigation {
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .slider:hover .navigation {
            opacity: 1;
        }

        .prev-btn,
        .next-btn {
            z-index: 999;
            font-size: 2em;
            color: #222;
            background: rgba(255, 255, 255, 0.8);
            padding: 10px;
            cursor: pointer;
            margin-top: -70px;

        }

        .prev-btn {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }

        .next-btn {
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        .navigation-visibility {
            z-index: 999;
            display: flex;
            justify-content: center;
        }

        .navigation-visibility .slide-icon {
            z-index: 999;
            background: rgba(255, 255, 255, 0.5);
            width: 20px;
            height: 10px;
            transform: translateY(-50px);
            margin: 0 6px;
            border-radius: 2px;
            box-shadow: 0 5px 25px rgb(1 1 1 / 20%);
            margin-top: -70px;
        }

        .navigation-visibility .slide-icon.active {
            background: #4285F4;
        }

        .right {
            padding: 15px;
        }

        .img1 {
            width: 100%;
            /* height: 100%; */
            margin-bottom: 10px;
        }

        h3 {
            display: none;
        }

        .rating {
            display: flex;
            gap: 10px;
        }

        .star {
            width: 20px;
            height: 20px;
            margin-top: 15px;
        }

        .write-rvw {}

        .product-price {
            font-weight: bold;
        }

        .adjustments {
            border-top: 2px gray solid;
            width: 80%;
        }

        .adj-up {
            display: flex;
            gap: 30px;
        }

        .inpt1 {
            height: 25px;
            border: 1px solid rgb(157, 157, 157);
            width: 100%;
            background-color: rgb(225, 225, 225);
        }

        .inpt2 {
            height: 25px;
            border: 1px solid rgb(157, 157, 157);
            width: 100%;
            background-color: rgb(225, 225, 225);
        }

        .inpt3 {
            height: 25px;
            border: none;
            width: 375px;
            margin-bottom: 20px;
            background-color: rgb(225, 225, 225);
        }

        .add {
            border: none;
            background-color: rgb(132, 0, 255);
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            padding: 10px 20px 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            width: 375px;
        }

        .specs {
            margin-left: -10px;
        }

        li {
            font-size: 15px;
        }


        .ctrl {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 auto;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            border-bottom: 1px solid #D5DCE6;
            background-color: #fff;
            border-radius: 5px;
            font-size: 30px;
            height: 50px;
            margin-bottom: 50px;
        }

        .ctrl__counter {
            position: relative;
            width: 200px;
            height: 100px;
            color: #333C48;
            text-align: center;
            overflow: hidden;
        }

        .ctrl__counter.is-input .ctrl__counter-num {
            visibility: hidden;
            opacity: 0;
            -webkit-transition: opacity 100ms ease-in;
            transition: opacity 100ms ease-in;
        }

        .ctrl__counter.is-input .ctrl__counter-input {
            visibility: visible;
            opacity: 1;
            -webkit-transition: opacity 100ms ease-in;
            transition: opacity 100ms ease-in;
        }

        .ctrl__counter-input {
            width: 100%;
            margin: 0;
            padding: 0;
            position: relative;
            z-index: 2;
            box-shadow: none;
            outline: none;
            border: none;
            color: #483933;
            font-size: 30px;
            line-height: 100px;
            text-align: center;
            visibility: hidden;
            opacity: 0;
            -webkit-transition: opacity 100ms ease-in;
            transition: opacity 100ms ease-in;
        }

        .ctrl__button {
            width: 100px;
            height: 50px;
            line-height: 45px;
            text-align: center;
            color: rgb(0, 0, 0);
            cursor: pointer;
            background-color: #f4f4f4;
            -webkit-transition: background-color 100ms ease-in;
            transition: background-color 100ms ease-in;
        }

        .ctrl__button:hover {
            background-color: #e2e2e2;
            -webkit-transition: background-color 100ms ease-in;
            transition: background-color 100ms ease-in;
        }

        .ctrl__button:active {
            background-color: #c6c6c6;
            -webkit-transition: background-color 100ms ease-in;
            transition: background-color 100ms ease-in;
        }

        .ctrl__button--decrement {
            border-radius: 5px 0 0 5px;
        }

        .ctrl__button--increment {
            border-radius: 0 5px 5px 0;
        }

        .ctrl__counter-num {
            position: absolute;
            z-index: 1;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            line-height: 100px;
            visibility: visible;
            opacity: 1;
            -webkit-transition: opacity 100ms ease-in;
            transition: opacity 100ms ease-in;
        }

        .ctrl__counter-num.is-increment-hide {
            opacity: 0;
            -webkit-transform: translateY(-50px);
            transform: translateY(-50px);
            -webkit-animation: increment-prev 100ms ease-in;
            animation: increment-prev 100ms ease-in;
        }

        .ctrl__counter-num.is-increment-visible {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0);
            -webkit-animation: increment-next 100ms ease-out;
            animation: increment-next 100ms ease-out;
        }

        .ctrl__counter-num.is-decrement-hide {
            opacity: 0;
            -webkit-transform: translateY(50px);
            transform: translateY(50px);
            -webkit-animation: decrement-prev 100ms ease-in;
            animation: decrement-prev 100ms ease-in;
        }

        .ctrl__counter-num.is-decrement-visible {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0);
            -webkit-animation: decrement-next 100ms ease-out;
            animation: decrement-next 100ms ease-out;
        }

        @-webkit-keyframes decrement-prev {
            from {
                opacity: 1;
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @keyframes decrement-prev {
            from {
                opacity: 1;
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @-webkit-keyframes decrement-next {
            from {
                opacity: 0;
                -webkit-transform: translateY(-50px);
                transform: translateY(-50px);
            }
        }

        @keyframes decrement-next {
            from {
                opacity: 0;
                -webkit-transform: translateY(-50px);
                transform: translateY(-50px);
            }
        }

        @-webkit-keyframes increment-prev {
            from {
                opacity: 1;
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @keyframes increment-prev {
            from {
                opacity: 1;
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @-webkit-keyframes increment-next {
            from {
                opacity: 0;
                -webkit-transform: translateY(50px);
                transform: translateY(50px);
            }
        }

        @keyframes increment-next {
            from {
                opacity: 0;
                -webkit-transform: translateY(50px);
                transform: translateY(50px);
            }
        }

        /* * {
            margin: 0;
            padding: 0;
        } */

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

        a {
            text-decoration: none;
        }




        @media (max-width: 900px) {
            .slider {
                width: 100%;
            }

            .slider .slide .info {
                position: relative;
                width: 80%;
                margin-left: auto;
                margin-right: auto;
            }
        }

        @media (max-width: 500px) {
            .slider .slide .info h2 {
                font-size: 1.8em;
                line-height: 40px;
            }

            .slider .slide .info p {
                font-size: 0.9em;
            }
        }

        @media(min-width:790px) {
            .container {
                /* padding-bottom: 50px; */
            }

            .content {
                /* padding-left: 70px;
                padding-right: 70px; */
            }

            .nav-bar {
                margin-top: 12px;
            }

            .main_nav {
                gap: 17%;
                display: flex;
            }

            .logo {
                margin-left: 20px;
                font-size: 35px;
                margin-top: 5px;
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

            .hdr {
                display: none;
            }

            .hdr_2 {
                display: inherit;
            }

            .box {
                background-color: #fbfcff;
                border-radius: 10px;
            }

            .main {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 10px;
                /* padding: 10px; */
            }

            h3 {
                font-size: 15px;
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

            /* .top {
                height: 57px;
            } */

            .top-box {
                margin-top: -10px;
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

        @media(min-width:1000px) {
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

            .box {
                background-color: #fbfcff;
                border-radius: 10px;
                /* border: 2px solid lightgray; */
            }

            h3 {
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
        <div class="content">
            <div class="box">
                <div class="main">

                    <div class="main-box main-box1">
                        <h2 class="hdr">4 In 1 Set Single Shoulder Messenger Handbags -Pink</h2>

                        <div class="left">

                            <div class="slider">
                                <div class="slide active">
                                    <img src="products/4 In 1 Set Single Shoulder Messenger Handbags -Pink.jpg"
                                        alt="pic2" class="img1">
                                    <!-- <img src="1.jpg" alt=""> -->
                                    <!-- <div class="info">
                                                    <h2>Winter Mountains</h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                        incididunt ut labore et
                                                        dolore magna aliqua.</p>
                                                </div> -->
                                </div>

                                <div class="slide">
                                    <img src="products/2.jpg" alt="pic3" class="img3">
                                    <!-- <img src="2.jpg" alt="">
                                                <div class="info">
                                                    <h2>Tropical Desert</h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                        incididunt ut labore et
                                                        dolore magna aliqua.</p>
                                                </div> -->
                                </div>
                                <div class="slide">
                                    <img src="products/3.jpg" alt="pic2" class="img1">
                                    <!-- <img src="3.jpg" alt="">
                                                <div class="info">
                                                    <h2>Steaming Volcanoes</h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                        incididunt ut labore et
                                                        dolore magna aliqua.</p>
                                                </div> -->
                                </div>
                                <div class="slide">
                                    <img src="products/4.jpg" alt="pic2" class="img1">

                                    <!-- <img src="4.jpg" alt="">
                                                <div class="info">
                                                    <h2>Mountain River</h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                        incididunt ut labore et
                                                        dolore magna aliqua.</p>
                                                </div> -->
                                </div>
                                <div class="slide">
                                    <img src="products/6.jpg" alt="pic3" class="img3">


                                    <!-- <img src="5.jpg" alt="">
                                                <div class="info">
                                                    <h2>Egypt Pyramids</h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                        incididunt ut labore et
                                                        dolore magna aliqua.</p>
                                                </div> -->
                                </div>
                                <div class="navigation">
                                    <i class="fas fa-chevron-left prev-btn"></i>
                                    <i class="fas fa-chevron-right next-btn"></i>
                                </div>
                                <div class="navigation-visibility">
                                    <div class="slide-icon active"></div>
                                    <div class="slide-icon"></div>
                                    <div class="slide-icon"></div>
                                    <div class="slide-icon"></div>
                                    <div class="slide-icon"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-box main-box2">
                        <div class="right">
                            <h2 class="hdr_2">4 In 1 Set Single Shoulder Messenger Handbags -Pink</h2>

                            <div class="info">
                                <h3 class="product-name">Mixed pizza with olive bellpepper tomato</h3>
                                <div class="rating">
                                    <div class="stars">
                                        <img class="star" src="references/bxs-star.svg" alt="star1">
                                        <img class="star" src="references/bxs-star.svg" alt="star2">
                                        <img class="star" src="references/bxs-star.svg" alt="star3">
                                        <img class="star" src="references/bxs-star.svg" alt="star4">
                                        <img class="star" src="references/bx-star.svg" alt="star5">
                                    </div>
                                    <p><span class="write-rvw">Write Review</span></p>
                                </div>
                                <p class="product-price">$ 5499.9</p>
                            </div>
                            <div class="adjustments">
                                <div class="adj-up">
                                    <div class="color">
                                        <p>Color</p>
                                        <select id="color" name="color" class="inpt1">
                                            <option value="black">Black</option>
                                            <option value="blue">Blue</option>
                                            <option value="gold">Gold</option>
                                            <option value="red">Red</option>
                                        </select>
                                    </div>
                                    <div class="size">
                                        <p>Size</p>
                                        <select id="size" name="size" class="inpt2">
                                            <option value="30">30</option>
                                            <option value="32">32</option>
                                            <option value="35.5">35.5</option>
                                            <option value="40">40</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <p>Quantity</p>
                                    <div class='ctrl'>
                                        <div class='ctrl__button ctrl__button--decrement'>&ndash;</div>
                                        <div class='ctrl__counter'>
                                            <input class='ctrl__counter-input' maxlength='10' type='text' value='0'>
                                            <div class='ctrl__counter-num'>0</div>
                                        </div>
                                        <div class='ctrl__button ctrl__button--increment'>+</div>
                                    </div>
                                </div>

                                <input type="submit" name="add" value="Add To Cart" class="add">
                            </div>
                            <div class="specs">
                                <ul>
                                    <li>Lorem ipsum dolor sit amet. </li>
                                    <li>Lorem ipsum dolor sit amet. </li>
                                    <li>Lorem ipsum dolor sit amet. </li>
                                    <li>Lorem ipsum dolor sit amet. </li>
                                    <li>Lorem ipsum dolor sit amet. </li>
                                    <li>Lorem ipsum dolor sit amet. </li>
                                    <li>Lorem ipsum dolor sit amet. </li>
                                    <li>Lorem ipsum dolor sit amet. </li>
                                    <li>Lorem ipsum dolor sit amet. </li>
                                    <li>Lorem ipsum dolor sit amet. </li>
                                </ul>
                            </div>
                        </div>
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
    <script>
        (function () {
            'use strict';
            function ctrls() {
                var _this = this;
                this.counter = 0;
                this.els = {
                    decrement: document.querySelector('.ctrl__button--decrement'),
                    counter: {
                        container: document.querySelector('.ctrl__counter'),
                        num: document.querySelector('.ctrl__counter-num'),
                        input: document.querySelector('.ctrl__counter-input')
                    },
                    increment: document.querySelector('.ctrl__button--increment')
                };
                this.decrement = function () {
                    var counter = _this.getCounter();
                    var nextCounter = (_this.counter > 0) ? --counter : counter;
                    _this.setCounter(nextCounter);
                };
                this.increment = function () {
                    var counter = _this.getCounter();
                    var nextCounter = (counter < 9999999999) ? ++counter : counter;
                    _this.setCounter(nextCounter);
                };
                this.getCounter = function () {
                    return _this.counter;
                };
                this.setCounter = function (nextCounter) {
                    _this.counter = nextCounter;
                };
                this.debounce = function (callback) {
                    setTimeout(callback, 100);
                };
                this.render = function (hideClassName, visibleClassName) {
                    _this.els.counter.num.classList.add(hideClassName);
                    setTimeout(function () {
                        _this.els.counter.num.innerText = _this.getCounter();
                        _this.els.counter.input.value = _this.getCounter();
                        _this.els.counter.num.classList.add(visibleClassName);
                    }, 100);
                    setTimeout(function () {
                        _this.els.counter.num.classList.remove(hideClassName);
                        _this.els.counter.num.classList.remove(visibleClassName);
                    }, 200);
                };
                this.ready = function () {
                    _this.els.decrement.addEventListener('click', function () {
                        _this.debounce(function () {
                            _this.decrement();
                            _this.render('is-decrement-hide', 'is-decrement-visible');
                        });
                    });
                    _this.els.increment.addEventListener('click', function () {
                        _this.debounce(function () {
                            _this.increment();
                            _this.render('is-increment-hide', 'is-increment-visible');
                        });
                    });
                    _this.els.counter.input.addEventListener('input', function (e) {
                        var parseValue = parseInt(e.target.value);
                        if (!isNaN(parseValue) && parseValue >= 0) {
                            _this.setCounter(parseValue);
                            _this.render();
                        }
                    });
                    _this.els.counter.input.addEventListener('focus', function (e) {
                        _this.els.counter.container.classList.add('is-input');
                    });
                    _this.els.counter.input.addEventListener('blur', function (e) {
                        _this.els.counter.container.classList.remove('is-input');
                        _this.render();
                    });
                };
            };
            // init
            var controls = new ctrls();
            document.addEventListener('DOMContentLoaded', controls.ready);
        })();
    </script>
    <script type="text/javascript">
        const navToggle = document.querySelector(".navbar_toggle");
        const links = document.querySelector(".main_nav");

        navToggle.addEventListener('click', function () {
            links.classList.toggle("show_nav");
        })


        const slider = document.querySelector(".slider");
        const nextBtn = document.querySelector(".next-btn");
        const prevBtn = document.querySelector(".prev-btn");
        const slides = document.querySelectorAll(".slide");
        const slideIcons = document.querySelectorAll(".slide-icon");
        const numberOfSlides = slides.length;
        var slideNumber = 0;

        //image slider next button
        nextBtn.addEventListener("click", () => {
            slides.forEach((slide) => {
                slide.classList.remove("active");
            });
            slideIcons.forEach((slideIcon) => {
                slideIcon.classList.remove("active");
            });

            slideNumber++;

            if (slideNumber > (numberOfSlides - 1)) {
                slideNumber = 0;
            }

            slides[slideNumber].classList.add("active");
            slideIcons[slideNumber].classList.add("active");
        });

        //image slider previous button
        prevBtn.addEventListener("click", () => {
            slides.forEach((slide) => {
                slide.classList.remove("active");
            });
            slideIcons.forEach((slideIcon) => {
                slideIcon.classList.remove("active");
            });

            slideNumber--;

            if (slideNumber < 0) {
                slideNumber = numberOfSlides - 1;
            }

            slides[slideNumber].classList.add("active");
            slideIcons[slideNumber].classList.add("active");
        });

        //image slider autoplay
        var playSlider;

        var repeater = () => {
            playSlider = setInterval(function () {
                slides.forEach((slide) => {
                    slide.classList.remove("active");
                });
                slideIcons.forEach((slideIcon) => {
                    slideIcon.classList.remove("active");
                });

                slideNumber++;

                if (slideNumber > (numberOfSlides - 1)) {
                    slideNumber = 0;
                }

                slides[slideNumber].classList.add("active");
                slideIcons[slideNumber].classList.add("active");
            }, 4000);
        }
        repeater();

        //stop the image slider autoplay on mouseover
        slider.addEventListener("mouseover", () => {
            clearInterval(playSlider);
        });

        //start the image slider autoplay again on mouseout
        slider.addEventListener("mouseout", () => {
            repeater();
        });
    </script>
</body>


</html>