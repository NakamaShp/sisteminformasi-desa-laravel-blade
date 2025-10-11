<x-filament::widget>
    <x-filament::card class="!p-4 flex items-center justify-between">
        {{-- Kiri: Avatar + Teks --}}
        <div class="flex items-center space-x-4">
            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-gray-900 text-white text-lg font-semibold">
                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
            </div>
            <div class="flex flex-col">
                <span class="text-base font-semibold text-gray-900 dark:text-gray-100">
                    Welcome
                </span>
                <span class="text-sm text-gray-500 dark:text-gray-400">
                    {{ auth()->user()->name ?? 'admin' }}
                </span>
            </div>
        </div>

        {{-- Kanan: Tombol --}}
        <div class="flex items-center space-x-2">
            <x-filament::button
                tag="a"
                href="{{ url('/') }}"
                color="gray"
                icon="heroicon-o-home"
                size="sm">
                Home
            </x-filament::button>

            <form method="POST" action="{{ route('filament.admin.auth.logout') }}">
                @csrf
                <x-filament::button
                    type="submit"
                    color="danger"
                    icon="heroicon-o-arrow-right-on-rectangle"
                    size="sm">
                    Sign out
                </x-filament::button>
            </form>
        </div>
    </x-filament::card>
</x-filament::widget>