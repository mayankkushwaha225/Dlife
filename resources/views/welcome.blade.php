<!DOCTYPE html>
<html lang="en">
<head>
@laravelPWA
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dlife App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #0d1b2a;
      color: #ffffff;
    }
    .navbar-custom {
      background-color: #0d1b2a;
    }
    .footer-custom {
      background-color: #0d1b2a;
      color: #ffffff;
    }
    .hero-section {
      background-color: #1b263b;
      padding: 5rem 0;
    }
    .feature-icon {
      font-size: 2rem;
      color: #00b4d8;
    }
    .btn-custom {
      background-color: #00b4d8;
      border: none;
    }
    .btn-custom:hover {
      background-color: #0096c7;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
  <div class="container">
    <a class="navbar-brand" href="#">Dlife</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Download</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero-section text-center text-white">
  <div class="container">
    <h1 class="display-4">Fast, Secure & Easy UPI Payments</h1>
    <p class="lead">Send and receive money anytime, anywhere using your smartphone.</p>
    <a href="#" class="btn btn-custom btn-lg mt-3">Get Started</a>
  </div>
</section>

<!-- Features -->
<section class="py-5">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4">
        <div class="mb-3 feature-icon">
          <i class="bi bi-shield-lock-fill"></i>
        </div>
        <h4>Secure Transactions</h4>
        <p>All your payments are protected with multi-layer security.</p>
      </div>
      <div class="col-md-4">
        <div class="mb-3 feature-icon">
          <i class="bi bi-lightning-fill"></i>
        </div>
        <h4>Instant Transfers</h4>
        <p>Money is transferred in real-time with no delays.</p>
      </div>
      <div class="col-md-4">
        <div class="mb-3 feature-icon">
          <i class="bi bi-phone"></i>
        </div>
        <h4>Easy Interface</h4>
        <p>Intuitive app design for a seamless experience.</p>
      </div>
    </div>
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function () {
                navigator.serviceWorker.register('/serviceworker.js')
                    .then(function (registration) {
                        console.log('ServiceWorker registration successful with scope: ', registration.scope);
                    }, function (err) {
                        console.log('ServiceWorker registration failed: ', err);
                    });
            });
        }
    </script>
