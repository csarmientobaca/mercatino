<div>
    <h1>User : {{ $userName }}</h1>
    <table class="min-w-full text-left text-sm font-light">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="2">No products found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>