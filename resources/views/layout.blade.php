<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/materia/bootstrap.min.css" integrity="sha384-B4morbeopVCSpzeC1c4nyV0d0cqvlSAfyXVfrPJa25im5p+yEN/YmhlgQP/OyMZD" crossorigin="anonymous">

<!-- Jquery -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>



</head>
<body>
   
{{View::make('header')}}
@yield('content')
{{View::make('footer')}}


<style>

.add{
    padding-top: 100px;
    padding-bottom:80px;
    padding-left: 250px;
    padding-right: 200px;
}

.heading{
    padding-left: 250px;
    color: darkblue;
}

.table{

     padding-bottom:180px; 
    padding-left: 10px;
    padding-right: 5px; 
}

.itemtable{
  
    padding-bottom:180px;
    padding-left: 10px;
    padding-right: 5px;
} 

.detail
{   padding-top: 100px;
    padding-left: 250px;
    font-size: larger;
    
}

.btn
{
    margin-left: 2rem;
}


</style>

</body>
</html>