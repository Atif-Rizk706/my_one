<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/gift.png" type="image/x-icon">
    <title>إضافة خدمة</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            text-align: center;
            direction: rtl;
        }
        h1 {
            margin-top: 20px;
        }
        .contact-form {
            max-width: 60%; /* تحديد حجم النموذج بالنسبة للشاشة */
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .contact-form label {
            display: block;
            text-align: right;
            margin-bottom: 5px;
        }
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 6px;
            margin-bottom: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
        }
        .contact-form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<h1>إضافة خدمة جديدة</h1>
<div class="contact-form">
    <form id="serviceForm">
        @csrf
        <label for="title">عنوان الخدمة:</label>
        <input type="text" id="title" name="title" required>

        <label for="description">وصف الخدمة:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <button type="submit" id="submitButton">إضافة</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const serviceForm = document.getElementById("serviceForm");
        const submitButton = document.getElementById("submitButton");

        submitButton.addEventListener("click", function () {
            const title = document.getElementById("title").value;
            const description = document.getElementById("description").value;



            // في هذا المثال سيتم طباعة البيانات في وحدة التحكم بالمتصفح
            console.log("تمت إضافة الخدمة:");
            console.log("عنوان: " + title);
            console.log("وصف: " + description);

        });
    });
    $(document).ready(function() {
        $('#serviceForm').on('submit', function(event) {
            event.preventDefault();
            console.log("okkkkk");

            // Serialize the form data
            var formData = new FormData(this);

            $.ajax({
                url: "{{ route('save.service') }}",
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
