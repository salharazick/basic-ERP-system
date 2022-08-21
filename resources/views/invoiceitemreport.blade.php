@extends("layout")

@section("content")
<br><br>

<h1 class="heading"> Invoice Item Report</h1><br><br>
<body class="itemtable">
<table class="table table-bordered">

<tr style="font-size:small;">


<br><br>

    <td><b>Date</b></td>
    <td><b>Invoice number</b></td>
    <td><b>Customer name</b></td>
    <td><b>Item name</b></td>
    <td><b>Item code</b></td>
    <td><b>Item category</b></td>
    <td><b>Item Unit_price</b></td>
    
</tr>

@foreach($data as $item)

<tr style="font-size: large;"> 

    <td>{{$item->date}}</td>
    <td>{{$item->invoice_no}}</td>
    <td>{{$item->first_name}} {{$item->middle_name}} {{$item->last_name}}</td>
    <td>{{$item->item_name}}</td>
    <td>{{$item->item_code}}</td>
    <td>{{$item->item_category}}</td>
    <td>{{$item->unit_price}}</td>
      
</tr>

@endforeach

</table>
</div>


</body>
@endsection