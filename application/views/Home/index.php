
  <body >


<!-- navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success" style="display: block" >
  <div class="container">
  <a class="navbar-brand textnavbar" href="#"><strong>The Pakubuwono View </strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse kanan" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">About Us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Facilities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tenant Only</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Location</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Management Messages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">What's On!</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Location</a>
      </li>
    </ul>
  </div>
</div>
</nav>
<!-- akhir navbar -->

<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid text-center body-content">
  <div class="container mt-5 ">
    <div data-aos="fade-right" data-aos-duration="3000">
    <h1 class="display-4">The Pakubuwono View</h1>
    <p class="lead"><em>Redefining the comforts of modern living</em></p>
    </div>
  </div>
</div>




<!-- akhir jumbotron -->

<!-- about us -->
<div class="container mt-5">
  <div class="row">
    <div class="col">
      <h1 class="text-center fontjudul" style>About Us</h1>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-4" data-aos="fade-right" data-aos-duration="3000">

      <img src="<?= base_url(); ?>img/Crown-Video.jpg" class="img-thumbnail rounded">
    </div>
    <div class="col-md-4 text-center tulisan">
      <p>It is our great pleasure to welcome you to </p> 
      <p class="textnavbar"> The Pakubuwono View </p>
       <p>We will do our utmost to provide superior services in an environment, which is safe, friendly, clean, and beautifully designed. We will create and maintain five star services and facilities to make your stay comfortable and enjoyable.</p>
    </div>
    <div class="col-md-4">
      <img src="img/Outdoor-Video.jpg" class="img-thumbnail rounded" data-aos="fade-left" data-aos-duration="3000">
    </div>
  </div>
</div>

<!-- akhir about us -->


<!-- Facilities akan dibuat carousel -->
<div class="facility text-center mt-5 container-fluid" id="facility">
  <h1 class="fontjudul">Our Facilities</h1>
  <div class="row">
  <div class="col-md-3"></div>
<div id="carouselExampleCaptions" class="carousel slide mt-5 col-md-6" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/IndoorPool-Video.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>IndoorPool</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/Badminton-Video.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Badminton</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/FemaleSauna-Video.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Sauna</h5>
      </div>
    </div>
     <div class="carousel-item">
      <img src="img/Gym-Video.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Gym</h5>
      </div>
    </div>
     <div class="carousel-item">
      <img src="img/Jogging-Video.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Jogging track</h5>
      </div>
    </div>
     <div class="carousel-item">
      <img src="img/Salon-Video.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Salon</h5>
      </div>
    </div>
     <div class="carousel-item">
      <img src="img/Spa-Video.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Spa</h5>
      </div>
    </div>
     <div class="carousel-item">
      <img src="img/Squash-Video.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Squash Court</h5>
  
      </div>
    </div>
     <div class="carousel-item">
      <img src="img/Tennis-Video.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tennis Court</h5>
       
      </div>
    </div>
     <div class="carousel-item">
      <img src="img/Pool-Video.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5> Outdoor Pool</h5>
      
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="col-md-3"></div>
</div>

<!-- Akhir facilities -->



<!-- Location -->
<div class="location" id="location">
  <div id="map">
    




  </div>
</div>
<!-- Akhir Location -->
