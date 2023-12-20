<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $products = Product::orderBy('id', 'desc')->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.add', compact('categories'));
    }

   /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $destination = 'uploads/products/';
            $fileName = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destination, $fileName);
        }
        $categoryId = Category::find($request->category);
        // dd($categoryId->status);
        $categoryId->products()->create([
            'name' => $request->name,
            'price' => $request->price,
            'photo' => $fileName,
            'status' => $request->status
        ]);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, $id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('products.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product, $id)
    {
        $product = Product::find($id);
        $categoryId = Category::find($request->category);
        if ($request->hasFile('photo')) {
            if (File::exists('uploads/products/'.$product->photo)) {
                File::delete('uploads/products/'.$product->photo);
            }

            if ($request->hasFile('photo')) {
                $file = $request->photo;
                $destination = 'uploads/products/';
                $fileName = date('YmdHis') . "." . $file->getClientOriginalExtension();
                $file->move($destination, $fileName);
            }
            $categoryId->products('id', $id)->update([
                'photo' => $fileName,
                'name' => $request->name,
                'category_id' => $request->category,
                'price' => $request->price,
                'status' => $request->status
            ]);
        }else{
            $categoryId->products('id', $id)->update([
                'name' => $request->name,
                'category_id' => $request->category,
                'price' => $request->price,
                'status' => $request->status
            ]);
        }

        
        
        
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, $id)
    {
        $product = Product::find($id);
        $product->delete();
        if (File::exists('uploads/products/'.$product->photo)) {
            File::delete('uploads/products/'.$product->photo);
        }
        return redirect()->back();

    }
}
