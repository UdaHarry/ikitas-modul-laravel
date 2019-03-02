<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Ikitas Tutorial</title>
  </head>
  <body>

	<!-- Bagian Atas -->
    <header>
    	
    	<!-- Navbar -->
    	<nav class="navbar navbar-expand-lg navbar-light">
    		<div class="container">

    		<!-- Brand navbar -->
			  <a class="navbar-brand js-scroll-trigger" href="">Ikitas Tutorial</a>
			  <!-- Brand navbar -->
				
				<!-- Toggle navbar -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <!-- Toggle Navbar -->

			  <!-- Menu navbar -->
			  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <div class="navbar-nav ml-auto">
			      <a class="nav-item nav-link active" href="#about">About</a>
			      <a class="nav-item nav-link" href="#team">Team</a>
			      <a class="nav-item nav-link" href="#contact">Contact Us</a>
			    </div>
			  </div>
			  <!-- Menu Navbar -->

				</div>
			</nav>
			<!-- Navbar -->
    
    </header>
    <!-- Bagian Atas -->

    <!-- Bagian Tengah -->
    <div class="content">

			<!-- Jumbotron landing image -->
			<div class="jumbotron jumbotron-fluid">
			  <div class="container">
					<h1 class="display-4">Make your own Website <br> <span>Faster</span> and <span>Better</span> <br> With US</h1>
					<a href="" class="btn btn-primary btn-sm tombol">Get Started</a>
			  </div>
			</div>
			<!-- Jumbotron landing image -->

			<!-- feature -->
				<div class="container">

					<!-- info panel -->
					<div class="row justify-content-center">
						<div class="col-10 info-panel">
							<div class="row">
								
								<!-- info kiri -->
								<div class="col-lg">
									<img src="img/employee.png" alt="employee" class="float-left">
									<h4>On-Time</h4>
									<p>Lorem ipsum dolor sit amet.</p>
								</div>

								<!-- info tengah -->
								<div class="col-lg">
									<img src="img/hires.png" alt="High Res" class="float-left">
									<h4>High-Res</h4>
									<p>Lorem ipsum dolor sit amet.</p>
									</div>

								<!-- info kanan -->
									<div class="col-lg">
										<img src="img/security.png" alt="employee" class="float-left">
										<h4>Secure</h4>
										<p>Lorem ipsum dolor sit amet.</p>
									</div>
							</div>
						</div>
					</div>
					<!-- info panel -->
				</div>
			<!-- feature -->

      <!-- Start About area -->
      <div id="about" class="about-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="text-center">
                <h2>About</h2>
              </div>
              <hr>
            </div>
          </div>
          <div class="row">
            <!-- single-well start-->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <a href="#">
                <img src="img/workingspace.png" alt="" class="img-fluid" >
              </a>
            </div>
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <a href="#">
                <h4 class="sec-head">project Maintenance</h4>
              </a>
              <p>
                Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at nequeRedug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure
              </p>
              <a href="" class="btn btn-primary btn-sm tombol" style="color: #FFF;">Selengkapnya..</a>
            </div>
            <!-- End col-->
          </div>
        </div>
      </div>
      <!-- End About area -->

      <!-- Team -->
      <div id="team" class="team-area bg-light">
        <div class="container">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="text-center">
              <h2>Team</h2>
              <hr>
            </div>
          </div>
        </div>
        <div class="album py-5">
          <div class="container">
            <div class="row">

              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="img/img1.png" alt="Card image cap">
                  <div class="card-body">

                    <div class="text-center">
                      <p class="card-text">Ria Richies<br></p>
                      <i class="fas fa-hand-paper mx-3"></i>
                      <i class="fas fa-hand-paper mx-3"></i>
                      <i class="fas fa-hand-paper mx-3"></i>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="img/img2.png" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top"  src="img/img3.png" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- Team -->

      <!-- contact us -->
      <div id="contact" class="contact-us">
        <div class="container">

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                  <h2>Contact Us</h2>
                </div>
              <hr>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                <h4>Contact</h4>
                <p><i class="fas fa-envelope"></i> ikitas.tutorial@gmail.com</p>
                <p><i class="fas fa-phone"></i> (021)1234-8765</p>
                <p><i class="fas fa-mobile-alt"></i> 0852 1234 4567</p>
                <p><i class="fab fa-whatsapp"></i> 0852 1234 4567</p>
            </div>

            <div class="col-md-8 col-sm-6 col-xs-12">
              <h4><i class="fas fa-map"></i> Lokasi</h4>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.960448395582!2d110.38979251477349!3d-7.013934494933549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b08ecae27d3%3A0xbca7db646419b713!2sIKITAS+3+Menoreh!5e0!3m2!1sid!2sid!4v1551026062580" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          
        </div>
      </div>
      <!-- contact us -->
    </div>
    <!-- Bagian Tengah -->
	
	   <!-- Bagian Bawah -->
    <footer class="mt-3 p-3 bg-dark text-white">
      <div class="container">
        <div class="row">
           <div class="col text-center">
            <p>&copy; 2019 - Ikitas</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Bagian Bawah -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>