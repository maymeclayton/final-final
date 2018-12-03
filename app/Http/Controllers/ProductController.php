<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $q = $request->input( 'q' );

        if($q != ""){
      		$products = \App\Product::where ( 'product_name', 'LIKE', '%' . $q . '%' )->orWhere ( 'product_description', 'LIKE', '%' . $q . '%' )->get ();
        }
        else { $products = \App\Product::where('rented', false)->get(); }

        return view ('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('products.consign');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p = new \App\Product;

        $p->product_name=$request->input('product_name');
        $p->product_image=$request->input('product_image');
        $p->product_brand=$request->input('product_brand');
        $p->product_description=$request->input('product_description');
        $p->product_price=$request->input('product_price');
        if ($request->input('rented'))
          {$p->rented=$request->input('rented');
          } else {
          $p->rented=false;
          };
        $p->product_owner=\Auth::id();
        $p->save();

        $request->session()->flash('status', "A new product was added!");

        return redirect ('/products');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = \App\Product::find($id);

        return view ('products.details', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = \App\Product::find($id);
        return view ('products.edit', compact('product'));

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
      $p = \App\Product::find($id);
      $p->product_name=$request->input('product_name');
      $p->product_image=$request->input('product_image');
      $p->product_brand=$request->input('product_brand');
      $p->product_description=$request->input('product_description');
      $p->product_price=$request->input('product_price');
      if ($request->input('rented'))
        {$p->rented=$request->input('rented');
        } else {
        $p->rented=false;
        };
      $p->product_owner=\Auth::id();
      $p->save();

      return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $p = \App\Product::find($id);
        $p->delete();

        $request->session()->flash('status', "Product was deleted!");
        return redirect('home');

    }

    public function message()
    {
      return view('products/messages');

    }
}
