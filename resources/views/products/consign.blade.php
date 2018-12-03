@extends('layouts.app')

@section('title')
  Consign with us
@endsection


@section ('content')

<h3 class="mt-5 mb-5"> Want to share your baby stuff? Fill out the form below to get started!</h3>

  <form action='/products' method="post">
    @csrf
    <div class="form-group">
      <label for="product_name">Product Name</label>
      <input type="text" class="form-control" id="product_name" name="product_name" placeholder="crib, pack & play, swaddles, etc...">
    </div>
    <div class="form-group">
      <label for="product_brand">Brand</label>
      <input type="text" class="form-control" id="product_brand" name="product_brand" placeholder="Summer Infant, Fisher Price, 4moms, etc...">
    </div>
    <div class="form-group">
      <label for="product_description">Description of product</label>
      <textarea class="form-control" id="product_description"  name="product_description" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="product_price">Price/Week</label>
      <input type="text" class="form-control" id="product_price" name="product_price" placeholder="$5, $10, $15, etc...">
    </div>
    <div class="form-group">
      <label for="product_image">Product Image URL</label>
      <input type="text" class="form-control" id="product_image" name="product_image" placeholder="https://">
    </div>
    <div class="custom-control custom-checkbox form-check">
      <input type="checkbox" class="form-check-input" id="rented" name="rented">
      <label class="form-check-label" for="rented">This item is currently rented.</label>
    </div>
        <button type="submit" class="btn btn-primary mt-4">add</button>
  </form>

@endsection
