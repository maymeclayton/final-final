@extends('layouts.app')

@section('content')

<div class="container">

  <div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

  <div class="card mt-5">
    <div class="card-header">My Dashboard</div>
      <div class="card-body">

        <div class="card mb-3">
          <div class="card-header">
            What I've rented:
          </div>
          <div class="card-body">
          </div>
        </div>
        <div class="card mb-3">
          <div class="card-header">
            What others have rented from me:
          </div>
          <div class="card-body">
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            My items that may still be rented:
          </div>
          <div class="card-body">
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
                        <h5 class="card-subtitle mb-2 text-muted">{{ $p->product_brand }}</h5>
                        <p class="card-text">{{ $p->product_description }}</p>
                        <p class="card-text">${{ $p->product_price }} per week</p>
                        <a href="products/{{ $p->id }}/edit " class="card-link">edit</a>
                        <a href="products/{{ $p->id }}" class="card-link">remove listing</a>
                      </div>
                  </div>
                </div>

          @endforeach

              </div>
            </div>

          </div>
        </div>

    </div>
  </div>

</div>
@endsection
