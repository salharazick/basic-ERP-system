@extends("layout")

@section("content")
<br><br>

<h1 class="heading"> Invoice Report</h1><br><br>
<body class="itemtable">
<table class="table table-bordered">

<tr style="font-size:small;">

<br><br>

    <td><b>Date</b></td>
    <td><b>Invoice number</b></td>
    <td><b>Customer</b></td>
    <td><b>Customer district</b></td>
    <td><b>Item count</b></td>
    <td><b>Invoice amount</b></td>
    
</tr>

@foreach($data as $item)

<tr style="font-size: large;"> 

    <td>{{$item->date}}</td>
    <td>{{$item->invoice_no}}</td>
    <td>{{$item->customer}}</td>
    <td>{{$item->district}}</td>
    <td>{{$item->item_count}}</td>
    <td>{{$item->amount}}</td>
      
</tr>

@endforeach

</table>
</div>


</body>
@endsection