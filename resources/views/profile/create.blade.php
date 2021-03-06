@extends('layouts.app')

@section ('title')
Create a Profile
@endsection

@section ('content')

<!-- address -->
<!-- email -->
<!-- phone -->
<!-- bio -->
<!-- rented products -->
<!-- products for rent -->
<!-- looking for -->

<h1 class="mt-5">Profile Creation Station</h1>

<form action="/profile" method="post">
  @csrf
  <div class="row">
    <div class="col">
      <label for="firstName" class="mt-3">First name</label>
      <input type="text" class="form-control" name="firstName" placeholder="First name">
    </div>
    <div class="col">
      <label for="lastName" class="mt-3">Last name</label>
      <input type="text" class="form-control" name="lastName" placeholder="Last name">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <label for="email" class="mt-3">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="col">
      <label for="phone" class="mt-3">Phone Number</label>
      <input type="text" class="form-control" name="phone" placeholder="Phone number">
    </div>
  </div>

  <div class="form-row">
  <div class="col-md-6">
    <label for="validationCustom03" class="mt-3">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="1234" required>
  </div>
  <div class="col-md-6">
    <label for="validationCustom04" class="mt-3">Street Name</label>
    <input type="text" class="form-control" id="street" name="street" placeholder="Street name" required>
  </div>
</div>

  <div class="form-row">
  <div class="col-md-6 mb-3">
    <label for="validationCustom03" class="mt-3">City</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <label for="validationCustom04" class="mt-3">State</label>
    <input type="text" class="form-control" id="state" name="state" placeholder="State" required>
    <div class="invalid-feedback">
      Please provide a valid state.
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <label for="validationCustom05" class="mt-3">Zip</label>
    <input type="text" class="form-control" id="zip" name="zip"placeholder="Zip" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
</div>

<div class="form-group">
  <label for="lookingFor">Items I am looking for:</label>
  <textarea class="form-control" id="lookingFor" rows="2" name="lookingFor"></textarea>
</div>

  <div class="form-group">
    <label for="biography">A little bit about me:</label>
    <textarea class="form-control" id="biography" rows="6" name="biography"></textarea>
  </div>

<button type="submit" class="btn btn-primary mt-1">Save</button>


</form>





@endsection
