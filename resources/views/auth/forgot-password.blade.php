<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
{{--            <x-jet-authentication-card-logo />--}}
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('هل نسيت كلمة المرور؟ لا توجد مشكلة. فقط أخبرنا بعنوان بريدك الإلكتروني وسنرسل لك عبر البريد الإلكتروني رابط إعادة تعيين كلمة المرور الذي سيسمح لك باختيار عنوان جديد..') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('البريد الاليكتروني') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4" style="background-color: #292cb4 !important;">
                <x-jet-button style="background-color: #292cb4 !important;">
                    {{ __('رابط إعادة تعيين كلمة مرور البريد الإلكتروني') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
