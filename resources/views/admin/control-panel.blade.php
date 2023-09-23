<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>واجهة الإدارة - اعلي النظم</title>
    <link rel="icon" href="../assets/images/gift.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            max-width: 400px;
            width: 90%;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            left:20px;
        }
        .card-title {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .card-text {
            margin-bottom: 20px;
        }
        .btn {
            margin-bottom: 10px;
            font-size: 18px;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">واجهة الإدارة</h2>
                    <p class="card-text">مرحباً بك في واجهة الإدارة</p>
                    <a href="{{ route('add.product') }}" class="btn btn-success btn-block">إضافة منتج</a>
                    <a href="{{ route('add.service') }}" class="btn btn-success btn-block">إضافة خدمه</a>
                    <a href="{{ route('index') }}" class="btn btn-primary btn-block">العودة للصفحة الرئيسية</a>
                    <button class="btn btn-primary btn-block">إدارة المنتجات</button>
                    <button class="btn btn-primary btn-block">إدارة الطلبات</button>
                    <button class="btn btn-primary btn-block">إدارة المستخدمين</button>
                    <a  href="{{route('show.products')}}" class="btn btn-danger btn-block">حذف منتج</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
