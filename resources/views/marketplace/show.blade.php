<!DOCTYPE html>
<html>
<head>
    <title>{{ $product->name }}</title>
</head>
<body>
    <h1>{{ $product->name }}</h1>
    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" style="max-width: 300px;">
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Price:</strong> ${{ $product->price }}</p>

    <!-- Add to Cart Form -->
    <form action="{{ route('cart.add', $product->id) }}" method="POST">
        @csrf
        <button type="submit">Add to Cart</button>

    </form>
    @if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
    @endif


    <!-- Link to go back to marketplace -->
    <p><a href="{{ route('marketplace') }}">Back to Marketplace</a></p>
</body>
</html>
