@extends("layout")

@section("content")

<br><br>
<h1 class="heading">Update Customer</h1>
<form class="row g-3 add" action="{{ route('updatecustomer') }}" method="POST">

@csrf
<div class="form-group col-md-3">
  
    <label class="form-label"><b>Title</b></label>
    <select id="inputState" class="form-select" name="title" value="{{ $data->title }}">
      <option selected>Choose...</option>
      <option value="Mr" @if($data->title == 'Mr') selected='selected' @endif>Mr</option>
      <option value="Mrs" @if($data->title == 'Mrs') selected='selected' @endif>Mrs</option>
      <option value="Miss" @if($data->title == 'Miss') selected='selected' @endif>Miss</option>
      <option value="Dr" @if($data->title == 'Dr') selected='selected' @endif>Dr</option>
    </select>
  </div>
  
  <div class="form-group col-md-3">
    <label class="form-label"><b>First name:</b></label>
    <input type="text" class="form-control" name="firstname" placeholder="Enter first name" value="{{ $data->first_name }}">
  </div>
 
  <div class="form-group col-md-4">
    <label class="form-label"><b>Middle name:</b></label>
    <input type="text" class="form-control" name="middlename" placeholder="Enter middle name" value="{{ $data->middle_name}}">
  </div>
  <div class="form-group col-md-4">
    <label class="form-label"><b>Last name:</b></label>
    <input type="text" class="form-control" name="lastname" placeholder="Enter last name" value="{{ $data->last_name}}">
  </div>
  <div class="form-group col-md-4">
    <label class="form-label"><b>Contact number:</b></label>
    <input type="text" class="form-control" name="contactno" placeholder="Enter contact-no" value="{{ $data->contact_no }}">
  </div>

  <div class="form-group col-md-4">
    <label class="form-label"><b>District:</b></label>
    <select id="inputState" class="form-select" name="district" value="{{ $data->district}}">
      <option selected>Choose...</option>
      @foreach($district->all() as $item)
        <option value="{{$item->id}}" {{$data->district == $item->id ? 'selected' : ''}}> {{$item->district}}</option>
      @endforeach  
        
   
    </select>
  </div>
  
  <div class="form group col-12">
    <button type="submit" class="btn btn-primary">Update</button>
    
  </div>

  <input type="hidden" class="form-control" name="id" value="{{ $data->id }}">
  
</form>

@endsection