@extends("layout")

@section("content")
<br><br>

<h1 class="heading"> List of Items</h1><br><br>
<body class="itemtable">
<table class="table table-bordered">

<tr style="font-size:medium;">

    <td><b>Id</b></td>
    <td><b>Item code</b></td>
    <td><b>Item name</b></td>
    <td><b>Item category</b></td>
    <td><b>Item subcategory</b></td>
    <td><b>Quantity</b></td>
    <td><b>Unit price</b></td>
    
 

</tr>

@foreach($items as $item)

<tr style="font-size: large;"> 

    <td>{{$item['id']}}</td>
    <td>{{$item['item_code']}}</td>
    <td>{{$item['item_name']}}</td>
    <td>{{$item['item_category']}}</td>
    <td>{{$item['item_subcategory']}}</td>
    <td>{{$item['quantity']}}</td>
    <td>{{$item['unit_price']}}</td>
      
   <td>     
      <a href={{"edititem/".$item['id']}} class="btn btn-warning">Edit</a>
      <a href={{"viewitem/".$item['id']}} class="btn btn-success">view</a>
      <a href={{"deleteitem/".$item['id']}} class="btn btn-danger">Delete</a>
    </td> 

</tr>

@endforeach

</table>
</div>

<span>
    {{$items->links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style>
</body>
@endsection