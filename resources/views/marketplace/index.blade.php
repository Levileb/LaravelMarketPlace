<!DOCTYPE html>
<html>
<head>
    <title>Marketplace</title>
</head>
<body>
    <h1>Marketplace</h1>
    <div class="products">
    @foreach($products as $product)
        <a href="{{ route('marketplace.show', $product->id) }}">
            <div class="card">
                    <div class="card">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" />
                        <h2>{{ $product->name }}</h2>
                        <p>{{ $product->description }}</p>
                        <p>${{ $product->price }}</p>
                        <form action="{{ route('cart.add', $product->id) }}" method="POST">
                            @csrf
                            <button type="submit">Add to Cart</button>
                        </form>
                    </div>
                @endforeach
                @if(session('success'))
                 <div style="color: green;">{{ session('success') }}</div>
                 @endif
            </div>
        </a>     
    </div>
</body>
</html>
