<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Easy Ecommerce Website Builder - Start selling online | MyEasyStore</title>
  <link rel="icon" type="image/png" href="/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}"></script>
   <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .brand-green { color: #005200; }
    .bg-brand-green { background-color: #005200; }

  </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50 font-sans" style=" font-family: Poppins;">

<!-- Navbar -->
  <nav class="bg-brand-green text-white p-4 flex justify-between">
     <div class="flex items-center">
    <div id="menuBtn" class="hamburger">&#9776;</div>
    <span class="ml-4 font-bold">MyEasyStore</span>
    </div>
    <div class="space-x-6 font-semibold">

     <a href="{{ route('store.pricing') }}">Pricing Plans</a>

     <a href="{{ route('store.form') }}"    class="bg-white px-3 py-1 rounded"     style="color:#008f00;">    Start Free Trial </a>
    </div>

  </nav>
<!-- Sidebar (place here, right after header) -->
<div id="sidebar" class="sidebar">
  <a href="javascript:void(0)" class="closeBtn" id="closeBtn">&times;</a>
  <h1 class="sidebar-title" style=" color: #008f00;   text-align: center; font-size: 25px;   margin: 10px 0 20px;   font-weight: bold;  ">Menu </h1>
 <a href="{{ route('store.index') }}#home">HOME</a>
<a href="{{ route('store.index') }}#pricing">PRICING PLANS</a>
<a href="{{ route('store.index') }}#howitworks">HOW IT WORKS</a>
<a href="{{ route('store.index') }}#features">FEATURES</a>
<a href="{{ route('store.index') }}#demostores">DEMO STORES</a>
<a href="{{ route('store.index') }}#testimonials">TESTIMONIALS</a>
<a href="{{ route('store.index') }}#faq">FAQ</a>
<a href="{{ route('store.about') }}">ABOUT</a>
<a href="{{ route('store.index') }}#blog">BLOG</a>

  <!-- Start Free Trial button -->
  <button class="bg-brand-green text-white rounded font-semibold ml-6" style="color:#ffffff"><a href="{{ route('store.form') }}"     > Start  free trial</a></button>

  <!-- Logo + heading -->
  <div class="sidebar-footer ml-6">
    <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9teWVhc3lzdG9yZS1sb2dvLWdyZWVuLndlYnAifQ==" alt="MyEasyStore Logo" class="logo">
    <h3 class="contact-item brand-heading">MyEasyStore</h3>

    <!-- Contact -->
    <p class="contact-item"><i class="fas fa-comments" style="text-align: left;"></i> Chat Now</p>
    <p class="contact-item"><i class="fas fa-envelope" style="text-align: left;"></i> hello@myeasystore.in</p>
  </div>
</div>
<div id="overlay"></div>

<!-- Features Section -->
 <section id="features" class="py-16 px-6 bg-gray-50">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-0">

      <!-- Feature Item -->
      <div class="bg-white rounded-lg shadow p-6 flex items-start">
        <!-- Left: Icon -->
        <div class="text-green-700 text-4xl mr-4">
            <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9mZWF0dXJlcy9tYW5hZ2UtY2F0YWxvZ3VlLndlYnAifQ=="/>
        </div>
        <!-- Right: Text -->
        <div>
          <h3 class="text-xl font-semibold mb-2" style="color:#008f00;">Manage Catalogue</h3>
          <p class="text-gray-600">Create a digital catalogue with products, categories and add-ons.</p>
        </div>
      </div>

      <!-- Feature Item -->
      <div class="bg-white rounded-lg shadow p-6 flex items-start">
        <div class="text-green-700 text-4xl mr-4">
            <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9mZWF0dXJlcy9vcmRlcnMtZGFzaGJvYXJkLndlYnAifQ=="/>
        </div>
        <div>
          <h3 class="text-xl font-semibold mb-2" style="color:#008f00;">Order Dashboard</h3>
          <p class="text-gray-600">View and download complete order history and reports.</p>
        </div>
      </div>

      <!-- Feature Item -->
      <div class="bg-white rounded-lg shadow p-6 flex items-start">
        <div class="text-green-700 text-4xl mr-4">
          <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9mZWF0dXJlcy9vbmxpbmUtcGF5bWVudC53ZWJwIn0="/>
        </div>
        <div>
          <h3 class="text-xl font-semibold mb-2" style="color:#008f00;">Online Payment</h3>
          <p class="text-gray-600">Accept payments via cards, UPI, wallets, and more.</p>
        </div>
      </div>

      <!-- Repeat for all other features -->

    </div>
  </div>
</section>


<section  style="background-color:#d9f2d9; padding:60px 20px; text-align:center;">
    <div class="container">
        <h2 style="font-size:28px; color:#006400; margin-bottom:20px; font-weight:bold;">
            Start your ecommerce journey today
        </h2>

        <a href="{{ route('store.form') }}"
           style="display:inline-block; background-color:#008f00; color:#fff;
                  padding:12px 25px; border-radius:5px; text-decoration:none;
                  font-size:18px; font-weight:bold; transition:background 0.3s ease;">
            Start 14-day free trial
        </a>

        <p style="margin-top:15px; font-size:14px; color:#333;">
            Easy. Affordable. Made for India.
        </p>
    </div>
</section>



  <!-- Footer (same as myeasystore.blade.php) -->
  <footer class="bg-brand-green text-white p-12 mt-12">
    <div class="grid md:grid-cols-4 gap-6 mb-8">
      <div>
        <h3 class="font-bold mb-2">Quick Links</h3>
        <ul>
          <li>Pricing Plans</li>
          <li>How It Works</li>
          <li>Features</li>
          <li>Demo Stores</li>
        </ul>
      </div>
      <div>
        <h3 class="font-bold mb-2">Company</h3>
        <ul>
          <li>Testimonials</li>
          <li>FAQ</li>
          <li>About</li>
          <li>Blog</li>
        </ul>
      </div>
      <div>
        <h3 class="font-bold mb-2">Follow Us</h3>
        <ul>
          <li>Google</li>
          <li>LinkedIn</li>
          <li>Instagram</li>
          <li>Facebook</li>
          <li>Twitter</li>
        </ul>
      </div>
      <div>
        <h3 class="font-bold mb-2">Contact Us</h3>
        <ul>
          <li>Chat Now</li>
          <li>hello@myeasystore.in</li>
        </ul>
      </div>
    </div>
    <div class="text-center">
      <p class="font-bold">MyEasyStore</p>
      <p>2026 © MyEasyStore | Made in India</p>
      <div class="space-x-4 mt-2">
        <a href="#">Disclaimers</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Privacy Policy</a>
      </div>
    </div>
  </footer>



</body>
</html>


