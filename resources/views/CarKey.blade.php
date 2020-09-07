<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Car Key Management System</title>
  </head>
  <body>
    @if($layout=='index')
      <div class="row">
      <div class="container-fluid">
          <section class="col">
            @include("CarKeyList")
          </section>
          <section class="col"></section> 
        </div> 
      </div>

    @elseif($layout=='create')
    <div class="container-fluid">
      <div class="row">
        <section class="col">
          @include("CarKeyList")
        </section>
        <section class="col">
        <form action="{{url('/store')}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label>Car Model Number</label>
              <input name="CarKeyNumber" type="number" class="form-control"  placeholder="Enter Car Model Number">
            </div>
            <div class="form-group">
              <label>Car Model</label>
              <input name="CarModel" type="text" class="form-control"  placeholder="Enter Car Model">
            </div>
            <div class="form-group">
              <label>Car Year</label>
              <input name="CarYear" type="text" class="form-control"  placeholder="Enter Car Year">
            </div>
            <div class="form-group">
              <label>Additional Info</label>
              <input name="AdditionalInfo" type="text" class="form-control"  placeholder="Enter any additional info">
            </div>
            <input type="submit" class="btn btn-info" value="Save">
            <input type="reset" class="btn btn-warning" value="Reset">
          </form>   
        </section> 
      </div>
    </div>

    @elseif($layout=='show')
    <div class="container-fluid">
      <div class="row">
        <section class="col">
          @include("CarKeyList")
        </section>
        <section class="col"></section> 
      </div>
    </div>

    @elseif($layout=='edit')
    <div class="container-fluid">
      <div class="row">
        <section class="col">
          @include("CarKeyList")
        </section>
        <section class="col">
          <form action="{{url('/update'.$CarKeys->CarKeyNumber)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label>Car Model Number</label>
            <input value="{{$CarKey->CarKeyNumber}}" name="CarKeyNumber" type="number" class="form-control"  placeholder="Enter Car Model Number">
            </div>
            <div class="form-group">
              <label>Car Model</label>
              <input value="{{$CarKey->CarModel}}" name="CarModel" type="text" class="form-control"  placeholder="Enter Car Model">
            </div>
            <div class="form-group">
              <label>Car Year</label>
              <input value="{{$CarKey->CarYear}}" name="CarYear" type="text" class="form-control"  placeholder="Enter Car Year">
            </div>
            <div class="form-group">
              <label>Additional Info</label>
              <input value="{{$CarKey->AdditionalInfo}}" name="AdditionalInfo" type="text" class="form-control"  placeholder="Enter any additional info">
            </div>
            <input type="submit" class="btn btn-info" value="Update">
            <input type="reset" class="btn btn-warning" value="Reset">
          </form>   
  
        </section> 
      </div>
    </div>
    @endif


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>