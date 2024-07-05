<!-- PopupModal.blade.php -->
@props(['title'])
<div class="flex fixed inset-0 justify-center items-center bg-black bg-opacity-50">
    <div class="p-6 bg-white rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">{{ $title }}</h2>
            <button @click="closeModal" class="text-gray-500 hover:text-gray-700">
                <i class="fa fa-times"></i>
            </button>
        </div>
        {{ $slot }}
    </div>
</div>
