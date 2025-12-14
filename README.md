# Laravel Design Avatar

Avatar component with initials fallback and status indicators for Laravel. Supports Livewire, Blade, and Vue 3.

## Installation

```bash
composer require mrshanebarron/avatar
```

## Usage

### Livewire Component

```blade
<livewire:ld-avatar />
```

### Blade Component

```blade
<x-ld-avatar />
```

## Configuration

Publish the config file:

```bash
php artisan vendor:publish --tag=ld-avatar-config
```

## Customization

### Publishing Views

```bash
php artisan vendor:publish --tag=ld-avatar-views
```

## License

MIT
