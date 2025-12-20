# Avatar

A user avatar component for Laravel applications. Displays profile images or generates initials fallbacks with optional status indicators. Works with Livewire and Vue 3.

## Installation

```bash
composer require mrshanebarron/avatar
```

## Livewire Usage

### With Image

```blade
<livewire:sb-avatar src="/images/user.jpg" alt="John Doe" />
```

### With Initials Fallback

```blade
<livewire:sb-avatar name="John Doe" />
<!-- Displays "JD" -->
```

### Different Sizes

```blade
<livewire:sb-avatar name="User" size="xs" />
<livewire:sb-avatar name="User" size="sm" />
<livewire:sb-avatar name="User" size="md" />
<livewire:sb-avatar name="User" size="lg" />
<livewire:sb-avatar name="User" size="xl" />
```

### With Status Indicator

```blade
<livewire:sb-avatar name="John" status="online" />
<livewire:sb-avatar name="Jane" status="offline" />
<livewire:sb-avatar name="Bob" status="busy" />
<livewire:sb-avatar name="Alice" status="away" />
```

### Square Avatar

```blade
<livewire:sb-avatar name="John Doe" :rounded="false" />
```

### Livewire Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `src` | string | `null` | Image URL |
| `alt` | string | `null` | Alt text for image |
| `name` | string | `null` | Name for initials fallback |
| `size` | string | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `rounded` | boolean | `true` | Circular shape |
| `status` | string | `null` | Status: `online`, `offline`, `busy`, `away` |

## Vue 3 Usage

### Setup

```javascript
import { SbAvatar } from './vendor/sb-avatar';
app.component('SbAvatar', SbAvatar);
```

### Basic Usage

```vue
<template>
  <!-- With image -->
  <SbAvatar src="/images/user.jpg" alt="John Doe" />

  <!-- With initials fallback -->
  <SbAvatar name="John Doe" />
</template>
```

### Sizes

```vue
<template>
  <SbAvatar name="User" size="xs" />  <!-- 24px -->
  <SbAvatar name="User" size="sm" />  <!-- 32px -->
  <SbAvatar name="User" size="md" />  <!-- 40px -->
  <SbAvatar name="User" size="lg" />  <!-- 48px -->
  <SbAvatar name="User" size="xl" />  <!-- 64px -->
</template>
```

### With Status

```vue
<template>
  <SbAvatar name="John" status="online" />   <!-- Green dot -->
  <SbAvatar name="Jane" status="offline" />  <!-- Gray dot -->
  <SbAvatar name="Bob" status="busy" />      <!-- Red dot -->
  <SbAvatar name="Alice" status="away" />    <!-- Yellow dot -->
</template>
```

### User List Example

```vue
<template>
  <div class="flex -space-x-2">
    <SbAvatar
      v-for="user in users"
      :key="user.id"
      :src="user.avatar"
      :name="user.name"
      size="sm"
      class="ring-2 ring-white"
    />
  </div>
</template>
```

### Vue Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `src` | String | `null` | Image source URL |
| `alt` | String | `null` | Image alt text |
| `name` | String | `null` | Name for generating initials |
| `size` | String | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `rounded` | Boolean | `true` | Use circular shape |
| `status` | String | `null` | Status indicator: `online`, `offline`, `busy`, `away` |

## Sizes Reference

| Size | Dimensions | Font Size |
|------|------------|-----------|
| `xs` | 24x24px | text-xs |
| `sm` | 32x32px | text-sm |
| `md` | 40x40px | text-base |
| `lg` | 48x48px | text-lg |
| `xl` | 64x64px | text-xl |

## Status Colors

| Status | Color |
|--------|-------|
| `online` | Green |
| `offline` | Gray |
| `busy` | Red |
| `away` | Yellow |

## Features

- **Image Support**: Display user photos
- **Initials Fallback**: Auto-generates initials from name
- **Status Indicator**: Small dot showing user status
- **Multiple Sizes**: 5 preset sizes
- **Shape Options**: Circular or rounded square

## Styling

Uses Tailwind CSS:
- Gray background for initials
- Object-cover for images
- Status dot positioned bottom-right
- White border on status indicator

## Requirements

- PHP 8.1+
- Laravel 10, 11, or 12
- Tailwind CSS 3.x

## License

MIT License
