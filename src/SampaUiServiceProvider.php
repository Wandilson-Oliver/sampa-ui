<?php

namespace WandilsonOliver\SampaUi;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class SampaUiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Carrega as views do pacote
        $this->loadViewsFrom(
            __DIR__ . '/../resources/views',
            'sampa'
        );

        // Registra o namespace dos componentes Blade: x-sampa::*
        Blade::componentNamespace(
            'WandilsonOliver\\SampaUi\\View\\Components',
            'sampa'
        );
    }
}
