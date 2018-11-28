@extends('layouts.app')

<!--Can this be pulled in from the database?  -->
@section('title')
  User Profile
@endsection


@section ('content')

<h1 class="container mt-5 mb-3">Stephanie Smith</h1>

@foreach ($profile as $p)

<div class="container">
  <div class="row">
    <div class="col">
      <img src="https://images.pexels.com/photos/1102341/pexels-photo-1102341.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=350" class="img-fluid" alt="Responsive image">
        <div class="input-group mt-3 mb-3">
          <!-- <form>
            <div class="form-group border border-primary">
              <label for="exampleFormControlFile1" class=" mt-2 mr-2 ml-2">upload photo:</label>
              <input type="file" class="form-control-file mb-2 mr-2 ml-2" id="user-photo">
            </div>
          </form> -->
        </div>
    </div>
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">A little bit about me:</h5>
          <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
          <p class="card-text">{{ $profile->biography }}</p>
          <!-- <a href="#" class="card-link">Rent from Me</a>
          <a href="#" class="card-link">Another link</a> -->
        </div>
      </div>
        <a href="profile/{{$profile->user->id}}/edit" type="button" class="btn btn-warning mt-3">Update Profile</button>
    </div>

  </div>

@endforeach

</div>




@endsection
