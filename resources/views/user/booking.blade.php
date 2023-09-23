<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> احجز الآن</title>
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

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .booking-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 400px;
        }

        .icon, .phone-number, .address {
            display: flex;
            align-items: center;
            margin: 10px 0;
            padding: 0;
        }

        .icon i {
            font-size: 24px;
            color: #1fa5bb;
            margin-right: 10px;
            padding: 5px;
            transition: transform 0.2s, box-shadow 0.2s; /* إضافة حركة تفاعلية */
        }

        .icon i:hover {
            transform: scale(1.2);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* تأثير ظل عند التحويم بالماوس */
        }

        .phone-number, .address {
            font-size: 18px;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            text-decoration: none;
            color: #38b6ff;
            margin: 0 10px;
            font-size: 24px;
            transition: transform 0.2s, box-shadow 0.2s; /* إضافة حركة تفاعلية */
        }

        .social-icons a:hover {
            transform: scale(1.2);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* تأثير ظل عند التحويم بالماوس */
        }

        .address {
            font-weight: bold;
            color: #009ca9;
        }

        .phone-number {
            font-weight: bold;
            color: #009ca9;
        }

        @media screen and (max-width: 600px) {
            .icon i {
                font-size: 20px;
            }

            .phone-number, .address {
                font-size: 16px;
            }

            .social-icons a {
                font-size: 20px;
            }
        }
    </style>

</head>
<body>
<div class="container">
    <div class="booking-box">
        <div class="icon">
            <i class="fas fa-map-marker-alt"></i>
            <div class="address">المملكة العربية السعودية - الرياض - الملز - شارع الأربعين</div>
        </div>
        <div class="icon">
            <i class="fas fa-phone"></i>
            <div class="phone-number">966504447416+</div>
        </div>
        <div class="social-icons">
            <a href="https://www.facebook.com/people/topsystems/100093379573561/?mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a>
            <a href="https://wa.me/+966504447416" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://instagram.com/topsystems1?igshid=MzRlODBiNWFlZA=="><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
</body>
</html>
