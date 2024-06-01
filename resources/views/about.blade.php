<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Finance Business - About Page</title>

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
            <h1>B&B ISM</h1>
            <span></span>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info about-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span>OUR EXTENSIVE EXPERIENCE IN CONSULTING</span>
                    <h2>WHO WE<em> ARE ? :</em></h2>
                    <p><strong>B&B ISM</strong>specializes in consulting, project management and training in <strong>industrial organization</strong> and <strong>operational performance</strong>. Our range of skills, and our <strong>experience</strong>,
                    both in manufacturing companies
                    and as consultants, is a guarantee of <strong>success</strong> in our assignments with our customers and on their projects (new projects, expansion, improvement or takeover projects).
                    <br><br>
                    Borrowing heavily from Lean Management, and more generally from the tools and methods of industrial organization, as well as those of industry 4.0, we intervene on issues of productivity, supply chain, quality, team management, project management, whether industrial or MES (Manufacturing Execution System).
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="assets/images/image3.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
                <h2><em>LEAN</em> KNOWLEDGE BASE</h2>       
            </div>
            <div class="paragraph">
                <p>Le Lean Management est devenu le système et l'organisation de référence dans l’industrie. Héritier
                de l’Organisation Scientifique du Travail, adapté par et pour les entreprises japonaises, il est désormais mis en place mondialement, dans les grands groupes comme dans les plus petites entreprises.
                <br><br></p>
            </div>
            <div class="mt-3 table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Toyota Production System (TPS)</th>
                            <th>Productivity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>The foundations of Lean, those of Toyota...</td>
                            <td>Methods and tools for optimising resources.../td>
                        </tr>
                        <tr>
                            <th>Indicators</th>
                            <th>Maintenance</th>
                        </tr>
                        <tr>
                            <td>Lean KPIs...</td>
                            <td>From TPM to CMMS...</td>
                        </tr>
                        <tr>
                            <th>Quality</th>
                            <th>Scientific Organisation of Work (SOW)</th>
                        </tr>
                        <tr>
                            <td>Quality tools...</td>
                            <td>From Taylor to Deming, the precursors of Lean...</td>
                        </tr>
                        <tr>
                            <th>Project management</th>
                            <th>6 sigma</th>
                        </tr>
                        <tr>
                            <td>The right methods for managing a project...</td>
                            <td>The DMAIC approach and other Lean 6 sigma tools</td>
                        </tr>
                    </tbody>
                </table>
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