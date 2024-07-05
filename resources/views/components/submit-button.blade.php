<!-- resources/views/components/submit-button.blade.php -->

@props(['label' => 'Se connecter','icon' =>'fa fa-sign-in'])

<button data-toggle="tooltip" type="submit" data-placement="right"
    {{ $attributes->merge(['class' => 'items-center px-9 py-4 dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150']) }}>

    <i class="{{ $icon}}"></i>
    {{ $label }}
</button>