<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Product = Product::all();
        return view ('products.index')->with('products',$Product);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Product::create($input);
        return redirect('Product')->with('flash_message','Product Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Pr = Product::find($id);
        return view('products.show')->with('prr',$Pr);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Pr = Product::find($id);
        return view('products.edit')->with('pr',$Pr);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Pr = Product::find($id);
        $input = $request->all();
        $Pr->update($input);
        return redirect('Product')->with('flash_message','product updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return redirect('Product')->with('flash_message','deleted successfully');   
    }
}
