<!-- resources/views/products/create.blade.php -->
<x-app-layout>
    <div class="m-11 text-center">
        <form action="{{ route('products.store') }}" method="post">
            @csrf
            <label for="name">Product Name:</label>
            <input type="text" name="name" required>
            <x-button class="ms-4">
                {{ __('Create Product') }}
            </x-button>
        </form>
    </div>
</x-app-layout>