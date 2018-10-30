@extends('layout')

@section('title')
  product detail
@endsection


@section ('content')

  <div class="container mt-5 text-center">
    <div class="row">
      <div class="col-4 text-left">
            <!-- description will be pulled from the database -->
            <p>Description:</p>
            <!-- rental period will be a drop down selected by the  -->
            <p>Rental Period:</p>
            <!-- price will be pulled from database -->
            <p>Price:</p>
            <!-- user enters -->
            <p>Quantity:</p>
          </div>
      <div class="col-8">
        <!-- image will be pulled from database? -->
        <img src="https://images.mattel.com/scene7/CHN28_01?$oslarge$&wid=773&hei=773" alt="rock and play" class="rounded">
        <!-- image be pulled from the database -->
      </div>
    </div>





@endsection
