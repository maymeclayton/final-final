@extends('layouts.app')

@section('content')

<h1 class="container mt-5 mb-5 text-center">Contact a seller</h1>

  <form action="/messages/{{$product_number}}" method="post">
    @csrf

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Message</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message_text"></textarea>
    </div>
      <button type="submit" class="btn btn-primary mt-2">Send</button>
  </form>










@endsection
