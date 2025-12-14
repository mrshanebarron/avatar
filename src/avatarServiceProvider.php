<?php

namespace MrShaneBarron\avatar;

use Illuminate\Support\ServiceProvider;
use MrShaneBarron\avatar\Livewire\avatar;
use MrShaneBarron\avatar\View\Components\avatar as Bladeavatar;
use Livewire\Livewire;

class avatarServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/ld-avatar.php', 'ld-avatar');
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ld-avatar');

        Livewire::component('ld-avatar', avatar::class);

        $this->loadViewComponentsAs('ld', [
            Bladeavatar::class,
        ]);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/ld-avatar.php' => config_path('ld-avatar.php'),
            ], 'ld-avatar-config');

            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/ld-avatar'),
            ], 'ld-avatar-views');
        }
    }
}
