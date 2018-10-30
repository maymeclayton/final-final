@extends('layout')

@section('title')
<!-- TODO: Can this be pulled in from the database?-->
  product detail
@endsection


@section ('content')

  <div class="container mt-5 text-center">
    <div class="row">
      <div class="col-4 text-left">
        <form>
            <!-- description will be pulled from the database -->
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description:</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly>Gaga googoo. Moomoo MaaMaa. Waa Waa wawa Gaagaa gaa doo ga gaga. Laa goo gaga da dada.</textarea>
            </div>
            <div>
              <label for="exampleFormControlTextarea1">Rental period:</label>
              <input type="text" class="form-control" id="rentalNumber" rows="1" placeholder="enter number here..."></input>
            </div>
            <div>
              <select class="custom-select mr-sm-2 mt-2" id="rentalIncrement">
                <option selected>Choose timeframe...</option>
                <option value="1">Week</option>
                <option value="2">Month</option>
                <option value="3">Year</option>
              </select>
            </div>
            <!-- price will be pulled from database -->
            <div class="form-group mt-2">
              <label for="exampleFormControlTextarea1">Price:</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" readonly>$5/week</textarea>
            </div>
            <button type="submit" class="btn btn-lg btn-primary">Add to cart</button>
          </form>
          </div>
      <div class="col-8">
        <!-- image will be pulled from database? -->
        <img src="https://images.mattel.com/scene7/CHN28_01?$oslarge$&wid=773&hei=773" alt="rock and play" width="400" height="400" class="rounded img-thumbnail content-left">
        <!-- image be pulled from the database -->
      </div>
    </div>





@endsection
