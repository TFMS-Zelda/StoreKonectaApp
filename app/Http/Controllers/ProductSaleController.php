<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductSale\StoreProductSaleRequest;
use App\Models\Product;
use App\Models\ProductSale;


class ProductSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productSales = ProductSale::orderBy("id", "DESC")->get();
        return view('sales.index', compact('productSales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();

        return view('sales.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductSaleRequest $request)
    {
        $productSales = ProductSale::orderBy("id", "DESC")->get();

        $product = Product::findOrFail($request->product_id);
        $category_id = $product->category->id;

        $stock = ($product->stock - 1);

        if ($product->stock == '0') {
            return back()->with('warning', '¡No puede realizar la compra de este producto porque su stock actual es 0!');
        }

        try {
            //code...
            $product->name_product = $product->name_product;
            $product->reference = $product->reference;
            $product->price = $product->price;
            $product->category_id = $product->category_id;
            $product->stock = $stock;
            $product->update();

            $productSale = new ProductSale();
            $productSale->product_id = $request->product_id;
            $productSale->category_id = $category_id;
            $productSale->user_id = auth()->user()->id;
            $productSale->save();
            return back()->with('success', 'Venta realizada correctamente!');
        } catch (\Throwable $th) {

            return redirect()->route('sales.index')->with('error', 'Error al momento de realizar una venta de un producto correctamente!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productSale = ProductSale::findOrFail($id);
        return view('sales.show', compact('productSale'));
    }
}
