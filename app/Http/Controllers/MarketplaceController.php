<?php
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class MarketplaceController
{
    public function index()
    {
        $products = Product::all();
        return view('marketplace.index', compact('products'));
    }

    // Removed duplicate addToCart method
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('marketplace.show', compact('product'));
    }
    

    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Retrieve cart from session or create an empty array
        $cart = session()->get('cart', []);
        
        // If product is in the cart, increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            // Otherwise, add product to the cart
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image_url' => $product->image_url
            ];
        }

        // Store the updated cart back in the session
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function viewCart()
    {
        $cartItems = session()->get('cart', []);
        return view('marketplace.cart', compact('cartItems'));
    }



}

