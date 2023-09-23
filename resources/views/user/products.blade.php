<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="متجر الهدايا الدعائية - اعلي النظم هو
    متجر يقدم أفضل الهدايا الدعائية والتسويقية لعملائه. تسوق الآن واستمتع
    بمجموعة متنوعة من الهدايا والخدمات.">
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

    <link rel="icon" href="../assets/images/gift.png" type="image/x-icon">
    <title>عرض المنتج</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
            direction: rtl;
        }

        .header {
            background-color:#0d307e;
            padding: 20px 0;
            direction: rtl;
        }

        .search-container {
            display: flex;
            justify-content: center;
            align-items: center;
            direction: rtl;
            gap: 10px;
        }

        #search {
            padding: 10px;
            width: 300px;
            border: none;
            border-radius: 20px;
            margin-right: 10px;
            direction: rtl;
        }

        #search:focus {
            outline: none;
        }

        #search-button {
            background-color: #1fa5bb;
            color: #fff;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            cursor: pointer;
            direction: rtl;
        }

        #search-button:hover {
            background-color: #2eb135;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .product {
            margin: 10px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: calc(25% - 20px);
            min-width: 200px;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .product img {
            max-width: 100%;
            height: 200px; /* ارتفاع ثابت للصور */
            margin: 0 auto;
            transition: transform 0.3s ease-in-out;
        }

        .product:hover img {
            transform: scale(1.1);
        }

        .price {
            font-size: 24px;
            color: #2eb135;
        }

        .description {
            font-size: 16px;
            color: #333;
            overflow: auto; /* للتحكم في تجنب ظهور المحتوى الزائد */
            text-overflow: ellipsis; /* عرض النص المخفي بالنقاط الثلاثة */
            white-space: normal; /* منع النص من الانزلاق إلى سطر جديد */
            max-height: 8em; /* ارتفاع النص المسموح به قبل الانقطاع (مثال: 3 أسطر) */
            flex-grow: 1; /* السماح للوصف بالنمو لملء المساحة المتبقية */
            padding-bottom: 20px; /* إضافة مساحة أسفل الوصف للزر */
        }

        .btn-container {
            margin-top: auto; /* لوضع الزر في الجزء السفلي للمنتج */
        }

        .btn {
            background-color: #08106e;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px; /* تباعد بسيط من الوصف */
        }

        .btn:hover {
            background-color: #38b6ff;
        }

        @media screen and (max-width: 768px) {
            .product {
                width: calc(50% - 20px);
            }
        }

        @media screen and (max-width: 576px) {
            .product {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<div class="header">
    <div class="search-container">
        <input type="text" id="search" placeholder="ابحث عن المنتجات">
        <button id="search-button" onclick="searchProducts()">بحث</button>
    </div>
</div>
<div class="container mt-3">
    <!-- المنتجات ستتم إضافتها هنا باستخدام JavaScript -->
</div>

<div id="reservation-container" style="display: none;">
    <div class="container mt-3">
        <!-- عرض صفحة الحجز هنا -->
        <h1>صفحة الحجز</h1>
        <p>قم بإجراء الحجز هنا.</p>
        <a href="test5.html" onclick="goBackToPreviousPage()">الخروج</a>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // قم بتعريف مصفوفة تحتوي على المنتجات
    const products = [
        @foreach($products as $product)
        {
            imgSrc: "{{$product->product_image_url}}",
            title: "{{$product->product_name}} ",
            price: "{{$product->price_currency}}",
            description: "{{$product->product_description}}"
        },
        @endforeach

        // أضف المزيد من المنتجات هنا
    ];

    // عرض كافة المنتجات عند التحميل الأولي للصفحة
    displayProducts(products);

    // وظيفة البحث عن المنتجات
    function searchProducts() {
        const searchTerm = $('#search').val();

        $.ajax({
            url: `/search?term=${searchTerm}`,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                const productsArray = data.products;
                displaysearchProducts(productsArray);
                console.log(data.products)
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    }

    // وظيفة لعرض المنتجات
    function displayProducts(productsArray) {
        const container = document.querySelector(".container");
        container.innerHTML = "";
        if (productsArray.length === 0) {
            container.innerHTML = "<p>No products found.</p>";
            return;
        }

        productsArray.forEach((product) => {
            const productHTML = `
                    <div class="product">
                        <img src="product-image/${product.imgSrc}" alt="صورة المنتج">
                        <h2 class="mt-3">${product.title}</h2>
                        <p class="price text-primary">${product.price}</p>
                        <p class="description">${product.description}</p>
                        <div class="btn-container">
                            <a href="{{route('Booking')}}" class="btn btn-success btn-lg"><i class="fas fa-shopping-cart"></i> احجز الآن</a>
                        </div>
                    </div>
                `;

            // إضافة العنصر إلى العنصر الأم (الصف)
            container.innerHTML += productHTML;
        });
    }
    //   وظيفة لعرض المنتجات البحث
    function displaysearchProducts(productsArray) {
        const container = document.querySelector(".container");
        container.innerHTML = "";
        if (productsArray.length === 0) {
            container.innerHTML = "<p>No products found.</p>";
            return;
        }

        productsArray.forEach((product) => {
            const productHTML = `
            <div class="product">
                <img src="product-image/${product.product_image_url}" alt="صورة المنتج">
                <h2 class="mt-3">${product.product_name}</h2>
                <p class="price text-primary">${product.price_currency}</p>
                <p class="description">${product.product_description}</p>
                <div class="btn-container">
                    <a href="{{route('Booking')}}" class="btn btn-success btn-lg"><i class="fas fa-shopping-cart"></i> احجز الآن</a>
                </div>
            </div>
        `;


            // إضافة العنصر إلى العنصر الأم (الصف)
            container.innerHTML += productHTML;
        });
    }

    // وظيفة لعرض صفحة الحجز وإخفاء صفحة المنتجات
    function showReservationPage() {
        const productContainer = document.querySelector(".container");
        const reservationContainer = document.getElementById("reservation-container");
        productContainer.style.display = "none";
        reservationContainer.style.display = "block";
    }

    // وظيفة للعودة إلى الصفحة السابقة (صفحة المنتجات)
    function goBackToPreviousPage() {
        const productContainer = document.querySelector(".container");
        const reservationContainer = document.getElementById("reservation-container");
        productContainer.style.display = "block";
        reservationContainer.style.display = "none";
    }
</script>
</body>
</html>
