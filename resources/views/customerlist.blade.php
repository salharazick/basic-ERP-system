@extends("layout")

@section("content")
<br><br>

<h1 class="heading"> List of Customers</h1><br><br>
<body class="table">
<table class="table table-bordered">

<tr style="font-size:medium;">

    <td><h3><b>Id</b></h3></td>
    <td><h3><b>Title</b></h3></td>
    <td><h3><b>First name</b></h3></td>
    <td><h3><b>Middle name</b></h3></td>
    <td><h3><b>Last name</b></h3></td>
    <td><h3><b>Contact No</b></h3></td>
    <td><h3><b>District</b></h3></td>
    
 

</tr>

@foreach($customer as $item)

<tr style="font-size:large;"> 

    <td>{{$item['id']}}</td>
    <td>{{$item['title']}}</td>
    <td>{{$item['first_name']}}</td>
    <td>{{$item['middle_name']}}</td>
    <td>{{$item['last_name']}}</td>
    <td>{{$item['contact_no']}}</td>
    <td>{{$item['district']}}</td>
      
   <td>     
      <a href={{"edit/".$item['id']}} class="btn btn-warning">Edit</a>
      <a href={{"view/".$item['id']}} class="btn btn-success">view</a>
      <a href={{"delete/".$item['id']}} class="btn btn-danger">Delete</a>
    </td> 

</tr>

@endforeach

</table>
</div>

<span>
    {{$customer->links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style>
</body>
@endsection