<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  
  <!-- Bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-pzC/0Q1DRJ7Zvu2IMD9FVhR6U+bnfPGJx7xI5lJp+e0BvP5eCMqqXZemhAeFEnisw4iPTzCxWfZmT+SU5fQ2PQ==" crossorigin="anonymous" />

  <!-- Custom Styles -->
  <style>
    body {
      background-color:lightsteelblue;
      overflow-x: hidden; /* Hide horizontal scrollbar */
    }

    .container-fluid {
      padding-left: 15px; /* Add space on the left */
      padding-right: 15px;
    }

    /* Additional styling for the form */
    .form-container {
      margin-top: 20px;
    }

    /* Footer styling */
footer {
  background-color: #f8f9fa;
  padding: 15px 0;
}
/* style.css */
.custom-logo {
    max-height: 50px; /* Adjust the max-height as needed */
    max-width: 100%; /* Ensures the image doesn't exceed its container */
}



  </style>
</head>
<body class="wow animate__bounceIn" data-wow-duration="2s">
    <!-- Your existing HTML content -->
  </body>
  

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:lightsteelblue;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" alt="" class="img-fluid custom-logo">

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Explore places</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Facilities
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Book package</a></li>
              <li><a class="dropdown-item" href="#">Book hotel</a></li>
              <li><a class="dropdown-item" href="#">Book transport</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Enquire at</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto"> <!-- ms-auto pushes items to the right -->
          <li class="nav-item me-2">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="currentColor" class="bi bi-person-square me-2" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
              </svg>
            </a>
          </li>
          <li class="nav-item dropdown me-2">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              My Profile
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Register</a></li>
              <li><a class="dropdown-item" href="#">Login</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Slider -->
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/image1.png" height="650" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <!-- Caption content for Slide 1 -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/image2.webp" height="650" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <!-- Caption content for Slide 2 -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/image4.cms" height="650" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <!-- Caption content for Slide 3 -->
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Main Content -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h3 class="display-6 text-center mt-5 mb-3">Hello travelers!!<br> Welcome to the travel world</h3>
      </div>
    </div>

    <!-- Features Section -->
    <div class="container mt-5">
      <h2 class="text-center mb-4">Our Travel Features</h2>
      <div class="row">
        <!-- Feature 1 -->
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="images/adventure.jpg" class="card-img-top" alt="Feature 1 Image">
            <div class="card-body">
              <h5 class="card-title">Adventure Tours</h5>
              <p class="card-text">Explore exciting adventure tours with experienced guides.</p>
            </div>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="images/accomodation.jpg" class="card-img-top" alt="Feature 2 Image">
            <div class="card-body">
              <h5 class="card-title">Luxury Accommodation</h5>
              <p class="card-text">Stay in luxurious accommodations and experience comfort at its best.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="images/cultural.jpg" class="card-img-top" alt="Feature 3 Image">
            <div class="card-body">
              <h5 class="card-title">Cultural Experiences</h5>
              <p class="card-text">Immerse yourself in diverse cultures and traditions during your journey.</p>
            </div>
          </div>
        </div>

        <!-- Add more features as needed -->
      </div>
    </div>
<hr>
    <!-- Contact Form -->
    <div class="row form-container justify-content-evenly pt-2 pb-5" style="background-color: #f1f1f1;">
      <div class="col-md-5 mt-5">
        <h3 class="mb-3">Contact Form</h3>


        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text"  class="form-control" id="name" aria-describedby="emailHelp">
            
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          
          <button type="submit" class="btn btn-dark">Submit</button>
        </form>
      </div>
      <div class="col-md-5 mt-5">
        <h3 class="mb-3">Address</h3>
        <p>Patil House,Mahagiri Koliwada <br>
        Thane(w) 400601.<br>
        <i class="bi bi-telephone"></i> :9324128129</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3179.3483496155363!2d72.97923503664023!3d19.193353309843967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b9440f5a4ddd%3A0x6c1b82724532ee62!2sMahagiri%20Koliwada%2C%20Ekvira%20Mitra%20Mandal.!5e0!3m2!1sen!2sin!4v1699687160375!5m2!1sen!2sin" style="width:100%;" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



      </div>
    </div>

  </div>

  <!-- Footer -->

<div class="row justify-content-evenly bg-dark text-white pt-2 pb-3">
  <div class="col-md-3 pt-4">
    <h5 class="pb-2">Aditi Tours</h5><br>
    <p>Explore throughtout India with us and create unforgettable memories.We will try our best to provide you with the best. We will give you the most experienced guide to guide you the right way.

    </p>
  </div>
  <div class="col-md-3 pt-4">
    <h5 class="pb-2">Important Links</h5>
      <p>
        <a href="#" class="link-light text-decoration-none">Home</a><br>
       <a href="#" class="link-light text-decoration-none">About Us</a><br>
       <a href="#" class="link-light text-decoration-none">Contact us</a><br>
       <a href="#" class="link-light text-decoration-none">Enquire At</a><br>
        
        </p>
  </div>


  <div class="col-md-3 pt-4">
    <h5 class="pb-2">Contact Us</h5>
    <p>Patil House,Mahagiri Koliwada <br>
      Thane(w) 400601.<br>
      <i class="bi bi-telephone"></i> :9324128129</p>
  </div>
</div>



  <footer class="text-center py-4">
    <p>&copy; 2023 Your Travel Company. All rights reserved.</p>
  </footer>

  <!-- Optional JavaScript -->
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
</body>
</html>
