@extends("layout")

@section("content")
<br><br>
<h1 class="heading">Details</h1>

<p class="detail">

<b>Item code:</b>
{{ $data['item_code'] }} <br><br>

<b>Item name:</b>
{{ $data['item_name'] }}<br><br>

<b>Item category:</b>
{{ $data['item_category'] }}<br><br>

<b>Item subcategory:</b>
{{ $data['item_subcategory'] }}<br><br>

<b>Quantity:</b>
{{ $data['quantity'] }} <br><br>

<b>Unit price:</b>
{{ $data['unit_price'] }}<br><br>

</p>

@endsection