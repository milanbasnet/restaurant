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

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    
  <title>Junkiri-hotel in Kathmandu</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="JavaScript: location.reload(true);">Junkiri</a>
      <button  class="navbar-toggler" onclick="toggleFunction()" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
        <span id="toggler" class="navbar-toggler-icon"></span>
        <script>
          function toggleFunction(){
            var x= document.getElementsById("toggler");
            if(x.style.display === "none"){
              x.style.display="block";
            }
            else{
              x.style.display="none";
            }
          }
         </script>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#carouselExampleCaptions">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
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
        <ul class="navbar-nav  mb-2 mb-lg-0">
          @auth
          <li class="nav-item">
            <a class="nav-link" href="#">{{Auth()->user()->name}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
          </li>
          @endauth

          @guest
          <li class="nav-item">
            <a class="nav-link" onclick="loginFunction()">Login</a>
            <div class="form-popup" id="loginform"> 
              <form class="form-container" action="{{route('login')}}" method="post">
                @csrf
                <h2>Login </h2>
                <div>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="enter your email address" required>
                </div>
                <div>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="password" required>
                </div>
                <button type="submit" class="register-button">Login</button>
            </form>
            <span onclick="document.getElementById('loginform').style.display='none'">
            <button class="w3-button">&times; </button>
            </span>
            </div>

            <script>
              function loginFunction(){
                document.getElementById("loginform").style.display="block";
              }
            </script>

            <script>
              
              var box =document.getElementById("loginform");
              window.onclick = function(e){
                if(e.target == box ){
                  box.style.display="none";
                }
              }
              </script>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="myFunction()">Register</a>
            <div class="form-popup" id="myform"> 
              <form class="form-container" action="{{route('register')}}" method="post">
                @csrf
                <h2>Registration</h2>
                <div>
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="enter your name" required>
                </div>
                <div>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="enter your email address" required>
                </div>
                <div>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="password" required>
                </div>
                <button type="submit" class="register-button">register</button>
            </form>
            <span onclick="document.getElementById('myform').style.display='none'">
            <button class="w3-button">&times; </button>
            </span>
            </div>

            <script>
              function myFunction(){
                document.getElementById("myform").style.display="block";
              }
            </script>

            <script>
              
              var box =document.getElementById("myform");
              window.onclick = function(e){
                if(e.target == box ){
                  box.style.display="none";
                }
              }
              </script>
          </li> 
          @endguest
        </ul>
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
        <img src="Images\ksgLs-img_6994.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Welcome to hotel Junkiri</h2>
          <!-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="Images\K0tEt_restaurant.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Visit here</h2>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Images\TrRNc_conference.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2></h2>
        </div>
      </div>
    </div>
    <div class="sliding-buttons">
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
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
    <button class="check-btn" type="submit" style="background-color:rgb(233, 162, 10);">Check Availability</button>
  </div>
  </div>
  </form>

  <section id="about">
    <div class="container">
      <h3> About Us</h3>
      <div class="about-image1">
        <div class="aboutimg">
        <img src="images\zzEmi-about-1.jpg" class="img-thumbnail" alt="...">
        </div>
        <div class="about-content" >
        {{-- style="margin-left:600px; margin-top:-200px"> --}}
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
            <div class="card" style="">
              <img class="card-img-top" src="images\zzEmi-about-1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Rooms</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="">
              <img class="card-img-top" src="images\zzEmi-about-1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Dinings</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4"> 
            <div class="card" style="">
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

 
  <section id="events">
    <div class="container">
      <h3>Events</h3>
      <div class="event-image1">
        <div class="eventimg">
        <img src="images\live-music.jpg" alt="...">
        </div>
        <div class="event-content">
          <h3>Recent News</h3>
          <p class="imagepara">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem aliquid reiciendis nam
            expedita dolore hic
            minus inventore, id omnis minima voluptates at labore commodi obcaecati exercitationem. Iusto corporis
            suscipit deleniti.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="gellary">
    <h3>Gellary</h3>
    <form method="get" action="">
    <div class="container">
      <div class="row">
        @foreach($image as $post)
              <?php
              $imageName=json_decode($post->imageFile);
              ?> 
              <div class="col-md-4">  
                <img src="{{asset('Images')}}/{{$imageName}}" class="img-fluid" alt="Responsive image" style="height: 320px; width: 440px;">
              </div>
        @endforeach

          {{-- <div class="col-md-4">
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
          </div> --}}
      </div>
    </div>
  </form>
  </section>

  <section id="contact">
    <div class="container contact">
      <div class="row">
        <div class="col-md-3">
          <div class="contact-info">
            <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
            <h2>Contact Us</h2>
            <h4>We would love to hear from you !</h4>
          </div>
        </div>
        <div class="col-md-9">
          <div class="contact-form">
            <div class="form-group">
              <label class="control-label col-sm-2" for="fname">First Name:</label>
              <div class="col-sm-10">          
              <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="lname">Last Name:</label>
              <div class="col-sm-10">          
              <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-10">
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="comment">Comment:</label>
              <div class="col-sm-10">
              <textarea class="form-control" rows="5" id="comment"></textarea>
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </section>

  <footer class="footer">
    <div class="container bottom_border">
    <div class="row">
    <div class=" col-sm-4 col-md col-sm-4  col-12 col">
    <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
    <!--headin5_amrc-->
    <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
    <p><i class="fa fa-phone"></i>  +91-9999878398  </p>
    <p><i class="fa fa fa-envelope"></i> info@example.com  </p>
    
    
    </div>
    
    
    <div class=" col-sm-4 col-md  col-6 col">
    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
    <!--headin5_amrc-->
    <ul class="footer_ul_amrc">
    <li><a href="http://webenlance.com">Image Rectoucing</a></li>
    <li><a href="http://webenlance.com">Clipping Path</a></li>
    <li><a href="http://webenlance.com">Hollow Man Montage</a></li>
    <li><a href="http://webenlance.com">Ebay & Amazon</a></li>
    <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
    <li><a href="http://webenlance.com">Image Cropping</a></li>
    </ul>
    <!--footer_ul_amrc ends here-->
    </div>
    
    
    <div class=" col-sm-4 col-md  col-6 col">
    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
    <!--headin5_amrc-->
    <ul class="footer_ul_amrc">
    <li><a href="http://webenlance.com">Remove Background</a></li>
    <li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
    <li><a href="http://webenlance.com">Logo Design</a></li>
    <li><a href="http://webenlance.com">Vectorization</a></li>
    <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
    <li><a href="http://webenlance.com">Image Cropping</a></li>
    </ul>
    <!--footer_ul_amrc ends here-->
    </div>
    
    
    <div class=" col-sm-4 col-md  col-12 col">
    <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
    <!--headin5_amrc ends here-->
    
    <ul class="footer_ul2_amrc">
    <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
    <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
    <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
    </ul>
    <!--footer_ul2_amrc ends here-->
    </div>
    </div>
    </div>
    
    
    <div class="container">
    <ul class="foote_bottom_ul_amrc">
    <li><a href="http://webenlance.com">Home</a></li>
    <li><a href="http://webenlance.com">About</a></li>
    <li><a href="http://webenlance.com">Services</a></li>
    {{-- <li><a href="http://webenlance.com">Pricing</a></li> --}}
    {{-- <li><a href="http://webenlance.com">Blog</a></li> --}}
    <li><a href="http://webenlance.com">Contact</a></li>
    </ul>
    <!--foote_bottom_ul_amrc ends here-->
    <p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>
    
    <ul class="social_footer_ul">
    <li><a href="http://webenlance.com"><i class="fa fa-facebook-f"></i></a></li>
    <li><a href="http://webenlance.com"><i class="fa fa-twitter"></i></a></li>
    <li><a href="http://webenlance.com"><i class="fa fa-linkedin"></i></a></li>
    <li><a href="http://webenlance.com"><i class="fa fa-instagram"></i></a></li>
    </ul>
    <!--social_footer_ul ends here-->
    </div>
    
    </footer>
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
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