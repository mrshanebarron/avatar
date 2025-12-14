<?php

namespace MrShaneBarron\Avatar;

use Illuminate\Support\ServiceProvider;

class AvatarServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (class_exists(\Livewire\Livewire::class)) {
            \Livewire\Livewire::component('ld-avatar', Livewire\Avatar::class);
        }
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ld-avatar');
    }
}
