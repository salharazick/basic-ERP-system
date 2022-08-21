@extends("layout")

@section("content")
<br><br>
<h1 class="heading">Details</h1>

<p class="detail">

<b>Title:</b>
{{ $data['title'] }} <br><br>

<b>First name:</b>
{{ $data['first_name'] }}<br><br>

<b>Middle name:</b>
{{ $data['middle_name'] }}<br><br>

<b>Last name:</b>
{{ $data['last_name'] }}<br><br>

<b>Contact-No:</b>
{{ $data['contact_no'] }} <br><br>

<b>District:</b>
{{ $district['district'] }}<br><br>

</p>

@endsection