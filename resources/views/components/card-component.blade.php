<!-- CardComponent.blade.php -->
@props(['image' => '', 'title' => '', 'description' => ''])

<div class="overflow-hidden bg-white rounded-lg">
    <div class="relative items-center">
        <div class="flex">
            <img src="{{ $image }}" alt="{{ $title }}" class="object-cover w-24 h-24">
            <div class="mx-4 w-full">
                <h3 class="text-lg font-semibold text-gray-800">{{ $title }}</h3>
                <p class="text-gray-600">{{ $description }}</p>

               <x-separator :style="'dotted'"/>

                <div class="flex relative grid-cols-3 justify-between items-center mt-0">
                    <div class="flex justify-start">
                        <x-info-build :icon_color="'text-orange-400'" />
                    </div>
                    <div class="flex justify-center">
                        <x-info-build :icon_color="'text-gray-400'" :icons="'fa fa-hourglass-start'" :value="'10:00 - 10:00'" />
                    </div>
                    <div class="flex justify-end">
                        <x-info-build  :icons="'fa fa-database'" :icon_color="'text-gray-400'" :value="'16'" />
                    </div>
                </div>
                <div class="flex justify-between lg:mt-4 sm:mt-3 card-footer">
                    <div>
                        <span class="text-sm text-gray-500">
                            <i class="text-gray-500 fa fa-arrow-right"></i>
                        </span>
                    </div>
                    <div class="mb-2">
                        <img src="/images/scan-code.png" alt="code bar" class="object-cover w-6 h-6"/>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

{{-- <!-- CardComponent.blade.php -->
@props(['image' => '', 'title' => '', 'description' => '', 'infos' => []])

<div class="overflow-hidden bg-white rounded-lg">
    <div class="relative items-center">
        <div class="flex">
            <img src="{{ $image }}" alt="{{ $title }}" class="object-cover w-24 h-24">
            <div class="mx-4 w-full">
                <h3 class="text-lg font-semibold text-gray-800">{{ $title }}</h3>
                <p class="text-gray-600">{{ $description }}</p>

                <x-separator :style="'dotted'"/>

                <div class="grid grid-cols-3 gap-4 mt-4">
                    @foreach ($infos as $info)
                        <div class="flex justify-center">
                            <x-info-build :icon_color="$info['icon_color'] ?? 'text-gray-400'" :value="$info['value'] ?? ''" />
                        </div>
                    @endforeach
                </div>

                <div class="flex justify-between mt-3">
                    <div>
                        <span class="text-sm text-gray-500">
                            <i class="text-gray-500 fa fa-user-o"></i>
                        </span>
                    </div>
                    <div class="mb-2">
                        <img src="/images/scan-code.png" alt="code bar" class="object-cover w-8 h-8"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

