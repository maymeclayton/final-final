<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my_products_available = \App\Product::where([
          ['product_owner', \Auth::id()],
          ['rented', false],
          ])->get();
        $rented_from_me = \App\Product::where([
          ['rented', true],
          ['product_owner', \Auth::id()],
          ])->get();
        $rented_by_me = \App\Product::where([
          ['rented', true],
          ['rented_by', \Auth::id()],
          ])->get();
        $messages = \App\Message::where('recipient', \Auth::id())->get();

        return view('home', compact('my_products_available', 'rented_from_me', 'rented_by_me', 'messages'));
    }
}
