<!-- Separator.blade.php -->
@props(['position' => 'horizontal', 'color' => 'gray', 'size' => 'border-t', 'margin' => 'my-1', 'style' => 'solid'])

@php
    $borderStyle = $style === 'dotted' ? 'border-dotted' : 'border-solid';
@endphp

<div class="{{ $position === 'vertical' ? 'border-l' : $size }} {{ $borderStyle }} border-{{ $color }}-300 {{ $margin }}"></div>
