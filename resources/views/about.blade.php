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
      <a href="#features">Features</a>
      <a href="#pricing">Pricing</a>
      <a href="#faq">FAQ</a>
     <a href="{{ route('store.form') }}"    class="bg-white px-3 py-1 rounded"     style="color:#008f00;">    Start Free Trial </a>
    </div>

  </nav>
<!-- Sidebar (place here, right after header) -->
<div id="sidebar" class="sidebar">
  <a href="javascript:void(0)" class="closeBtn" id="closeBtn">&times;</a>
  <h1 class="sidebar-title" style=" color: #008f00;   text-align: center; font-size: 25px;   margin: 10px 0 20px;   font-weight: bold;  ">Menu </h1>
  <a href="#home">HOME</a>
  <a href="#pricing">PRICING PLANS</a>
  <a href="#howitworks">HOW IT WORKS</a>
  <a href="#features">FEATURES</a>
  <a href="#demostores">DEMO STORES</a>
  <a href="#testimonials">TESTIMONIALS</a>
  <a href="#faq">FAQ</a>
  <a href="{{route('store.about') }}">ABOUT</a>
  <a href="#blog">BLOG</a>

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

<!-- About Section -->
  <section id="about" class="about-section" style="padding:40px 20px;">
    <div class="container" style="display:flex; align-items:center; justify-content:space-between; gap:30px;">


        <!-- Image column (left) -->
        <div class="image-col" style="flex:1; text-align:center;">
            <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9hYm91dC9wcm9kdWN0LWNhdGFsb2d1ZS53ZWJwIn0="
                 alt="About MyEasyStore" class="m-10"                  style="height:auto; width:350px;">
        </div>

        <!-- Text column (right) -->
        <div class="text-col m-10" style="flex:2; text-align:left;">
            <h2 class="section-title" style="font-size:28px; color:#008f00; margin-bottom:15px; font-weight:bold;">
                About
            </h2>
            <p style="font-size:25px; color:#333; line-height:1.6; ">
                MyEasyStore empowers business owners to easily build their own ecommerce website within minutes and sell online.
                With MyEasyStore, you can customise your product catalogue, sell directly to your customers and receive Whatsapp orders,
                accept online payments and deliver your products directly from your store. We have all the right tools and features
                you need to run an online business successfully.
            </p>
        </div>


    </div>
</section>



    <!-- Mission Section -->
       <!-- About + Mission Section -->
    <section class="about-mission" style="padding:40px 20px;">
        <div class="container" style="display:flex; align-items:center; justify-content:space-between; gap:30px;">

            <!-- Mission (Right) -->
            <div class="text-col" style="flex:1; text-align:left;">
                <h2 class="section-title" style="font-size:28px; color:#008f00; margin-bottom:15px; font-weight:bold;">Mission</h2>
                <p style="font-size:25px; color:#333; line-height:1.6;">
                    Our mission is to simplify and streamline your ecommerce business, so you can focus on selling online directly to your
                    customers and keep 100% of your profits.
                </p>
            </div>


            <div class="image-col" style="flex:2; text-align:right;">
            <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9hYm91dC9vbmxpbmUtc3RvcmUtZGFzaGJvYXJkLndlYnAifQ=="
                 alt="About MyEasyStore" class="m-10"                  style="height:auto; width:350px;">
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


