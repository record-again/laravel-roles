<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assigns Permission') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form method="post" action="{{ Route('assigns.store') }}" class="mt-6 space-y-6">
                        @csrf
                        <div class="mb-4">
                            <x-select-input name="role" label="Select Roles" :items="$roles" />
                        </div>
                        <div class="mb-4">
                            <x-checkbox-input name="permissions" :items="$permissions" />
                        </div>
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>