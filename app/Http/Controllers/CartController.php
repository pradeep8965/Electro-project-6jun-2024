<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cartDatas2 = DB::table('carts')
            ->join('users', 'users.id', '=', 'carts.customer_id')
            ->join('products', 'products.id', '=', 'carts.product_id')
            ->where('users.id', Auth::id())
            ->select(
                'products.id as product_id',
                'products.*', // Select all columns from the products table
                'carts.*' // Select all columns from the carts table
            ) 
            ->get();

        $cartDatas = [];

        foreach ($cartDatas2 as $index => $item) {
            $cartDatas["cartItem" . ($index + 1)] = [
                'product_id' => $item->product_id,
                'product_name' => $item->product_name,
                'unit_price' => $item->sell_price,
                'qty' => $item->qty,
                'total' => $item->sell_price * $item->qty,
            ];
        }

        //dd($cartDatas);
        $grandTotal = collect($cartDatas)->sum('total');

        //echo $grandTotal; // Output: 10200
        //$grandTotal = 10200;
        return view('shop/cart',[
                                'cartDatas'=>$cartDatas,
                                'cartDatas2'=>$cartDatas2,
                                'grandTotal'=>$grandTotal
                                ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productId = $request->input('product_id');
        $customerId = auth()->id(); // Assuming the user is authenticated
    
        // Check if the product is already in the cart
        $existingCartItem = Cart::where('customer_id', $customerId)
                                ->where('product_id', $productId)
                                ->first();
    
        if ($existingCartItem) {
            // Return JSON response indicating the product is already in the cart
            return response()->json(['message' => 'Product is already in your cart!'], 400);
        }
    
        // Add to cart logic
        Cart::create([
            'customer_id' => $customerId,
            'product_id' => $productId,
            'qty' => 1, // Default quantity
        ]);
    
        // Return JSON response
        return response()->json(['message' => 'Product added to cart!'], 200);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //var_dump($cart->id);
        //dd('Cart Destroy');
         // Delete the cart item
        $cart->delete();

        // Return back to the same page with a success message (optional)
        return redirect()->back()->with('success', 'Item removed from cart.');
    }
    public function showCart()
    {
        $cartData = Cart::with('product')->get(); // Fetch related product data

        
        return view('shop/cart', ['cartData' => $cartData]);
    }
}
