<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function buyNow($id)
    {
        $product = Product::find($id);
        return view('orders.buynow', compact('product'));
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
        $product = Product::find($request->productId);
        // dd($product->id);
        $qty = $request->qty;
        $ppu = $product->price;
        $amount = $qty * $ppu;
        // dd($amount);
        $in_stock = $product->inStock;
        // dd($in_stock);
        if ($in_stock < $qty || $in_stock < 1 ) {
            return redirect()->back()->with('error', "Sorry, We have only {$in_stock} {$product->name}");
        } else {
            
            $product->order()->create([
                'name' => $product->name,
                'price' => $product->price,
                'qty' => $request->qty,
                'amount' => $amount,
            ]);

            $category = Category::find($product->category_id);
            $category->products('id', $product->id)->update([
                'inStock' => $in_stock - $qty,
            ]);

            return redirect()->back()->with('success', 'Your order has been placed successfully');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
