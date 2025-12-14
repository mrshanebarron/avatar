<?php

namespace MrShaneBarron\Avatar\Livewire;

use Livewire\Component;

class Avatar extends Component
{
    public ?string $src = null;
    public ?string $alt = null;
    public ?string $name = null;
    public string $size = 'md';
    public string $shape = 'circle';
    public ?string $status = null;
    public ?string $statusPosition = 'bottom-right';

    public function mount(
        ?string $src = null,
        ?string $alt = null,
        ?string $name = null,
        string $size = 'md',
        string $shape = 'circle',
        ?string $status = null,
        ?string $statusPosition = 'bottom-right'
    ): void {
        $this->src = $src;
        $this->alt = $alt ?? $name;
        $this->name = $name;
        $this->size = $size;
        $this->shape = $shape;
        $this->status = $status;
        $this->statusPosition = $statusPosition;
    }

    public function getInitials(): string
    {
        if (!$this->name) return '?';
        $words = explode(' ', $this->name);
        $initials = '';
        foreach (array_slice($words, 0, 2) as $word) {
            $initials .= strtoupper(substr($word, 0, 1));
        }
        return $initials;
    }

    public function render()
    {
        return view('ld-avatar::livewire.avatar');
    }
}
