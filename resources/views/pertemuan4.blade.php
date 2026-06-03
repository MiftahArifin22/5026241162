<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landing Page - Miftah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <style>
    html,body {
      font-family: Arial, sans-serif;
      overflow-x: hidden;
      margin: 0;
      padding: 0;
      height: 100%;
    }
    .bg-shape {
      position: absolute;
      top: 0;
      right: 0;
      width: 50vw;
      height: 100vh;
      background-color: transparent;
      border-radius: 50% 0 0 50%;
      z-index: -1;
    }
    .navbar {
      padding: 20px 0;
    }
    .nav-links a {
      color: #505F98;
      margin-right: 20px;
      text-decoration: none;
    }
    .brand-text {
      font-size: 24px;
      font-weight: bold;
      color: #37447E;
    }
    .btn-nav {
      background-color: #111B47;
      color: white;
      border: none;
      padding: 5px 25px;
    }
    .hero-section {
      min-height: 85vh;
      display: flex;
      align-items: center;
    }
    .hero-title {
      font-size: 36px;
      font-weight: bold;
      color: #091133;
      margin-bottom: 20px;
    }
    .hero-text {
      color: #505F98;
      margin-bottom: 20px;
      line-height: 1.6;
    }
    .btn-primary-custom {
      background-color: #111B47;
      color: white;
      border: 2px solid #111B47;
      padding: 8px 20px;
    }
    .btn-outline-custom {
      background-color: transparent;
      color: #091133;
      border: 2px solid #091133;
      padding: 8px 20px;
    }
    .hero-img {
      position: absolute;
      top: -193px;
      right: -17%;
      width: 140%;
      max-width: none;
      z-index: -2;
    }
  </style>
</head>

<body>

<div class="bg-shape"></div>

<nav class="navbar">
  <div class="container">
    <div class="row w-100 align-items-center m-0">

      <div class="col-4 p-0 nav-links">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </div>

      <div class="col-4 p-0 text-center">
        <span class="brand-text">Landing</span>
      </div>

      <div class="col-4 p-0 text-right">
        <button class="btn-nav">Buy Now</button>
      </div>

    </div>
  </div>
</nav>

<div class="container hero-section">
  <div class="row w-100">

    <div class="col-md-6">
      <h1 class="hero-title">
        Introduce Your Product <br>
        Quickly & Effectively
      </h1>

     <p class="hero-text">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean <br>
        commodo ligula eget dolor. Aenean massa. Cum sociis natoque <br>
        penatibus et magnis dis parturient montes, nascetur ridiculus
    </p>

      <p class="hero-text">
        mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
      </p>

      <div class="mt-4">
        <button class="btn-primary-custom mr-2">Purchase UI Kit</button>
        <button class="btn-outline-custom">Learn More</button>
      </div>
    </div>

    <div class="col-md-6 position-relative">
        <img src="designer_1.png" alt="Designer Illustration" class="hero-img">
    </div>

  </div>
</div>

</body>
</html>
