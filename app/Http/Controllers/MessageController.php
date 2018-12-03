<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function edit(Request $request, $product_number){

      $message = \App\Message::where('recipient', \Auth::id())->get();

      return view('messages', compact('message', 'product_number'));
    }



    public function store(Request $request, $product_number){

      $product= \App\Product::find($product_number);

      $m = new \App\Message;
      $m->sender_id=\Auth::id();
      $m->product_number=$product_number;
      $m->recipient = \App\User::find($product->product_owner)->id;
      $m->message_text=$request->input('message_text');
      $m->save();

      // dd($request);

      return redirect('/products');






    }
}
