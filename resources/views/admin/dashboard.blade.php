{{-- resources/views/admin/dashboard.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold mb-4">👋 مرحباً يا {{ auth()->user()->name ?? 'Admin' }}</h1>
                    <p class="mb-6">هذا هو لوحة التحكم الخاصة بك.</p>

                    <div class="flex gap-4">
                        <a href="{{ route('products') }}"
                           class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                            🛒 Manage Products
                        </a>
                        <a href="{{ route('categories') }}"
                           class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">
                            📂 Manage Categories
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
