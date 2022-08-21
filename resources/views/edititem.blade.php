@extends("layout")

@section("content")

<br><br>


    <h1 class="heading">Update Item</h1>
<form class="row g-3 add" name="additem" action="{{ route('updateitem') }}" method="POST">
@csrf 


<br><br>
  <div class="form-group col-md-3">
    <label><b>Item code:</b></label>
    <input type="text" class="form-control" name="itemcode" placeholder="Enter item code" value="{{ $data->item_code }}" required>
  </div>

  <div class="form-group col-md-3">
    <label><b>Item name:</b></label>
    <input type="text" class="form-control" name="itemname" placeholder="Enter item name" value="{{ $data->item_name }}" required>
  </div>

  <div class="form-group col-md-5">
    <label><b>Item category:</b></label>
    <select class="form-select" name="itemcategory" value="{{ $data->item_category }}" required>
      <option selected disabled value="">Choose...</option>
      @foreach($category->all() as $items)
        <option value="{{$items->id}}" {{$data->item_category == $items->id ? 'selected' : ''}}>{{$items->category}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group col-md-5">
    <label><b>Item subcategory:</b></label>
    <select class="form-select" name="itemsubcategory" value="{{ $data->item_subcategory }}" required>
      <option selected disabled value="">Choose...</option>
      @foreach($subcategory->all() as $items)
        <option value="{{$items->id}}" {{$data->item_subcategory == $items->id ? 'selected' : ''}}>{{$items->sub_category}}</option>
      @endforeach
    </select>
  </div>
  

<br><br>
  <div class="form-group col-md-3">
    <label><b>Quantity:</b></label>
    <input type="text" class="form-control" name="quantity" placeholder="Enter no.of quantity" value="{{ $data->quantity }}" required>
  </div>
  
  <div class="form-group col-md-3">
    <label><b>Unit Price:</b></label>
    <input type="text" class="form-control" name="unitprice" placeholder="Mention unit price" value="{{ $data->unit_price }}" required>
  </div>
  <br><br>
  <div class="form-group col-md-3">
    <button class="btn btn-primary" type="submit">Submit</button>
    <button class="btn btn-warning" type="reset">Resume</button>
  </div>
  
  <input type="hidden" class="form-control" name="id" value="{{ $data->id }}">

</form>



@endsection