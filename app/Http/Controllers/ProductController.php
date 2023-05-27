<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Resources\ProductCollection;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ProductCollection(Product::all());
    }

    public function filtered($id){
        return new ProductCollection(Product::get()->where('category_id',$id));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'description'=>'required',
            'category_id'=>'required',
            'price'=>'required',
        ]);
        if ($validator->fails()){
            return $validator->errors();
        }
        $validated=$validator->valid();
        $fermer_id=auth()->id();
        $validated['fermer_id']=$fermer_id;
        if($request->hasFile('image')){
            $validated['image_path']=$request->file('image')->store("images/$fermer_id",'public');

        }
        $product=Product::create($validated);
        return 'Успешно';
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
    public function edit($product)
    {
        return Product::find($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $product)
    {
        $product=Product::find($product);
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'description'=>'required',
            'category_id'=>'required',
            'price'=>'required',
        ]);
        if ($validator->fails()){
            return $validator->errors();
        }
        $validated=$validator->valid();
        $fermer_id=auth()->id();
        $validated['fermer_id']=$fermer_id;
        if($request->hasFile('image')){
            $deleted=File::delete(storage_path("app/public/$product->image_path"));
            $validated['image_path']=$request->file('image')->store("images/$fermer_id",'public');

        }
        $product->update($validated);

        return 'успех';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
