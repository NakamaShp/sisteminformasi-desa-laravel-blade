<x-filament::widget class="!h-100">
    <x-filament::card class="!h-full">
        <div class="h-100 flex justify-center items-center py-6">
            <x-filament::button
                tag="a"
                href="{{ url('/') }}"
                color="gray"
                outlined
                icon="heroicon-o-home"
                size="lg">
                Kembali ke Halaman Utama
            </x-filament::button>
        </div>
    </x-filament::card>
</x-filament::widget>