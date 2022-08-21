<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ERP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>

        @if(session()->has('user'))
        
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">{{session()->get('user')['name']}}</a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="logout">Logout</a></li>
        </ul>
        </li>

        @else
        <li class="nav-item">
          <a class="nav-link" href="register">Register</a>
        </li>
       @endif

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Customers</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="customer">Add customer</a>
            <a class="dropdown-item" href="customerlist">Customer list</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Items</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="item">Add items</a>
            <a class="dropdown-item" href="itemslist">Items list</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="invoicereport">Invoice report</a>
            <a class="dropdown-item" href="invoiceitemreport">Invoice item report</a>
            <a class="dropdown-item" href="itemreport">Item report</a>
          </div>
        </li>
      </ul>

    
    </div>
  </div>
  
</nav>
