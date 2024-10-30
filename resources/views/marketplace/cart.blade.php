<!DOCTYPE html>
<html>
<head>
    <title>Your Cart</title>
</head>
<body>
    <h1>Your Cart</h1>
    
    @if($cartItems->isEmpty())
        <p>Your cart is empty!</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>${{ $item->price }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>${{ $item->price * $item->qty }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p><strong>Total:</strong> ${{ Cart::subtotal() }}</p>
    @endif
    
    <p><a href="{{ route('marketplace') }}">Continue Shopping</a></p>
</body>
</html>
