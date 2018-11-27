@extends('layouts.app')

@section('title')
Available products
@endsection

@section('content')

<h1 class="mt-5 mb-3 container">Available Products</h1>

  <form class="form-inline my-2 my-lg-0">
    <input class="form-control ml-3 mt-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-info ml-3 mt-2" type="submit">Search</button>
  </form>

  <div class="container mt-5">
    <div class="row">
@foreach ($products as $p)
      <div class="col-4 mb-5">
        <div class="card projectDescBox h-100" style="width: 18rem;">
          <div class="card-header">
            {{ $p->product_name }}
          </div>
          <img class="card-img" src="{{ $p->product_image }}" alt="{{ $p->product_name }}">
            <div class="card-body">
              <h5 class="card-subtitle mb-2 text-muted">{{ $p->product_brand }}</h6>
              <p class="card-text">{{ $p->product_description }}</p>
              <a href="products/{{ $p->id }}" class="card-link">rent</a>
              <a href="products/{{ $p->id }}" class="card-link">more information</a>
            </div>
        </div>
      </div>

@endforeach

    </div>
  </div>

@endsection
