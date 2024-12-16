<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/style.css">
</head>

<body>


<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="./image/logo-ruby.png" alt=""  height="60px" width="100%">
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
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Service</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>

      </ul>

    </div>
  </div>
</nav>


<div class="container-fluid">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./image/slide1.jpg" class="d-block w-100  slider_img" alt="..."  >
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./image/slide2.jpg" class="d-block w-100  slider_img" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./image/slide1.jpg" class="d-block w-100  slider_img" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
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
</div>

<div class="container">
    <!-- <div class="about_head">
        <h3>About us</h3>
    </div>

    <div class="content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eveniet eos voluptatum harum ea eaque dolor veritatis blanditiis excepturi. Distinctio voluptatibus corporis sint, tempora fugit expedita ea esse eveniet. Quis praesentium assumenda quisquam sint omnis incidunt est velit autem in nam quo et, quae ut dolore unde cumque similique vero!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat illum nihil saepe ipsa expedita, quidem sint rem, iure blanditiis aliquid nemo. Dolorem possimus aliquam quisquam, nulla optio ad doloremque nemo dolor voluptatum iusto. Consequatur delectus nostrum beatae rem atque, culpa, itaque repellendus nesciunt, commodi nam exercitationem labore quo architecto consectetur fugiat illum saepe obcaecati minima ratione quae vero! Sit, placeat?</p>
    </div> -->


<div class="row sec1">
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
        <img src="./image/01 (1).jpg" alt=""  class="img1">
        <!-- <img src="./image/01.jpg" alt=""  class="img2"> -->
    </div>
    <div class="col-sm-7">
        <div class="about_head">
        <h3>Defining the future of online experiences!</h3>
        <p>Join Ruby Roman for groundbreaking online experiences! Our innovative IT solutions redefine digital engagement, ensuring seamless interactions and unforgetta</p>
        <ul class="list">
            <li>Lorem ipsum dolor sit amet consectetur.</li>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet consectetur.</li>
        </ul>
        <button class="btn btn-primary click">Click</button>
    </div>
    </div>
</div>
</div>


<div class="container-fluid  services">

<div class="head">
    <h3>We specialize in the following services</h3>
</div>


<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4  ">

<div class="col service-card">
  <div class="card card1">
<div class="circle">
<i class="fa-solid fa-shapes"></i></div>
  <div class="card-body">
      <h5 class="card-title text-white">Software development</h5>
      <p class="card-text text-white">
      Experience top-tier software development with Ruby Roman! Our skilled team crafts custom solutions tailored to your needs. From web applications to mobile apps, we deliver excellence in every line of code. </p>
    </div>
  </div>
</div>

<div class="col service-card">
  <div class="card card1">
<div class="circle">
<i class="fa-solid fa-shapes"></i></div>
  <div class="card-body">
      <h5 class="card-title text-white">Software development</h5>
      <p class="card-text text-white">
      Experience top-tier software development with Ruby Roman! Our skilled team crafts custom solutions tailored to your needs. From web applications to mobile apps, we deliver excellence in every line of code. </p>
    </div>
  </div>
</div>


<div class="col service-card">
  <div class="card card1">
<div class="circle">
<i class="fa-solid fa-shapes"></i></div>
  <div class="card-body">
      <h5 class="card-title text-white">Software development</h5>
      <p class="card-text text-white">
      Experience top-tier software development with Ruby Roman! Our skilled team crafts custom solutions tailored to your needs. From web applications to mobile apps, we deliver excellence in every line of code. </p>
    </div>
  </div>
</div>


<div class="col service-card">
  <div class="card card1">
<div class="circle">
<i class="fa-solid fa-shapes"></i></div>
  <div class="card-body">
      <h5 class="card-title text-white">Software development</h5>
      <p class="card-text text-white">
      Experience top-tier software development with Ruby Roman! Our skilled team crafts custom solutions tailored to your needs. From web applications to mobile apps, we deliver excellence in every line of code. .</p>
    </div>
  </div>
</div>


<div class="col service-card">
  <div class="card card1">
<div class="circle">
<i class="fa-solid fa-shapes"></i></div>
  <div class="card-body">
      <h5 class="card-title text-white">Software development</h5>
      <p class="card-text text-white">
      Experience top-tier software development with Ruby Roman! Our skilled team crafts custom solutions tailored to your needs. From web applications to mobile apps, we deliver excellence in every line of code. </p>
    </div>
  </div>
</div>

</div>
</div>

</div>


<div class="container  section-service2">
<div class="head2">
    <h3>We specialize in the following services</h3>
</div>

<div class="row service2"  >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Click more</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Click more</a>
      </div>
    </div>
  </div>
</div>
</div>


<div class="container-fluid footer-section" >
 <div class="row">
    <div class="col-sm-12">
        <div class="container">
        <div class="footer">
    <div class="row">
        <div class="col-sm-6">
            <h2>About</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam eos deleniti voluptas ipsam quos, iure adipisci minima nobis sequi cumque.</p>
        </div>
        <div class="col-sm-3">
            <p class="quick">Quick Link</p>
            <ul class="footer-link">
                <li>Home</li>
                <li>About</li>
                <li>Services</li>
                <li>Contact</li>
            </ul>
    </div>
    <div class="col-sm-3">
            <p class="quick">Quick Link</p>
            <ul class="footer-link">
                <li>Home</li>
                <li>About</li>
                <li>Services</li>
                <li>Contact</li>
            </ul>
    </div>    </div>
    </div>
        </div>
    </div>
 </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <p class="text-center" style="font-size:20px; font-weight:500; padding-top:15px">Copyrights ©2024 ABC COMPANY .</p>
        </div>
    </div>
</div>

</body>
</html>
