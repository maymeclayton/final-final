@extends('layout')

@section('title')
  Consign with us
@endsection


@section ('content')

<h3 class="container mt-5 mb-5"> Want to share your baby stuff? Fill out the form below to get started!</h3>

  <form>
    <div class="form-group">
      <label for="exampleFormControlInput1">Product Name</label>
      <input type="text" class="form-control" id="product-name" placeholder="crib, pack & play, swaddles, etc...">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Brand</label>
      <input type="text" class="form-control" id="product-name" placeholder="Summer Infant, Fisher Price, 4moms, etc...">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Description of product</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Price/Week</label>
      <input type="text" class="form-control" id="product-name" placeholder="$5, $10, $15, etc...">
    </div>
    <div class="row">
      <div class="col">
        <button type="submit" class="btn btn-primary mt-2">add</button>
      </div>
      <div class="col">
        <div class="form-group">
          <label for="exampleFormControlFile1">upload photo:</label>
          <input type="file" class="form-control-file" id="user-photo">
        </div>
      </div>
    </div>
  </form>

@endsection
