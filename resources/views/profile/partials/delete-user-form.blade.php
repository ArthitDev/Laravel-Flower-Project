<section class="space-y-6">
    <header>
        <h2 class="text-2xl font-bold text-gray-900">
            {{ __('ลบบัญชี') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('โปรดรับทราบ เมื่อคุณลบบัญชีแล้วข้อมูลทุกอย่างของคุณจะถูกลบทั้งหมดอย่างถาวร ขอบคุณ.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('ลบบัญชี') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-bold text-gray-900">
                {{ __('ยืนยันว่าจะลบบัญชี ?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('โปรดรับทราบ เมื่อคุณลบบัญชีแล้วข้อมูลทุกอย่างของคุณจะถูกลบทั้งหมดอย่างถาวร ขอบคุณ.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('ยกเลิก') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('ลบบัญชี') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
