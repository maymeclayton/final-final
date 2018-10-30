@extends('layout')

@section('title')
Available products
@endsection

@section('content')

<h1 class="mt-5 mb-3 container">Available Products</h1>

  <div class="container mt-5">
    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="https://images.mattel.com/scene7/CHN28_01?$oslarge$&wid=773&hei=773" alt="Rock and Play">
            <div class="card-body">
              <h5 class="card-title">Rock and Play</h5>
              <h6 class="card-subtitle mb-2 text-muted">Fisher Price</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="products/details" class="card-link">rent</a>
              <a href="products/details" class="card-link">more information</a>
            </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="https://images.mattel.com/scene7/CHN28_01?$oslarge$&wid=773&hei=773" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Product</h5>
              <h6 class="card-subtitle mb-2 text-muted">Brand</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="products/details" class="card-link">rent</a>
              <a href="products/details" class="card-link">more information</a>
            </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="https://images.mattel.com/scene7/CHN28_01?$oslarge$&wid=773&hei=773" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Product</h5>
              <h6 class="card-subtitle mb-2 text-muted">Brand</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="products/details" class="card-link">rent</a>
              <a href="products/details" class="card-link">more information</a>
            </div>
        </div>
      </div>
    </div>
  </div>

@endsection
