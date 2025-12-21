@php
$sizes = ['xs' => ['size' => '24px', 'font' => '10px'], 'sm' => ['size' => '32px', 'font' => '12px'], 'md' => ['size' => '40px', 'font' => '14px'], 'lg' => ['size' => '48px', 'font' => '16px'], 'xl' => ['size' => '64px', 'font' => '20px']];
$sizeData = $sizes[$this->size] ?? $sizes['md'];
$statusColors = ['online' => '#22c55e', 'offline' => '#9ca3af', 'busy' => '#ef4444', 'away' => '#eab308'];
$statusColor = $this->status ? ($statusColors[$this->status] ?? '#9ca3af') : null;
@endphp

<div style="position: relative; display: inline-block;">
    @if($this->src)
        <img
            src="{{ $this->src }}"
            alt="{{ $this->alt }}"
            style="width: {{ $sizeData['size'] }}; height: {{ $sizeData['size'] }}; object-fit: cover; {{ $this->rounded ? 'border-radius: 50%;' : 'border-radius: 8px;' }}"
        >
    @else
        <div style="width: {{ $sizeData['size'] }}; height: {{ $sizeData['size'] }}; font-size: {{ $sizeData['font'] }}; display: flex; align-items: center; justify-content: center; background: #e5e7eb; color: #4b5563; font-weight: 500; {{ $this->rounded ? 'border-radius: 50%;' : 'border-radius: 8px;' }}">
            {{ $this->getInitials() }}
        </div>
    @endif

    @if($this->status)
        <span style="position: absolute; bottom: 0; right: 0; display: block; width: 12px; height: 12px; background: {{ $statusColor }}; border: 2px solid white; border-radius: 50%;"></span>
    @endif
</div>
