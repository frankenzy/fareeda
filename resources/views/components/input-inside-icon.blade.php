<!-- components/input-inside-icon.blade.php -->
<div
    {{ $attributes->merge(['class' => 'w-full flex items-center rounded-md border-2 shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm h-16 text-lg']) }}>
    <div class="flex items-center p-3 h-full text-2xl text-white border-r" style="width:35%">
        {{ $icon }}
    </div>
    <div class="flex w-full h-full">
        {{ $input }}
    </div>
</div>
