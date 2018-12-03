@extends('layouts.app')

@section('title')
Edit a Product
@endsection

@section('content')

<h1 class="mt-5 mb-3 container">Edit Product Details:</h1>

<form action='/products/{{ $product->id }}' method="post">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="product_name">Product Name</label>
    <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name }}">
  </div>
  <div class="form-group">
    <label for="product_brand">Brand</label>
    <input type="text" class="form-control" id="product_brand" name="product_brand" value="{{ $product-> product_brand }}">
  </div>
  <div class="form-group">
    <label for="product_description">Description of product</label>
    <textarea class="form-control" id="product_description"  name="product_description" rows="3">{{ $product->product_description }}</textarea>
  </div>
  <div class="form-group">
    <label for="product_price">Price/Week</label>
    <input type="text" class="form-control" id="product_price" name="product_price" value="{{ $product->product_price }}">
  </div>
  <div class="form-group">
    <label for="product_image">Product Image URL</label>
    <input type="text" class="form-control" id="product_image" name="product_image" value="{{ $product->product_image }}">
  </div>
  <div class="custom-control custom-checkbox form-check">
    <input type="checkbox" class="form-check-input" id="rented" name="rented" {{ $product->rented == true ? 'checked': ''}}>
    <label class="form-check-label" for="rented">This item is currently rented.</label>
  </div>

  @if ( Auth::id() == $product->user->id )

      <button type="submit" class="btn btn-primary mt-4">update</button>
      <a href="/products" class="btn btn-danger mt-4">cancel</a>

  @else

    <a href="/products" class="btn btn-danger mt-2">Back</a>

  @endif

</form>

@endsection
