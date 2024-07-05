@props(['icons', 'value', 'icon_color'])

<div class="flex">
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <span class="{{ $icon_color ??'text-red-500' }}"><i class="{{ $icons??'fa fa-star' }} text-sm"></i></span>

    <div class="mx-2 mt-1 text-sm text-gray-500">{{ $value ??'0' }}</div>
</div>
