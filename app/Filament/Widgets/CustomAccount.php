<?php

namespace App\Filament\Widgets;

use Filament\Widgets\AccountWidget as BaseWidget;

class CustomAccount extends BaseWidget
{
    protected string $view = 'vendor.filament.widgets.account-widget';

    protected int|string|array $columnSpan = 'full';
}
