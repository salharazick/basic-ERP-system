@extends("layout")

@section("content")
<br><br>

<h1 class="heading"> Item Report</h1><br><br>
<body class="itemtable">
<table class="table table-bordered">

<tr style="font-size:small;">

    <td><b>Item name</b></td>
    <td><b>Item category</b></td>
    <td><b>Item subcategory</b></td>
    <td><b>Quantity</b></td>
    
</tr>

@foreach($data as $item)

<tr style="font-size: large;"> 

    <td>{{$item->item_name}}</td>
    <td>{{$item->itemcategory}}</td>
    <td>{{$item->itemsubcategory}}</td>
    <td>{{$item->quantity}}</td>
      
</tr>

@endforeach

</table>


</body>
@endsection