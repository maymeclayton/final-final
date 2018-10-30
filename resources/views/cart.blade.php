@extends('layout')

@section('title')
  Shopping Cart
@endsection


@section ('content')

<h2 class="container mt-5 mb-5">Check out all your cool finds!</h2>

<!-- This cart will be completed when someone selects rent. -->
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Description</th>
      <th scope="col">Rental Period</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Rock and Play</th>
      <td>rocking bassinet/swing</td>
      <td>3 months</td>
      <td>$20</td>
      <td>1</td>
    </tr>
    <tr>
      <th scope="row">Crib</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">Bouncer</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>


@endsection
