<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-gray-700 dark:text-gray-100">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="mx-auto max-w-6xl px-4 lg:px-6">
            <div class="overflow-hidden bg-gray-50 shadow-lg dark:bg-gray-900 sm:rounded-xl border border-gray-200 dark:border-gray-700">
                <div class="p-8 text-lg font-semibold text-gray-800 dark:text-gray-100 text-center">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
