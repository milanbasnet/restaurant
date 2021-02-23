<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Junkiri</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Junkiri</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Our Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#events">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact </a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images\ksgLs-img_6994.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Welcome to hotel Junkiri</h2>
          <!-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="images\K0tEt_restaurant.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Dinings</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images\TrRNc_conference.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Conference Hall</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>

  <form action="{{route('check')}}" method="get">

    @csrf
  <div class="container booking-container">
    <div class="reservation">
      <div class="onr">
    Online Reservation
      </div>
    <input id="cal" type="date">
    <input id="cal" type="date">
    <button type="submit" style="background-color:rgb(233, 162, 10);">Check Availability</button>
  </div>
  </div>
</form>

  <section id="about">
    <div class="container">
      <h3> About Us</h3>
      <div class="about-image1 col-md-6">
        <img src="images\zzEmi-about-1.jpg" class="img-thumbnail" alt="...">
        <div class="container" 
        style="margin-left:600px; margin-top:-200px">
          <p class="imagepara">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem aliquid reiciendis nam
            expedita dolore hic
            minus inventore, id omnis minima voluptates at labore commodi obcaecati exercitationem. Iusto corporis
            suscipit deleniti.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="services">
    <h3>Our Services</h3>
    <div class="container">
      <div class="row">
          <div class="col-md-4">  
            <div class="card" style="width: 20rem;">
              <img class="card-img-top" src="images\zzEmi-about-1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Rooms</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 20rem;">
              <img class="card-img-top" src="images\zzEmi-about-1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Dinings</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4"> 
            <div class="card" style="width: 20rem;">
              <img class="card-img-top" src="images\zzEmi-about-1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Spa</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
         
       </div>
       </div>
   </div>
  </section>

  <!-- <section id="services">
    <div class="container">
      <h3>Our Services</h3>
      <div class="cards">
        <div class="card" style="width: 18rem;">
          <img src="images\zzEmi-about-1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="images\zzEmi-about-1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="images\zzEmi-about-1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="images\zzEmi-about-1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <section id="events">
    <div class="container">
      <h3>Events</h3>
      <div class="event-image1 col-md-6">
        <img src="images\live-music.jpg" alt="...">
        <div class="container" style="margin-left:600px; margin-top:-250px">
          <h3>Live Music</h3>
          <p class="imagepara">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem aliquid reiciendis nam
            expedita dolore hic
            minus inventore, id omnis minima voluptates at labore commodi obcaecati exercitationem. Iusto corporis
            suscipit deleniti.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="gallery">
    <h3>Gallery</h3>
    <div class="container">
      <div class="row">
          <div class="col-md-4">  
            <img src="images\gal1.jpg" class="img-fluid" alt="Responsive image" style="height: 320px; width: 440px;">
          </div>
          <div class="col-md-4">
            <img src="images\gal2.jpg" class="img-fluid" alt="Responsive image" style="height: 320px; width: 440px;">
          </div>
          <div class="col-md-4"> 
            <img src="images\gal3.jpg" class="img-fluid" alt="Responsive image" style="height: 320px; width: 440px;">
          </div>
          <div class="col-md-4"> 
            <img src="images\gal3.jpg" class="img-fluid" alt="Responsive image" style="height: 320px; width: 440px;">
          </div>
          <div class="col-md-4"> 
            <img src="images\gal4.jpg" class="img-fluid" alt="Responsive image" style="height: 320px; width: 440px;">
          </div>
          <div class="col-md-4"> 
            <img src="images\gal4.jpg" class="img-fluid" alt="Responsive image" style="height: 320px; width: 440px;">
          </div>
       </div>
   </div>
  </section>

  <section id="contact">
    <div class="section-content">
      <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s"
          data-wow-duration="2s"> Touch with us</span></h1>
      <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h3>
    </div>
    <div class="contact-section">
      <div class="container">
        <form>
          <div class="row">
          <div class="col-md-6 form-line">
            <div class="form-group">
              <label for="exampleInputUsername">Your name</label>
              <input type="text" class="form-control" id="" placeholder=" Enter Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail">Email Address</label>
              <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
            </div>
            <div class="form-group">
              <label for="telephone">Mobile No.</label>
              <input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="description"> Message</label>
              <textarea class="form-control" id="description" placeholder="Enter Your Message"></textarea>
            </div>
            <div>

              <button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>
                Send Message</button>
            </div>
          </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
    crossorigin="anonymous"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  

</body>

</html>