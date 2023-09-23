<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
{{--            <x-jet-authentication-card-logo />--}}
        </x-slot>
        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif


            <h2 class="login-title" id="formTitle">تسجيل الدخول</h2>

            <form id="loginForm"  method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="username" class="form-control" id="username" placeholder="اسم المستخدم">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" id="password" placeholder="كلمة المرور">
                </div>
                <button type="submit" class="btn btn-primary btn-block login-button">تسجيل الدخول</button>
                @if (Route::has('password.request'))
                <p class="mt-3"><a href="{{ route('password.request') }}">هل نسيت كلمة المرور؟</a></p>
                @endif
            </form>

            <button id="signupBtn" class="btn btn-success btn-block mt-3">إنشاء حساب جديد</button>
            <form id="signupForm" class="mt-3" style="display: none;" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" id="newUsername" placeholder="اسم المستخدم الجديد">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="البريد الإلكتروني">
                </div>
                <div class="form-group">
                    <input type="password" name="password" required autocomplete="new-password" class="form-control" id="newPassword" placeholder="كلمة المرور الجديدة">
                </div>
                <div class="form-group">
                    <input type="password" name="password_confirmation" required autocomplete="new-password" class="form-control" id="confirmPassword" placeholder="تأكيد كلمة المرور">
                </div>
                <div class="form-chec k mb-3">
                    <input type="checkbox" class="form-check-input" id="showPassword">
                    <label class="form-check-label" for="showPassword">إظهار كلمة المرور</label>
                </div>

                <button type="submit" class="btn btn-success btn-block">إنشاء حساب </button>
                <p class="mt-3">لديك حساب؟ <a href="#" id="loginLink">تسجيل الدخول</a></p>

            </form>




    </x-jet-authentication-card>
</x-guest-layout>
