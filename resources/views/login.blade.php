

<br><br>

<body id="body">
<div class="container custom-login">
  <div class="card" style="background-color:lightblue;width:30rem;"> 
    <div class="row">
        <div class="col-sm-10">

    <div class="card-body">


        <form action="login" method="POST" name="login">
            @csrf
  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Email address:</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div><br>
  <div class="form-group">
    <label for="exampleInputPassword1" class="form-label">Password:</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
<br>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
    
        </div>
        </div>
    </div>
    </div>
</div>


</body>

