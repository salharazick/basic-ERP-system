@extends("layout")

@section("content")

<br><br>
<h1 class="heading">Add Customer</h1>
<form class="row g-3 add" action="addcustomer" method="POST">

@csrf
<div class="form-group col-md-3">
  
    <label class="form-label"><b>Title</b></label>
    <select id="inputState" class="form-select" name="title" required>
      <option selected>Choose...</option>
      <option value="Mr">Mr</option>
      <option value="Mrs">Mrs</option>
      <option value="Miss">Miss</option>
      <option value="Dr">Dr</option>
    </select>
  </div>
  
  <div class="form-group col-md-3">
    <label class="form-label"><b>First name:</b></label>
    <input type="text" class="form-control" name="firstname" placeholder="Enter first name" required>
  </div>
  <div class="form-group col-md-4">
    <label class="form-label"><b>Middle name:</b></label>
    <input type="text" class="form-control" name="middlename" placeholder="Enter middle name" required>
  </div>
  <div class="form-group col-md-4">
    <label class="form-label"><b>Last name:</b></label>
    <input type="text" class="form-control" name="lastname" placeholder="Enter last name" required>
  </div>
  <div class="form-group col-md-4">
    <label class="form-label"><b>Contact number:</b></label>
    <input type="text" class="form-control" name="contactno" placeholder="Enter contact-no">
  </div>

  <div class="form-group col-md-4">
    <label class="form-label"><b>District:</b></label>
    <select id="inputState" class="form-select" name="district" required>
      <option selected>Choose...</option>
      @foreach($district->all() as $item)
        <option value="{{$item->id}}">{{$item->district}}</option>
      @endforeach
    </select>
  </div>
  
  <div class="form group col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-warning">Resume</button>
  </div>

  
</form>

@endsection