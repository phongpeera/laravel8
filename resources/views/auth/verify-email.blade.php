<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('ขอบคุณสำหรับการลงทะเบียน! ก่อนเริ่มต้น คุณช่วยยืนยันที่อยู่อีเมลของคุณโดยคลิกลิงก์ที่เราเพิ่งส่งอีเมลถึงคุณได้ไหม หากคุณไม่ได้รับอีเมล เราจะส่งอีเมลใหม่ให้คุณ') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('ลิงค์ยืนยันใหม่ถูกส่งไปยังที่อยู่อีเมลที่คุณให้ไว้ระหว่างการลงทะเบียน') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('ส่งอีเมล์ยืนยันอีกครั้ง') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('ออกจากระบบ') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
