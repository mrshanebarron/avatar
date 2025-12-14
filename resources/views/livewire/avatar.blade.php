<div class="relative inline-block">
    @if($src)
        <img
            src="{{ $src }}"
            alt="{{ $alt }}"
            @class([
                'object-cover',
                'rounded-full' => $shape === 'circle',
                'rounded-lg' => $shape === 'square',
                'w-8 h-8' => $size === 'sm',
                'w-10 h-10' => $size === 'md',
                'w-12 h-12' => $size === 'lg',
                'w-16 h-16' => $size === 'xl',
            ])
        >
    @else
        <div
            @class([
                'flex items-center justify-center bg-gray-200 text-gray-600 font-medium',
                'rounded-full' => $shape === 'circle',
                'rounded-lg' => $shape === 'square',
                'w-8 h-8 text-xs' => $size === 'sm',
                'w-10 h-10 text-sm' => $size === 'md',
                'w-12 h-12 text-base' => $size === 'lg',
                'w-16 h-16 text-lg' => $size === 'xl',
            ])
        >
            {{ $this->getInitials() }}
        </div>
    @endif
    @if($status)
        <span
            @class([
                'absolute block rounded-full ring-2 ring-white',
                'w-2.5 h-2.5' => $size === 'sm',
                'w-3 h-3' => $size === 'md',
                'w-3.5 h-3.5' => $size === 'lg',
                'w-4 h-4' => $size === 'xl',
                'bg-green-500' => $status === 'online',
                'bg-red-500' => $status === 'offline',
                'bg-yellow-500' => $status === 'away',
                'bg-gray-400' => $status === 'busy',
                'bottom-0 right-0' => $statusPosition === 'bottom-right',
                'top-0 right-0' => $statusPosition === 'top-right',
            ])
        ></span>
    @endif
</div>
