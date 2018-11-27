@extends('layouts.app')

<!--Can this be pulled in from the database?  -->
@section('title')
  User Profile
@endsection


@section ('content')

<h1 class="container mt-5 mb-3">Stephanie Smith</h1>

<div class="container">
  <div class="row">
    <div class="col">
      <img src="https://images.pexels.com/photos/1102341/pexels-photo-1102341.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=350" class="img-fluid" alt="Responsive image">
        <div class="input-group mt-3 mb-3">
          <form>
            <div class="form-group border border-primary">
              <label for="exampleFormControlFile1" class=" mt-2 mr-2 ml-2">upload photo:</label>
              <input type="file" class="form-control-file mb-2 mr-2 ml-2" id="user-photo">
            </div>
          </form>
        </div>
    </div>
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">About me</h5>
          <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
          <p class="card-text">She's a good girl. Loves her Mama. Loves Jesus and America too. She's a good girl, crazy 'bout Elvis. Loves horses and her boyfriend too. It's a long day,
            living in Reseda. There's a freeway running through the yard. And I'm a bad boy 'cause I don't even miss her. I'm a bad boy for breaking her heart.</p>
          <!-- <a href="#" class="card-link">Rent from Me</a>
          <a href="#" class="card-link">Another link</a> -->
        </div>
      </div>
    </div>
  </div>





@endsection
