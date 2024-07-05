<a href="{{ $route ?? route('dashboard') }}" class="flex justify-center items-center w-full h-full">
    <button data-toggle="tooltip" type="@isset($route) ?'button':'submit' @endisset"
        data-placement="right"
        {{ $attributes->merge(['class' => 'inline-flex items-center px-9 py-4 dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150']) }}>

        <i class="{{ $icon ?? 'fa fa-sign-in me-4 text-xl' }}"></i>
        {{ $label ?? 'Se connecter' }}
    </button>
</a>
