@extends('layouts.app')

@section ('title')
Update Profile
@endsection

@section ('content')

<h1 class="mt-5">My Profile</h1>

<form action="/profile" method="POST">
  @csrf
  @method('PUT')
  <div class="row">
    <div class="col">
      <label for="firstName" class="mt-3">First name</label>
      <input type="text" class="form-control" name="firstName" value="{{ $profile->firstName }}" placeholder="First name">
    </div>
    <div class="col">
      <label for="lastName" class="mt-3">Last name</label>
      <input type="text" class="form-control" name="lastName" value="{{ $profile->lastName }}" placeholder="Last name">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <label for="email" class="mt-3">Email</label>
      <input type="email" class="form-control" name="email" value="{{ $profile->email }}" placeholder="Email">
    </div>
    <div class="col">
      <label for="phone" class="mt-3">Phone Number</label>
      <input type="text" class="form-control" name="phone" value="{{ $profile->phone }}" placeholder="Phone number">
    </div>
  </div>

  <div class="form-row">
  <div class="col-md">
    <label for="validationCustom03" class="mt-3">Address</label>
    <input type="text" class="form-control" id="address" name="address" value="{{ $profile->address }}" required placeholder="1234 Oak St.">
  </div>
</div>

  <div class="form-row">
  <div class="col-md-6 mb-3">
    <label for="validationCustom03" class="mt-3">City</label>
    <input type="text" class="form-control" id="city" name="city" value="{{ $profile->city }}" required placeholder="City">
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <label for="validationCustom04" class="mt-3">State</label>
    <input type="text" class="form-control" id="state" name="state" value="{{ $profile->state }}" required placeholder="State">
    <div class="invalid-feedback">
      Please provide a valid state.
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <label for="validationCustom05" class="mt-3">Zip</label>
    <input type="text" class="form-control" id="zip" name="zip" value="{{ $profile->zip }}" required placeholder="Zip Code">
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
</div>

<div class="form-group">
  <label for="lookingFor">Items I am looking for:</label>
  <textarea class="form-control" id="lookingFor" rows="2" name="lookingFor" placeholder="crib, pack and play, etc...">{{ $profile->lookingFor }}</textarea>
</div>

  <div class="form-group">
    <label for="biography">A little bit about me:</label>
    <textarea class="form-control" id="biography" rows="6" name="biography" placeholder="I am...">{{ $profile->biography }}</textarea>
  </div>

<button type="submit" class="btn btn-primary mt-1">Save</button>


</form>


@endsection
