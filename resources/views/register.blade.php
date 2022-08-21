<br><br>

<body id="reg">

<div class="container custom-register">
<div class="card" style="background-color:lavenderblush;width:30rem;">
    <div class="row">
        <div class="col-sm-9">
<div class="card-body">


        <form action="register" method="POST" name="register">
            @csrf
  <div class="mb-3">
    <label for="username" class="form-label">Username:</label>
    <input type="text" name="username" class="form-control" id="username">
   </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address:</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password:</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
<br>
  <button type="submit" class="btn btn-primary">Register</button><br><br>
</form>
        </div>

    </div>

</div>
</div>
</div>


</body>

