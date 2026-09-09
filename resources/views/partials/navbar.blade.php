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
  <a href="{{route('store.index') }}#home">HOME</a>
  <a href="{{route('store.pricing') }}">PRICING PLANS</a>
  <a href="{{route('store.index') }}#howitworks">HOW IT WORKS</a>
  <a href="{{route('store.index') }}#features">FEATURES</a>
  <a href="{{route('store.index') }}#demostores">DEMO STORES</a>
  <a href="{{route('store.index') }}#testimonials">TESTIMONIALS</a>
  <a href="{{route('store.index') }}#faq">FAQ</a>
  <a href="{{route('store.about') }}">ABOUT</a>
  <a href="{{route('store.index') }}#blog">BLOG</a>

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
