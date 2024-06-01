<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    

    <title>Finance Business - Contact Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>
  <body>

  @include('components.navbar')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Business Sector</h1>
            <span></span>
          </div>
        </div>
      </div>
    </div>

    


    
    <div class="services">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>SECTEURS <em>D'ACTIVITÉ</em></h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="service-item">
          <img src="assets/images/image5.jpg" alt="">
          <h2 class="overlay-text">AGRI-FOOD</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="service-item">
          <img src="assets/images/image6.jpg" alt="">
          <h2 class="overlay-text">ECOLOGY</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="service-item">
          <img src="assets/images/image7.jpg" alt="">
          <h2 class="overlay-text">ENERGY</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="service-item">
          <img src="assets/images/image8.jpg" alt="">
          <h2 class="overlay-text">INDUSTRY</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="service-item">
          <img src="assets/images/image9.jpg" alt="">
          <h2 class="overlay-text">TRANSPORT</h2>
        </div>
      </div>
    </div>
  </div>
</div>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   
    

    <!-- Footer Starts Here -->
    @include('components.footer')
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>