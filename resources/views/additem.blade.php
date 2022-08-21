@extends("layout")

@section("content")

<br><br>


    <h1 class="heading">Add Item</h1>
<form class="row g-3 add" name="additem" action="{{ route('additem') }}" method="POST">
@csrf 


<br><br>
  <div class="form-group col-md-3">
    <label><b>Item code:</b></label>
    <input type="text" class="form-control" name="itemcode" placeholder="Enter item code" required>
  </div>

  <div class="form-group col-md-3">
    <label><b>Item name:</b></label>
    <input type="text" class="form-control" name="itemname" placeholder="Enter item name" required>
  </div>

  <div class="form-group col-md-5">
    <label><b>Item category:</b></label>
    <select class="form-select" name="itemcategory" required>
      <option selected disabled value="">Choose...</option>
      @foreach($category->all() as $items)
        <option value="{{$items->id}}">{{$items->category}}</option>
      @endforeach
    </select>
  </div>
<br><br>
  <div class="form-group col-md-5">
    <label><b>Item subcategory:</b></label>
    <select class="form-select" name="itemsubcategory" required>
      <option selected disabled value="">Choose...</option>
      @foreach($subcategory->all() as $item)
        <option value="{{$item->id}}">{{$item->sub_category}}</option>
      @endforeach
    </select>
  </div>
<br><br>
  <div class="form-group col-md-3">
    <label><b>Quantity:</b></label>
    <input type="text" class="form-control" name="quantity" placeholder="Enter no.of quantity" required>
  </div>
  
  <div class="form-group col-md-3">
    <label><b>Unit Price:</b></label>
    <input type="text" class="form-control" name="unitprice" placeholder="Mention unit price" required>
  </div>
  <br><br>
  <div class="form-group col-md-3">
    <button class="btn btn-primary" type="submit">Submit</button>
    <button class="btn btn-warning" type="reset">Resume</button>
  </div>
  


</form>



@endsection