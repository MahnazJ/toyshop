<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart.checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        if(!$request->get('product_id')){
            return 
            ['message'=> 'Cart items returned', 
            'items' => Cart::where('user_id', auth()->user()->id)->sum('quantity')];

        }



        //Getting productdetails
        $product = Product::where('id', $request->get('product_id'))->first();

        //Checking whether product is already in cart, if so, update quantity
        $productFoundInCart = Cart::where('product_id', 
        $request->get('product_id'))->pluck('id');

        if($productFoundInCart->isEmpty())
        {
            $cart = Cart::create([
                'product_id' => $product->id,
                'quantity' => 1,
                'price' => $product->sale_price,
                'user_id' => auth()->user()->id,
             ]);
        }
        else
        //incrementing product quantity
        {
            $cart = Cart::where('product_id', $request->get('product_id'))
            ->increment('quantity');
        }

    

        //Adding product to cart   
         if($cart)
         {
            return ['message'=> 'Cart updated', 
            'items' => $userItems];
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
