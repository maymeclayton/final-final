@extends('layouts.app')

@section('title')
  Contact Us
@endsection

@section ('content')

<div class="card text-center border-primary bg-warning text-primary mt-5 mb-5">
<div class="card-body">
  <p class="card-text">Here at Everything but the Baby we believe that communication is the key to both success and community. We welcome questions, suggestions, and simple hellos. Welcome and let us know how we can help you!</p>
</div>
</div>

    <div class="card-deck">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Questions</h5>
        <p class="card-text">Let us know if you have questions on how to effectively use this site or anything else you're wondering about!</p>
        <form action="mailto:mayme.clayton@gmail.com" method:"post" enctype="text/plain">
          <button type="submit" class="btn btn-danger">Contact</button>
        </form>
    </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Suggestions</h5>
        <p class="card-text">We are always looking for ways to make EBTB better - let us know your ideas!</p>
        <form action="mailto:mayme.clayton@gmail.com" method:"post" enctype="text/plain">
          <button type="submit" class="btn btn-danger">Contact</button>
        </form>
      </div>
    </div>
    </div>


  <!-- <div class="row">
    <div class="col-sm-6">
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Questions</h5>
          <p class="card-text">Let us know if you have questions on how to effectively use this site or anything else you're wondering about!</p>
          <form action="mailto:mayme.clayton@gmail.com" method:"post" enctype="text/plain">
            <button type="submit" class="btn btn-danger">Contact</button>
          </form>
        </div>
      </div>
    </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
          <h5 class="card-title">Suggestions</h5>
          <p class="card-text">We are always looking for ways to make EBTB better - let us know your ideas!</p>
          <form action="mailto:mayme.clayton@gmail.com" method:"post" enctype="text/plain">
            <button type="submit" class="btn btn-danger">Contact</button>
          </form>
      </div>
    </div>
  </div>
</div> -->





@endsection
