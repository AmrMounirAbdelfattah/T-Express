<!DOCTYPE html>

<head>
        <meta charset="UTF-8" />
        <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/shopping-and-retail-15/512/Bag-512.png"/> 
        <title>T-Express</title>

        <!--[if lt IE 9]>
            <script src="JavaScript/html5shiv.min.js"></script>
        <![endif]-->

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Start Bootstrap CSS-->
          <!-- Font Awesome -->
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
          <!-- Bootstrap core CSS -->
          <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
          <!-- Material Design Bootstrap -->
          <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
        <!-- End Bootstrap CSS -->

        <link rel = "stylesheet"
        type = "text/css"
        href = "css/T-Express_Style.css" />
        <style>
          @media (max-width: 767px) {
            .page-footer {
                bottom: 0!important;
                width:100%!important;
                position: relative!important;
            }
          }
          @media (min-width: 768px) and (max-width: 1024px) {
            .page-footer {
                bottom: 0!important;
                width:100%!important;
                position:relative!important;
            }
          }
          @media (min-width: 1025px) {
            .page-footer {
                bottom: 0!important;
                width:100%!important;
                position:relative!important;
            }
          }
          
          </style>      
</head>

<body>

<!--Start Header-->

    <!--Start Navbar-->
    <nav style="background-color: #31AFF5!important"class="navbar navbar-expand-lg navbar-dark primary-color">

      <!-- Navbar brand -->
      <a class="navbar-brand" href="T-Express_MarketPlace.html">
          <img src="Img/Bag.svg" width="30" height="30" class="d-inline-block align-top" alt="">
          T-Express
      </a>
  
      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
  
      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="basicExampleNav">
  
      <!-- Links -->
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <a href="Add_Market" class="nav-link">
              <i class="fas fa-shopping-basket"></i>Add Market</a>
          </li>
          <li class="nav-item">
              <a href="Add_Categorie" class="nav-link">
              <i class="fas fa-th"></i>Add Categorie</a>
          </li>
          <li class="nav-item">
              <a href="Add_SubCategorie" class="nav-link">
              <i class="fas fa-th-list"></i>Add SubCategorie</a>
          </li>
          <li class="nav-item">
              <a href="Add_Product" class="nav-link">
              <i class="fas fa-box-open"></i>Add Product</a>
          </li>
      </ul>
        </div>
      </nav>
      <!-- Links -->
      </div>
      <!-- Collapsible content -->
      
</nav>
<div style="background-color: #fff!important;margin: 0px 0px!important;"class="input-group md-form form-sm form-2 pl-0">
<input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search" aria-label="Search">
<div class="input-group-append">
  <span class="input-group-text amber " id="basic-text1"><i class="fas fa-search text-grey"
      aria-hidden="true"></i></span>
</div>
</div>
<!-- End Navbar -->

<!-- End Header -->

<!--Start body-->
 <!-- error -->
 
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
                @endforeach
                </ul>
                </div>
                @endif
                @if(\Session::has('success'))
                <div class="alert alert-success">
                <h2>Data Added</h2>
                </div>
                @endif
                <!-- error --> 
    
<div style="margin-top: 150px;"class="container">
  
  <div class="row">
    <div class="col-md-6">
    <h1>Add SubCategorie</h1>
    </div>
  </div>
  
    
  
<div class="row">
  
  <div class="col-md-6">
  <form class="text-center border-light" method="post" action="{{url('Add_SubCategorie')}}">
    @csrf
  

  <select class="form-control form-group" name="marketSelect"><option>Please Select a Product Market</option>
      <option value="0">Carrefour</option>
      <option value="1">Fathalla Market</option>
      
    </select>
    
    <select class="form-control form-group" name="categorieSelect"><option>Please Select a Product Categorie</option>
      <option value="0">Bakery</option>
      <option value="1">Beverages</option>
      <option value="2">Candies</option>
     
    </select>

   
    
 <div class="form-group">
   <label for="SubCategoriename" >SubCategorie Name</label>
   <input class="form-control" name="SubCategoriename" type="text">
 </div>
    

<div class="form-group">
 
<label class="control-label">SubCategorie Image</label>
 
<input class="filestyle" name="SubCategorieimage"data-icon="false" type="file">
 
</div>
    
 
    <button style="background-color:#2196f3 !important;" class="btn btn-info my-4 rounded-pill"type="submit" name="SubCategorieSubmit">Add SubCategorie</button>
  
    </div></form>
    
    </div>
    
</div>
</div>

<!-- End Card -->
<!-- End body -->
        



        
        <!--Start Bootstrap JS-->
            <!-- JQuery -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <!-- Bootstrap tooltips -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <!-- MDB core JavaScript -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
        <!-- End Bootstrap JS-->

</body>

</html>