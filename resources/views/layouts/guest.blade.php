<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>تسجيل الدخول - اعلي النظم</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                background-color: #f8f9fa;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                margin: 0;
            }
            .login-container {
                max-width: 400px;
                width: 90%;
                padding: 40px;
                background-color: #ffffff;
                border-radius: 5px;
                box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
            }
            .login-title {
                text-align: center;
                color: #333;
                font-size: 24px;
                margin-bottom: 20px;
            }
            .form-group {
                margin-bottom: 20px;
            }
            .form-control {
                border: 1px solid #ccc;
                border-radius: 5px;
                padding: 10px;
                width: 100%;
            }
            .login-button {
                background-color: #007bff;
                border: none;
                padding: 10px 20px;
                font-size: 18px;
                width: 100%;
            }

            .btn {
                border: none;
                padding: 10px 20px;
                font-size: 18px;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div  class="login-container">
            {{ $slot }}
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                const signupBtn = $('#signupBtn');
                const loginForm = $('#loginForm');
                const signupForm = $('#signupForm');
                const loginLink = $('#loginLink');
                const formTitle = $('#formTitle'); // اضف هذا السطر

                signupBtn.click(function () {
                    signupBtn.hide();
                    loginForm.hide();
                    signupForm.show();
                    formTitle.text('إنشاء حساب جديد'); // غير عنوان النموذج
                });

                loginLink.click(function (e) {
                    e.preventDefault();
                    signupForm.hide();
                    loginForm.show();
                    signupBtn.show();
                    formTitle.text('تسجيل الدخول'); // غير عنوان النموذج
                });

                $('#showPassword').change(function () {
                    const newPasswordInput = $('#newPassword');
                    const confirmPasswordInput = $('#confirmPassword');
                    if (this.checked) {
                        newPasswordInput.attr('type', 'text');
                        confirmPasswordInput.attr('type', 'text');
                    } else {
                        newPasswordInput.attr('type', 'password');
                        confirmPasswordInput.attr('type', 'password');
                    }
                });
            });
        </script>
    </body>
</html>
