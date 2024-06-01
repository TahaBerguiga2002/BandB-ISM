<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Sat 09:00-17:00</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>+216 98 291 528</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>B&B-ISM</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">HOME
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">B&B ISM</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="/services">KNOW-HOW</a>
              </li>                          
              <li class="nav-item">
                <a class="nav-link" href="/sector">BUSINESS SECTORS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">CONTACT US</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('.navbar-nav .nav-item').click(function(){
        $('.navbar-nav .nav-item.active').removeClass('active');
        $(this).addClass('active');
    });
});

document.addEventListener("DOMContentLoaded", function() {
   
    var path = window.location.pathname;
    
    var links = document.querySelectorAll('.navbar-nav .nav-item .nav-link');
    
    links.forEach(link => {
      link.parentElement.classList.remove('active');
      
      if (link.getAttribute('href') === path) {
        link.parentElement.classList.add('active');
      }
    });
  });
</script>
