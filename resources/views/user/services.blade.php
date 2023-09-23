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
    <title>خدمات متجر هدايا الدعايا</title>
    <!-- تضمين مكتبة Font Awesome للأيقونات -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="icon" href="../assets/images/gift.png" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
            direction: rtl;
        }


        .service-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .service {
            margin: 10px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: calc(33.33% - 20px);
            min-width: 200px;
            position: relative;
            transition: transform 0.2s; /* حركة عند تمرير الماوس على الخدمة */
        }

        .service:hover {
            transform: translateY(-5px);
        }

        .service h2 {
            font-size: 24px;
            color: #1fa5bb; /* لون العنوان */
        }

        .service p {
            font-size: 16px;
            color: #333;
        }

        .service button {
            background-color: #0d307e; /* لون الزر */
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px;
        }

        .service button:hover {
            background-color: #1fa5bb; /* لون الزر عند تمرير الماوس */
        }

        /* تخصيص الهيدر */
        .header {
            background-color: #7aa1f5; /* لون الهيدر */
            padding: 20px 0;
            direction: rtl;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* أيقونات مواقع التواصل الاجتماعي */
        .social-icons {
            list-style:none ;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 10px;
            justify-content: flex-end; /* جعل العناصر ناحية اليسار */
        }

        .social-icons li {
            font-size: 24px;
            transition: transform 0.2s; /* حركة عند تمرير الماوس على الأيقونات */
        }

        .social-icons li:hover {
            transform: scale(1.2); /* زيادة الحجم عند تمرير الماوس */
        }

        .social-icons a {
            text-decoration: none;
            color: #e6e6f3; /* لون الرموز */
            gap: 10px;
            direction: ltr;
            padding: 10px;
            margin-left: auto;
        }

        /* تنسيق رمز الهاتف */
        .phone-icon {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #e6e6f3;
            direction: rtl;
            padding: 15px;
            margin-left: auto;

        }

        /* تنسيق الرقم الهاتفي */
        .phone-number {
            font-size: 18px;
        }

    </style>
</head>
<body>
<!-- هيدر مع أيقونات مواقع التواصل الاجتماعي -->
<div class="header">
    <div class="phone-icon">
        <i class="fas fa-phone"></i>
        <span>966504447416+</span> <!-- استبدل هذا برقم الهاتف الخاص بك -->
    </div>

    <ul class="social-icons">
        <li><a href="https://www.facebook.com/profile.php?id=100093379573561&mibextid=2JQ9oc"><i class="fab fa-facebook"></i></a></li>
        <li><a href="https://wa.me/+966504447416"><i class="fab fa-whatsapp"></i></a></li>
        <li><a href="https://instagram.com/topsystems1?igshid=MzRlODBiNWFlZA=="><i class="fab fa-instagram"></i></a></li>
        <!-- يمكنك إضافة المزيد من أيقونات مواقع التواصل الاجتماعي هنا -->
    </ul>


</div>

<div class="service-container">
    <!-- سيتم إضافة خدمات متجر هدايا الدعايا هنا تلقائياً من خلال السكربت -->
</div>

<script>
    // قم بتعريف مصفوفة تحتوي على خدمات متجر هدايا الدعايا
    const services = [
        @foreach($services as $service)
        {
            title: "{{$service->title}}",
            description: "{{$service->description}}"
        },
        @endforeach




        // يمكنك إضافة المزيد من الخدمات هنا
    ];

    // اعرض خدمات متجر هدايا الدعايا عند تحميل الصفحة
    displayServices(services);

    // وظيفة لعرض الخدمات
    function displayServices(servicesArray) {
        const container = document.querySelector(".service-container");

        servicesArray.forEach((service) => {
            const serviceHTML = `
                <div class="service">
                    <h2>${service.title}</h2>
                    <p>${service.description}</p>
                    <!-- زر الطلب المباشر عبر WhatsApp -->
                    <a href="https://wa.me/+966504447416/?text=أنا مهتم بالخدمة: ${service.title}"
                         target="_blank">
                        <button>اطلب الخدمة عبر WhatsApp</button>
                    </a>
                </div>
            `;

            // إضافة الخدمة إلى العنصر الأم (الحاوية)
            container.innerHTML += serviceHTML;
        });
    }
</script>
</body>
</html>
