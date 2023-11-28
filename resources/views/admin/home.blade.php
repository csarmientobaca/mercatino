<x-app-layout>
    @livewire('client-list')
</x-app-layout>
<form action="{{ route('products.store') }}" method="post">
    @csrf
    <label for="name">Product Name:</label>
    <input type="text" name="name" required>
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" required>
    <button type="submit">Add Product</button>
</form>