{{-- resources/views/admin/products/index.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-bold mb-6">📦 Products</h2>

                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300 dark:border-gray-700 rounded-lg">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th class="px-4 py-2 text-left">#</th>
                                    <th class="px-4 py-2 text-left">Name</th>
                                    <th class="px-4 py-2 text-left">Category</th>
                                    <th class="px-4 py-2 text-left">Price</th>
                                    <th class="px-4 py-2 text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-2">
                                            {{ $loop->iteration + ($products->currentPage()-1)*$products->perPage() }}
                                        </td>
                                        <td class="px-4 py-2">{{ $product->name }}</td>
                                        <td class="px-4 py-2">{{ $product->category->name ?? '-' }}</td>
                                        <td class="px-4 py-2">${{ $product->price }}</td>
                                        <td class="px-4 py-2 flex gap-2">
                                            @can('update', $product)
                                                <a href="{{ url('admin/products/'.$product->id.'/edit') }}"
                                                   class="px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">
                                                    ✏️ Edit
                                                </a>
                                            @endcan

                                            @can('delete', $product)
                                                <form action="{{ url('admin/products/'.$product->id) }}" method="POST"
                                                      onsubmit="return confirm('Delete this product?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 text-sm">
                                                        🗑️ Delete
                                                    </button>
                                                </form>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
