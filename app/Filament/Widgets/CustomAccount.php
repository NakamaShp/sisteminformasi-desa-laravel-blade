<?php

namespace App\Filament\Widgets;

use Filament\Widgets\AccountWidget;

class CustomAccount extends AccountWidget
{
    protected int|string|array $columnSpan = 'full'; // 👈 bikin lebar full 1 baris penuh
}
