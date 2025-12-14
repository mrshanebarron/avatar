@php
$sizes = ['xs' => 'w-6 h-6 text-xs', 'sm' => 'w-8 h-8 text-sm', 'md' => 'w-10 h-10 text-base', 'lg' => 'w-12 h-12 text-lg', 'xl' => 'w-16 h-16 text-xl'];
$sizeClass = $sizes[$size] ?? $sizes['md'];
$statusColors = ['online' => 'bg-green-500', 'offline' => 'bg-gray-400', 'busy' => 'bg-red-500', 'away' => 'bg-yellow-500'];
$statusClass = $status ? ($statusColors[$status] ?? 'bg-gray-400') : null;
@endphp

<div class="relative inline-block">
    @if($src)
        <img
            src="{{ $src }}"
            alt="{{ $alt }}"
            class="{{ $sizeClass }} object-cover {{ $rounded ? 'rounded-full' : 'rounded-lg' }}"
        >
    @else
        <div class="{{ $sizeClass }} flex items-center justify-center bg-gray-200 text-gray-600 font-medium {{ $rounded ? 'rounded-full' : 'rounded-lg' }}">
            {{ $this->getInitials() }}
        </div>
    @endif

    @if($status)
        <span class="absolute bottom-0 right-0 block w-3 h-3 {{ $statusClass }} border-2 border-white rounded-full"></span>
    @endif
</div>
