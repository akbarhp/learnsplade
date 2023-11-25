<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-splade-link href="{{ route('users.create') }}" class="p-4 bg-green-500 text-white hover:bg-green-400 rounded-md">Create User</x-splade-link>
            <x-splade-table :for="$users" pagination-scroll="preserve"> 
                <x-splade-cell actions as="$user">
                    <x-splade-link href="{{ route('users.edit', $user) }}" class="p-2 bg-yellow-500 hover:bg-yellow-400 rounded-md text-white">Edit</x-splade-link>
                    <x-splade-form 
                        action="{{ route('users.destroy', $user) }}"
                        confirm="Delete User" 
                        confirm-text="Are you sure you want to delete user?"
                        confirm-button="Yaudah deh apus aja *_*!"
                        cancel-button="jangan napa gausah dihapus!"
                        method="delete"
                    >
                        <x-splade-button class=" bg-red-500 hover:bg-red-400 text-white rounded-md">Delete</x-splade-button>
                    </x-splade-form>
                </x-splade-cell>
            </x-splade-table>
        </div>
    </div>
</x-app-layout>