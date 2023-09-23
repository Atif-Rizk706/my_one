<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
{{--            <x-jet-authentication-card-logo />--}}
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('قبل المتابعة ، هل يمكنك التحقق من عنوان بريدك الإلكتروني بالنقر فوق الارتباط الذي أرسلناه إليك عبر البريد الإلكتروني؟ إذا لم تتلق البريد الإلكتروني ، فسنرسل لك بكل سرور بريدا آخر.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('تم إرسال رابط تحقق جديد إلى عنوان البريد الإلكتروني الذي قدمته في إعدادات ملفك الشخصي.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit" style="background-color: #292cb4 !important;">
                        {{ __('إعادة إرسال رسالة التحقق الإلكترونية') }}
                    </x-jet-button>
                </div>
            </form>

            <div>
{{--                <a--}}
{{--                    href="{{ route('profile.show') }}"--}}
{{--                    class="underline text-sm text-gray-600 hover:text-gray-900"--}}
{{--                >--}}
{{--                    {{ __('Edit Profile') }}</a>--}}

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button style="margin-top: 7px" type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 ml-2">
                        {{ __('تسجيل الخروج') }}
                    </button>
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
