<!-- resources/views/products/create.blade.php -->
<form action="{{ route('products.store') }}" method="post">
    @csrf
    <label for="name">Product Name:</label>
    <input type="text" name="name" required>
    <button type="submit">Add Product</button>
</form>