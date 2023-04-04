<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table("products")->get();
        return view('product.index',['products'=>$data]);
    }

    public function addProduct(){
        return view('product.add');
    }

    public function saveProduct(Request $req){
        //dd($req);
        $validated=$req->validate([
            "productName"=>['required','min:4'],
            "quantity"=>['required','min:4'],
            "price"=>['required','min:4'],

           
        ]);

        //dd($validated);
        $data=Customer::create($validated);

        return redirect("/")->with('success', 'A product has been added!');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }
    public function edit($id){
        $data=Product::findOrFail($id);
        return view('product.edit',['product'=>$data]);
        return redirect('/')-> with('success', 'A product has been edited successfully!');
     }
 
     public function updateProduct(Request $req){
        //dd($req);

       
            $data=Product::find($req->id);
           
            
            $data->productName=$req->productName;
            $data->quantity=$req->quantity;
            $data->price=$req->price;

            $data->save();
            return redirect('/')-> with('success', 'A product has been edited successfully!');
 
     }
}
