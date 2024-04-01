<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-black leading-tight">
            {{ __('Football Manager') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @livewire('testt')
    </div>
</x-app-layout>
