<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/gift.png" type="image/x-icon">
    <title>إضافة منتج جديد - اعلي النظم</title>
    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> -->
    <style>
        body {
            background-color: #f9feff; /* #f8f9fa */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .add-product-container {
            max-width: 600px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 520px;
        }
        .add-product-title {
            text-align: center;
            color: #26d6ed; /* #333 */
            font-size: 24px;
            margin-bottom: 20px;
            width: 100%;
            max-width: 500px;
        }
        .form-group {
            margin-bottom: 20px;

        }
        .form-control {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            max-width: 500px;
        }
        .add-product-button {
            background-color: #ff6cc7; /* #007bff */
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            width: 100%;
            max-width: 517px;
        }

        /* تنسيق حقل السعر واختيار العملة */
        .price-input-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 500px;
            margin: 0 auto;
            margin-bottom: 15px; /* إضافة مسافة أسفل حقل السعر */


        }
        .price-input-group select {
            background-color: #f9feff;
            color: #333;
            border: 1px solid #ccc;
            padding: 10px;
            width: 100px;
            margin: 5px;

        }
        .price-input-group .form-control#product-price {
            border-radius: 5px;
            border: 1px solid #ccc; /* إضافة حدود لحقل السعر */
            padding: 10px;
            flex: 1;
            margin-left: 10px; /* إضافة مسافة بين حقل تحديد السعر وحقل العملة */
        }

        /* إضافة مسافة بين حقل السعر واختيار الملف */
        .form-group input[type="file"] {
            margin-top: 15px;
        }
    </style>
</head>
<body>
<div class="add-product-container">
    <h2 class="add-product-title">إضافة منتج جديد</h2>
    <form class="add-product-form"  id="add-product-form">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="product-name" id="product-name" placeholder="اسم المنتج">
        </div>
        <div class="form-group">
            <textarea class="form-control" id="product-description" name="product-description" rows="4" placeholder="وصف المنتج"></textarea>
        </div>
        <div class="form-group price-input-group">
            <input type="number" class="form-control" name="product-price" id="product-price" placeholder="السعر">
            <select class="form-control" name="currency" id="currency">
                <option value="usd">USD</option>
                <option value="eur">EUR</option>
                <option value="egp">EGP</option>
                <option value="KSA">SAR</option>
                <option value="BHR">BHD</option>
                <option value="KWT">KWD	</option>
                <option value="OMN">OMR</option>
                <option value="UAE">AED</option>

                <!-- قائمة بالعملات الأخرى -->
            </select>
        </div>
        <div class="form-group">
            <input type="file" class="form-control" name="product-image" id="product-image">
        </div>
        <button type="submit" style="cursor: pointer" class="btn btn-primary btn-block add-product-button">إضافة المنتج</button>
    </form>
</div>

<!-- <script src="assets/jquery/jquery.min.js"></script> -->
<!-- <script src="assets/bootstrap/js/bootstrap.min.js"></script> -->
<!--    <script>-->
<script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    document.querySelector('.add-product-form').addEventListener('submit', function(event) {
        event.preventDefault();

        const productName = document.querySelector('#product-name').value;
        const productDescription = document.querySelector('#product-description').value;
        const productPrice = parseFloat(document.querySelector('#product-price').value);
        const currency = document.querySelector('#currency').value;

        if (!isNaN(productPrice)) {

        } else {
            alert('من فضلك، قم بإدخال سعر صحيح.');
        }
    });
    $(document).ready(function() {
        $('#add-product-form').on('submit', function(event) {
            event.preventDefault();
            console.log("okkkkk");

            // Serialize the form data
            var formData = new FormData(this);

            $.ajax({
                url: "{{ route('save.product') }}",
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    // Handle success, e.g., show a success message
                    alert(data.message);
                    // Clear the form if needed
                    $('#add-product-form')[0].reset();
                },
                error: function(xhr, status, error) {
                    // Handle errors, e.g., show validation errors
                    var errors = xhr.responseJSON.errors;
                    for (var key in errors) {
                        alert(errors[key][0]);
                    }
                }
            });
        });
    });
</script>

</body>
</html>
