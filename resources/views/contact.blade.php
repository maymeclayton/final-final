@extends('layouts.app')

@section('title')
  Contact Us
@endsection

@section ('content')

<h1 class="container mt-5 mb-5 text-center">Questions? Drop us a line below!</h1>
  <form>
    <div class="form-group">
      <label for="exampleFormControlInput1">Name</label>
      <input type="text" class="form-control" id="product-name">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Email Address</label>
      <input type="email" class="form-control" id="product-name">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Message</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
      <button type="submit" class="btn btn-primary mt-2">submit</button>
  </form>

@endsection
