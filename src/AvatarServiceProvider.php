<?php

namespace MrShaneBarron\Avatar;

use Illuminate\Support\ServiceProvider;

class AvatarServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/sb-avatar.php', 'sb-avatar');
    }

    public function boot(): void
    {
        if (class_exists(\Livewire\Livewire::class)) {
            \Livewire\Livewire::component('sb-avatar', Livewire\Avatar::class);
        }
        
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'sb-avatar');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/sb-avatar.php' => config_path('sb-avatar.php'),
            ], 'sb-avatar-config');
        }
    }
}
