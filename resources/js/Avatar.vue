<template>
  <div class="relative inline-block">
    <img v-if="src" :src="src" :alt="alt || name || 'Avatar'" :class="[sizeClass, 'object-cover', rounded ? 'rounded-full' : 'rounded-lg']">
    <div v-else :class="[sizeClass, 'flex items-center justify-center bg-gray-200 text-gray-600 font-medium', rounded ? 'rounded-full' : 'rounded-lg']">{{ initials }}</div>
    <span v-if="status" :class="['absolute bottom-0 right-0 block w-3 h-3 border-2 border-white rounded-full', statusColor]"></span>
  </div>
</template>

<script>
import { computed } from 'vue';

export default {
  name: 'SbAvatar',
  props: {
    src: { type: String, default: null },
    alt: { type: String, default: null },
    name: { type: String, default: null },
    size: { type: String, default: 'md' },
    rounded: { type: Boolean, default: true },
    status: { type: String, default: null }
  },
  setup(props) {
    const sizes = { xs: 'w-6 h-6 text-xs', sm: 'w-8 h-8 text-sm', md: 'w-10 h-10 text-base', lg: 'w-12 h-12 text-lg', xl: 'w-16 h-16 text-xl' };
    const statusColors = { online: 'bg-green-500', offline: 'bg-gray-400', busy: 'bg-red-500', away: 'bg-yellow-500' };
    const sizeClass = computed(() => sizes[props.size] || sizes.md);
    const statusColor = computed(() => statusColors[props.status] || 'bg-gray-400');
    const initials = computed(() => {
      if (!props.name) return '?';
      return props.name.split(' ').slice(0, 2).map(w => w[0].toUpperCase()).join('');
    });
    return { sizeClass, statusColor, initials };
  }
};
</script>
