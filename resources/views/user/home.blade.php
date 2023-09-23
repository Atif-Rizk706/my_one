<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="follow, index, max-snippet:-1,
	 max-video-preview:-1, max-image-preview:large">
    <meta http-equiv="Content-Language" content="ar">
    <meta property="og:locale" content="ar_AR">
    <meta name="author" content="Web Masters" />
    <!--Facebook::-->
    <meta property="og:title" content="Facebook">
    <meta property="og:image" content="../assets/images/t0psystem.jpg">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="500">
    <meta property="og:url" content="https://www.facebook.com/profile.php?id=100093379573561&mibextid=2JQ9oc">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Facebook">

    <!--WhatsApp:-->
    <meta property="og:title" content="WhatsApp">
    <meta property="og:image" content="../assets/images/t0psystem.jpg">
    <meta property="og:url" content="https://wa.me/+966 50 444 7416">
    <!--instagram:-->
    <meta property="og:type" content="website">
    <meta property="og:title" content="instagram">
    <meta property="og:image" content="../assets/images/t0psystem.jpg">
    <meta property="og:url" content="https://instagram.com/topsystems1?igshid=MzRlODBiNWFlZA==">
    <meta name="description" content="متجر الهدايا الدعائية - اعلي النظم هو متجر يقدم أفضل الهدايا الدعائية والتسويقية لعملائه. تسوق الآن واستمتع بمجموعة متنوعة من الهدايا والخدمات.">
    <title>متجر الهدايا الدعائية - اعلى النظم</title>
    <link href="../assets/css/style.home.css" rel="stylesheet">
    <link href="../assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" href="../assets/images/gift.png" type="image/x-icon">
    <style>
        .navbar {
            padding: 10px;
            margin-top: -9px;
        }
        .navbar-toggler:focus {
            outline: none;
            box-shadow: none;
        }
        .navbar-toggler:active {

            outline: none !important;
        }
        .navbar-brand {
            padding: 0;
        }
        .navbar-toggler {
            border: none;
        }
        .navbar-collapse {
            justify-content: flex-end;
        }
        .navbar-nav {
            text-align: right;
        }
        .navbar-nav .nav-item {
            margin-right: 8px;
            font-size: 18px;
        }
        .jumbotron {
            margin-top: 20px;
        }
        .footer {
            background-color: #f9feff; /* تم تعديل لون الخلفية */
            padding: 20px 0; /* تم تعديل الهوامش */
            text-align: center;
        }
        .social-icons {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            margin-top: 20px;
            /* تم تعديل عرض القائمة */
            width: 100%;
            flex-wrap: wrap; /* تم تعديل عرض القائمة */
        }
        .social-icons li {
            margin: 0 10px;
        }
        .social-icon {
            font-size: 24px;
            color: #333;
            transition: color 0.3s ease-in-out;
        }
        .social-icon:hover {
            color: #007bff;
        }
        .search-container {
            position: relative;
            display: inline-block;
        }
        .product-search {
            display: none;
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 300px;
            background-color: #ffffff;
            border-radius: 5px;
            padding: 8px;
            z-index: 2;
            direction: rtl;
        }
        .search-container.active .product-search {
            display: block;
        }
        @media (min-width: 768px) {
            .navbar-nav {
                text-align: center;
            }
            .search-container {
                position: absolute;
                right: 50%;
                transform: translateX(50%);
                top: 50%;
                margin-top: -10px;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <a class="navbar-brand" href="#">
        <img src="../assets/images/logo.png" alt="شعار اعلى النظم" width="135">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link text-primary" href="{{route('index')}}">الرئيسية<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-primary" href="{{route('ourProducts')}}">المنتجات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-primary" href="{{route('showServices')}}">الخدمات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-primary" href="{{route('contact')}}">اتصل بنا</a>
            </li>
            @if(\Illuminate\Support\Facades\Auth::check())
                <li class="nav-item">
                    <a class="nav-link text-primary" href="{{ route('custom.logout') }}">تسجيل الخروج</a>
                </li>
           @else
            <li class="nav-item">
                <a class="nav-link text-primary" href="{{route('login')}}">تسجيل الدخول</a>
            </li>
            @endif
            @if(\Illuminate\Support\Facades\Auth::check() && auth()->user()->usertype == 1)
            <li class="nav-item admin-panel">
                <a class="nav-link text-danger" href="{{route('controlPanel')}}">لوحة الإدارة</a>
            </li>
            @elseif(\Illuminate\Support\Facades\Auth::check() && auth()->user()->usertype == 0)

            @else


            @endif
            <li class="nav-item">
                <div class="search-container">
                    <div class="product-search">
                        <input type="text" placeholder="ابحث عن منتج" style="background-color: red">
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="jumbotron text-center" style="background-color: #f9feff; padding: 80px 0;margin-bottom: 0">
    <h1 class="display-4" style="color: #0d307e;">مرحبًا في متجر الهدايا الدعائية</h1>
    <p class="lead" style="color: #737373;">نقدم لكم أفضل الهدايا الدعائية والتسويقية لعملكم.</p>
    <a class="btn btn-primary btn-lg" href="{{route('ourProducts')}}" role="button">تسوق الآن</a>
</div>
<div class="section2">
    <h1 class="sectiontitel" style="align-content: center; justify-content: center;">  أحدث المنتجات </h1>
    <div class="main-container">
        <div class="slide_container swiper">
            <div class="slide_content">
                <div class="cardwarber swiper-wrapper swiper-wrapper2">
                    @foreach($products as $product)
                    <div class="card1 swiper-slide swiper-slide2">
                        <div class="image-content">
                           <span class="overly">

                           </span>
                            <div class="card-image">
                                <img src="product-image/{{$product->product_image_url}}" alt="" class="card-img">

                            </div>
                        </div>
                        <div class="card-content">
                            <h1 class="name">{{$product->product_name}} </h1>
                            <p class="description">" {{$product->product_description}} "</p>
                            <button class="button">{{$product->price_currency}}</button>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="swiper-button-next swipt_btn"></div>
            <div class="swiper-button-prev swipt_btn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

</div>
<footer class="text-center footer">
    <div class="social-icons">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100093379573561&mibextid=2JQ9oc" class="social-icon"><i
                        class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-icon"><i
                        class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="https://instagram.com/topsystems1?igshid=MzRlODBiNWFlZA==" class="social-icon"><i
                        class="fab fa-instagram"></i></a></li>
            <!-- قم بإضافة روابط مواقع التواصل الاجتماعي الأخرى هنا -->
        </ul>
    </div>
    <p>&copy; 2023 متجر الهدايا الدعائية - اعلى النظم</p>
</footer>
<script src="../assets/js/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    const searchContainer = document.querySelector('.search-container');
    const productSearch = document.querySelector('.product-search');

    searchContainer.addEventListener('click', () => {
        productSearch.classList.toggle('active');
        if (productSearch.classList.contains('active')) {
            productSearch.querySelector('input').focus();
        }
    });

    document.addEventListener('click', (event) => {
        if (!searchContainer.contains(event.target)) {
            productSearch.classList.remove('active');
        }
    });
    var swiper = new Swiper(".slide_content", {
        slidesPerView: 3,
        spaceBetween: 25,
        centerSlide:'true',

        fade:'true',
        loop: true,
        grabCurser:'true',
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets:true,
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints:{
            0:{
                slidesPerView:1,
            },
            520:{
                slidesPerView:2,
            },
            950:{
                slidesPerView:3,
            },
        }
    });
</script>
</body>
</html>
