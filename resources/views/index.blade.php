<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link rel="icon" href="favicon.ico" >
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>B&B</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>
<body>
    <!-- ***** Preloader Start ***** -->
    @include('components.navbar')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item item-1">
                <div class="img-fill">
                    <div class="text-content">
                        
                        <h4>Industrial Project <br> Management Consultancy</h4>
                        <p>COMBINING STRONG SKILLS TO KEEP YOUR PROJECTS ON TRACK</p>
                        
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            
            <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="request-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>Request a call back right now ?</h4>
                    <span>Mauris ut dapibus velit cras interdum nisl ac urna tempor mollis.</span>
                </div>
                <div class="col-md-4">
                    <a href="/contact" class="border-button">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    

    

    <!-- New Table Section -->
    

    <div class="more-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="more-info-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="left-image">
                                <img src="assets/images/image2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="right-content">
                                <span>HOME</span>
                                <h2>Would <em>you like to ...</em></h2>
                                <p><strong>• Manage your projects using the right tools?<br>• Flexibility and simplicity in managing your projects ?<br>• Control your costs and deadlines ?<br>• Complement your teams with passionate and specialised experts ?</strong></p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





    
 

    <div class="partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   
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

    <script language="text/Javascript"> 
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t){                   //declaring the array outside of the
            if(!cleared[t.id]){                      // function makes it static and global
                cleared[t.id] = 1;  // you could use true and false, but that's more typing
                t.value='';         // with more chance of typos
                t.style.color='#fff';
            }
        }
    </script>
   

</body>
</html>
