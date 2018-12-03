@extends('layouts.app')

@section('content')

<!-- <div class="container">

  <div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif -->

    <nav class="mt-5">
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-messages" role="tab" aria-controls="nav-home" aria-selected="true">Messages</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-rented-by-me" role="tab" aria-controls="nav-profile" aria-selected="false">Rented by me</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-rented-from-me" role="tab" aria-controls="nav-contact" aria-selected="false">Rented from me</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-my-products-available" role="tab" aria-controls="nav-contact" aria-selected="false">My available products</a>
      </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">

      <div class="tab-pane fade show active" id="nav-messages" role="tabpanel" aria-labelledby="nav-messages-tab">
@foreach($messages as $m)
            <div class="card mt-3 mb-3">
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">From: {{ $m->user->name}}</h6>
                <p class="card-text">{{ $m->message_text }} </p>
              </div>
            </div>
@endforeach
      </div>

      <div class="tab-pane fade" id="nav-rented-by-me" role="tabpanel" aria-labelledby="nav-rented-by-me-tab">
        <div class="card-body">
          <div class="container mt-5">
            <div class="row">
@foreach ($rented_by_me as $rbm)
              <div class="col mb-5 ml-2 mr-2">
                <div class="card projectDescBox h-100" style="width: 18rem;">
                  <div class="card-header">
                    {{ $rbm->product_name }}
                  </div>
                  <img class="card-img" src="{{ $rbm->product_image }}" alt="{{ $rbm->product_name }}">
                    <div class="card-body">
                      <h5 class="card-subtitle mb-2 text-muted">{{ $rbm->product_brand }}</h5>
                      <p class="card-text">{{ $rbm->product_description }}</p>
                      <p class="card-text">${{ $rbm->product_price }} per week</p>
                      <a href="products/{{ $rbm->id }}/edit " class="card-link">edit</a>
                      <a href="products/{{ $rbm->id }}" class="card-link">remove listing</a>
                    </div>
                </div>
              </div>
@endforeach
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="nav-rented-from-me" role="tabpanel" aria-labelledby="nav-rented-from-me-tab">
        <div class="card-body">
          <div class="container mt-5">
            <div class="row">
  @foreach ($rented_from_me as $rfm)
              <div class="col mb-5 ml-2 mr-2">
                <div class="card projectDescBox h-100" style="width: 18rem;">
                  <div class="card-header">
                    {{ $rfm->product_name }}
                  </div>
                  <img class="card-img" src="{{ $rfm->product_image }}" alt="{{ $rfm->product_name }}">
                    <div class="card-body">
                      <h5 class="card-subtitle mb-2 text-muted">{{ $rfm->product_brand }}</h5>
                      <p class="card-text">{{ $rfm->product_description }}</p>
                      <p class="card-text">${{ $rfm->product_price }} per week</p>
                      <a href="products/{{ $rfm->id }}/edit " class="card-link">edit</a>
                      <a href="products/{{ $rfm->id }}" class="card-link">remove listing</a>
                    </div>
                </div>
              </div>
  @endforeach
            </div>
      </div>
    </div>
  </div>

      <div class="tab-pane fade" id="nav-my-products-available" role="tabpanel" aria-labelledby="nav-my-products-available-tab">
        <div class="card-body">
          <div class="container mt-5">
            <div class="row">
@foreach ($my_products_available as $mpa)
              <div class="col mb-5 ml-2 mr-2">
                <div class="card projectDescBox h-100" style="width: 18rem;">
                  <div class="card-header">
                    {{ $mpa->product_name }}
                  </div>
                  <img class="card-img" src="{{ $mpa->product_image }}" alt="{{ $mpa->product_name }}">
                    <div class="card-body">
                      <h5 class="card-subtitle mb-2 text-muted">{{ $mpa->product_brand }}</h5>
                      <p class="card-text">{{ $mpa->product_description }}</p>
                      <p class="card-text">${{ $mpa->product_price }} per week</p>
                      <a href="products/{{ $mpa->id }}/edit " class="card-link">edit</a>
                      <a href="products/{{ $mpa->id }}" class="card-link">remove listing</a>
                    </div>
                </div>
              </div>
@endforeach
            </div>
          </div>
        </div>
      </div>

</div>

<!-- </div>
</div> -->


@endsection
