<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MyEasyStore</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .brand-green { color: #005200; }
    .bg-brand-green { background-color: #005200; }
  </style>
</head>
<body class="bg-gray-50 font-sans">

  <!-- Navbar -->
  <nav class="bg-brand-green text-white p-4 flex justify-between">
    <div class="font-bold text-xl">MyEasyStore</div>
    <div class="space-x-6 font-semibold">
      <a href="#features">Features</a>
      <a href="#pricing">Pricing</a>
      <a href="#faq">FAQ</a>
      <a href="#trial" class="bg-white text-brand-green px-3 py-1 rounded">Start Free Trial</a>
    </div>
  </nav>

  <!-- Title Section -->
  <section class="p-12 grid md:grid-cols-2 gap-6 items-center">
    <div>
      <h1 class="text-4xl font-bold brand-green">Easy Commerce Website</h1>
      <p class="mt-4 text-gray-600">Sell directly to customers. Pay 0% commissions.</p>
      <button class="mt-6 bg-brand-green text-white px-6 py-3 rounded font-semibold">Start 14-day free trial</button>
    </div>
    <div>
      <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9oZXJvL3Byb2R1Y3QtaGVhZHBob25lcy53ZWJwIn0="
           alt="Title Section Image" class="rounded shadow">
    </div>
  </section>

  <!-- MyEasyStore in Action -->
  <section class="p-12 grid md:grid-cols-2 gap-6 items-center bg-gray-100" style="background-color: #90EE90;">
    <div>
      <h3 class="text-3xl  brand-green" style=" text-transform: uppercase;">MyEasyStore in Action</h3>
      <h1 class="">Take a 10-minute walkthrough of the full <strong>MyEasyStore</strong> platform.</h1>
      <button class="mt-6 bg-brand-green text-white px-6 py-3 rounded font-semibold">Watch Video</button>
    </div>
    <div>
      <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9ob3dpdHdvcmtzL3dhbGt0aHJvdWdoLXRodW1ibmFpbC53ZWJwIn0="
           alt="MyEasyStore in Action" class="rounded shadow" style="width:300px;height:200px;">
    </div>
  </section>

  <!-- How It Works -->
 <!-- HOW IT WORKS Section -->
<section class="bg-gray-100 py-16" id="how-it-works">
  <div class="text-center mb-12">
    <h2 class="text-4xl font-bold brand-green">How It Works</h2>
    <p class="mt-4 text-gray-600">Set up your store in 4 simple steps</p>
  </div>

  <div class="max-w-6xl mx-auto space-y-16 px-6">

    <!-- Step 1 (Image Left, Text Right) -->
    <div class="flex flex-col md:flex-row items-center gap-8">
      <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9ob3dpdHdvcmtzL2NyZWF0ZS1wcm9kdWN0LWNhdGFsb2d1ZS53ZWJwIn0="
           alt="Catalogue Example" class="w-full md:w-1/2 rounded shadow">
      <div class="md:w-1/2">
        <h3 class="text-2xl font-semibold brand-green">Step 1: Create Catalogue</h3>
        <p class="mt-2 text-gray-600">Add products, categories, and customize your store.</p>
      </div>
    </div>

    <!-- Step 2 (Text Left, Image Right) -->
    <div class="flex flex-col md:flex-row-reverse items-center gap-8">
      <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9ob3dpdHdvcmtzL3NoYXJlLW9ubGluZS1zdG9yZS1saW5rLndlYnAifQ="
           alt="Share Store Example" class="w-full md:w-1/2 rounded shadow">
      <div class="md:w-1/2">
        <h3 class="text-2xl font-semibold brand-green">Step 2: Share Online Store</h3>
        <p class="mt-2 text-gray-600">Share your store link to accept orders directly.</p>
      </div>
    </div>

    <!-- Step 3 (Image Left, Text Right) -->
    <div class="flex flex-col md:flex-row items-center gap-8">
      <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9ob3dpdHdvcmtzL29yZGVycy1ub3RpZmljYXRpb24tZGFzaGJvYXJkLTIud2VicCJ9"
           alt="Orders Dashboard" class="w-full md:w-1/2 rounded shadow">
      <div class="md:w-1/2">
        <h3 class="text-2xl font-semibold brand-green">Step 3: Receive Orders</h3>
        <p class="mt-2 text-gray-600">Get notified on WhatsApp & email. Track everything in your dashboard.</p>
      </div>
    </div>

    <!-- Step 4 (Text Left, Image Right) -->
    <div class="flex flex-col md:flex-row-reverse items-center gap-8">
      <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9ob3dpdHdvcmtzL2Rhc2hib2FyZC1kZWxpdmVyeS1pbnRlZ3JhdGlvbi0yLndlYnAifQ=="
           alt="Delivery Options" class="w-full md:w-1/2 rounded shadow">
      <div class="md:w-1/2">
        <h3 class="text-2xl font-semibold brand-green">Step 4: Deliver Orders</h3>
        <p class="mt-2 text-gray-600">Ship orders with multiple delivery partners, directly from your store.</p>
      </div>
    </div>

  </div>
</section>

<!-- Increase Your Online Sales -->
<section class="bg-gray-50 py-16" id="features">
  <div class="text-center mb-12">
    <h2 class="text-4xl font-bold brand-green">Increase Your Online Sales with all you right tools</h2>
    <p class="mt-4 text-gray-600">With all the right tools</p>
  </div>

  <div class="max-w-6xl mx-auto space-y-12 px-0">

    <!-- Row 1 -->
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Feature 1 -->
      <div class="flex items-center bg-white rounded shadow p-4">
        <div class="w-16 h-16 flex items-center justify-center   rounded mr-4">
          <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9mZWF0dXJlcy9tYW5hZ2UtY2F0YWxvZ3VlLndlYnAifQ==" />
        </div>
        <div>
          <h2 class="text-lg font-semibold brand-green">Manage Catalogue</h2>
          <p class="text-gray-600 text-sm" style="font-size: 0.9em;">Create a digital catalogue with different types of products, categories and add-ons.</p>
        </div>
      </div>

      <!-- Feature 2 -->
      <div class="flex items-center bg-white rounded shadow p-4">
        <div class="w-16 h-16 flex items-center justify-center rounded mr-4">
          <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9mZWF0dXJlcy9vcmRlcnMtZGFzaGJvYXJkLndlYnAifQ=="/>
        </div>
        <div>
          <h3 class="text-lg font-semibold brand-green">Order Dashboard</h3>
          <p class="text-gray-600 text-sm" style="font-size: 0.9em;">View and download complete order history and reports. Keep track of order status.</p>
        </div>
      </div>

      <!-- Feature 3 -->
      <div class="flex items-center bg-white rounded shadow p-4">
        <div class="w-16 h-16 flex items-center justify-center  rounded mr-4">
          <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9mZWF0dXJlcy9vbmxpbmUtcGF5bWVudC53ZWJwIn0="/>
        </div>
        <div>
          <h3 class="text-lg font-semibold brand-green">Online Payment</h3>
          <p class="text-gray-600 text-sm" style="font-size: 0.9em;">Accept payments via debit/credit card, UPI, wallet, etc. through multiple payment providers.</p>
        </div>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Feature 4 -->
      <div class="flex items-center bg-white rounded shadow p-4">
        <div class="w-16 h-16 flex items-center justify-center rounded mr-4">
          <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9mZWF0dXJlcy93aGF0c2FwcC1ub3RpZmljYXRpb24ud2VicCJ9" />
        </div>
        <div>
          <h3 class="text-lg font-semibold brand-green">WhatsApp Notifications</h3>
          <p class="text-gray-600 text-sm" style="font-size: 0.9em;">Receive order notifications on WhatsApp directly from customers.</p>
        </div>
      </div>

      <!-- Feature 5 -->
      <div class="flex items-center bg-white rounded shadow p-4">
        <div class="w-16 h-16 flex items-center justify-center rounded mr-4">
          <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9mZWF0dXJlcy9kZWxpdmVyeS1pbnRlZ3JhdGlvbi53ZWJwIn0=" />
        </div>
        <div>
          <h3 class="text-lg font-semibold brand-green">Delivery Integration</h3>
          <p class="text-gray-600 text-sm" style="font-size: 0.9em;">Ship orders directly from your online store. Pick from our multiple delivery partners.</p>
        </div>
      </div>

      <!-- Feature 6 -->
      <div class="flex items-center bg-white rounded shadow p-4">
        <div class="w-16 h-16 flex items-center justify-center rounded mr-4">
          <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9mZWF0dXJlcy9zZW8tcmVhZHkud2VicCJ9"/>
        </div>
        <div>
          <h3 class="text-lg font-semibold brand-green">SEO Ready</h3>
          <p class="text-gray-600 text-sm" style="font-size: 0.9em;">Your online store is SEO ready, no coding required.</p>
        </div>
      </div>
    </div>

  </div>

  <!-- Show All Features Button -->
  <div class="text-center mt-12">
    <button class="bg-brand-green text-white px-6 py-3 rounded font-semibold hover:bg-green-700">
      Show All Features
    </button>
  </div>
</section>
<section class="py-16 bg-gray-50" id="partners">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 px-6">

    <!-- Delivery Partners -->
    <div class="bg-white p-8 rounded-lg shadow text-center">
      <h3 class="text-2xl font-bold brand-green mb-2">Delivery Partners</h3>
      <p class="text-gray-600 mb-6">Deliver your products directly from your online store.</p>
      <div class="flex justify-center gap-8">
        <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9kZWxpdmVyeS9ib3J6by53ZWJwIn0=" alt="Borzo Logo" class="h-12 object-contain">
        <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9kZWxpdmVyeS9zaGFkb3dmYXgud2VicCJ9" alt="Shadowfax Logo" class="h-12 object-contain">
      </div>
    </div>

    <!-- Payment Providers -->
    <div class="bg-white p-8 rounded-lg shadow text-center">
      <h3 class="text-2xl font-bold brand-green mb-2">Payment Providers</h3>
      <p class="text-gray-600 mb-6">Receive payments directly into your bank account.</p>
      <div class="flex justify-center gap-8">
        <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9wYXltZW50L3Jhem9ycGF5LndlYnAifQ==" alt="Razorpay Logo" class="h-12 object-contain">
        <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9wYXltZW50L29wZW5tb25leS53ZWJwIn0=" alt="Open Logo" class="h-12 object-contain">
      </div>
    </div>

  </div>
</section>

<section class="py-16 bg-gray-50" id="everyone">
  <div class="text-center mb-12">
    <h2 class="text-3xl font-bold brand-green">MyEasyStore is for Everyone</h2>
    <p class="mt-4 text-gray-600">Visit any demo store below, place a test order, and get inspired!</p>
  </div>

  <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 px-6">

    <!-- Grocery -->
    <div class="bg-white p-6 rounded-lg shadow flex flex-col items-center">
      <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9kZW1vLXN0b3Jlcy9ncm9jZXJ5LndlYnAifQ==" alt="Grocery" class="h-16 mb-4">
      <h3 class="text-lg font-semibold brand-green">Grocery</h3>
    </div>

    <!-- Supermarket -->
    <div class="bg-white p-6 rounded-lg shadow flex flex-col items-center">
      <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9kZW1vLXN0b3Jlcy9zdXBlcm1hcmtldC53ZWJwIn0=" alt="Supermarket" class="h-16 mb-4">
      <h3 class="text-lg font-semibold brand-green">Supermarket</h3>
    </div>

    <!-- Food Delivery -->
    <div class="bg-white p-6 rounded-lg shadow flex flex-col items-center">
      <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9kZW1vLXN0b3Jlcy9mb29kLWRlbGl2ZXJ5LndlYnAifQ==" alt="Food Delivery" class="h-16 mb-4">
      <h3 class="text-lg font-semibold brand-green">Food Delivery</h3>
    </div>

    <!-- Bakery -->
    <div class="bg-white p-6 rounded-lg shadow flex flex-col items-center">
      <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9kZW1vLXN0b3Jlcy9iYWtlcnkud2VicCJ9" alt="Bakery" class="h-16 mb-4">
      <h3 class="text-lg font-semibold brand-green">Bakery</h3>
    </div>

    <!-- Clothing -->
    <div class="bg-white p-6 rounded-lg shadow flex flex-col items-center">
      <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9kZW1vLXN0b3Jlcy9jbG90aGluZy53ZWJwIn0=" alt="Clothing" class="h-16 mb-4">
      <h3 class="text-lg font-semibold brand-green">Clothing</h3>
    </div>

    <!-- Electronics -->
    <div class="bg-white p-6 rounded-lg shadow flex flex-col items-center">
      <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9kZW1vLXN0b3Jlcy9lbGVjdHJvbmljcy53ZWJwIn0=" alt="Electronics" class="h-16 mb-4">
      <h3 class="text-lg font-semibold brand-green">Electronics</h3>
    </div>

    <!-- Jewellery -->
    <div class="bg-white p-6 rounded-lg shadow flex flex-col items-center">
      <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9kZW1vLXN0b3Jlcy9qZXdlbGxlcnkud2VicCJ9" alt="Jewellery" class="h-16 mb-4">
      <h3 class="text-lg font-semibold brand-green">Jewellery</h3>
    </div>

    <!-- Gifts -->
    <div class="bg-white p-6 rounded-lg shadow flex flex-col items-center">
      <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9kZW1vLXN0b3Jlcy9naWZ0cy53ZWJwIn0=" alt="Gifts" class="h-16 mb-4">
      <h3 class="text-lg font-semibold brand-green">Gifts</h3>
    </div>

  </div>
</section>

<!-- Testimonials -->
<section class="p-12 bg-gray-50" style="background-color: #90EE90;">
  <h2 class="text-3xl font-bold brand-green text-center mb-8">
    What our customers have to say
  </h2>

  <div class="grid md:grid-cols-3 gap-6">

    <!-- Testimonial 1 -->
    <div class="bg-white p-6 rounded-lg shadow flex items-start gap-4">
      <div class="w-20 h-20 border-2 border-brand-green rounded-full overflow-hidden flex-shrink-0">
        <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy90ZXN0aW1vbmlhbHMvcHJvdGVpbm5hdGlvbi53ZWJwIn0="
             alt="Manjunath Ayurveda4u"
             class="w-full h-full object-cover">
      </div>
      <div>
        <p class="italic">“After the pandemic when we faced horrible losses, we survived because of our website built on MyEasyStore.”</p>
        <p class="mt-4 font-bold brand-green">– Manjunath, Ayurveda4u</p>
      </div>
    </div>

    <!-- Testimonial 2 -->
    <div class="bg-white p-6 rounded-lg shadow flex items-start gap-4">
      <div class="w-20 h-20 border-2 border-brand-green rounded-full overflow-hidden flex-shrink-0">
        <!-- Placeholder if no image -->
        <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy90ZXN0aW1vbmlhbHMvZWNvaGFjLndlYnAifQ=="   alt="Manjunath Ayurveda4u"
             class="w-full h-full object-cover">
      </div>
      <div>
        <p class="italic">“It is much easier for my customers to place an order now. Logistics too have become easier.”</p>
        <p class="mt-4 font-bold brand-green">– Mita, Sourdough Queen</p>
      </div>
    </div>

    <!-- Testimonial 3 -->
    <div class="bg-white p-6 rounded-lg shadow flex items-start gap-4">
      <div class="w-20 h-20 border-2 border-brand-green rounded-full overflow-hidden flex-shrink-0">
        <!-- Placeholder if no image -->
        <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy90ZXN0aW1vbmlhbHMvc291cmRvdWdocXVlZW4ud2VicCJ9"   alt="Manjunath Ayurveda4u"
             class="w-full h-full object-cover">
      </div>
      <div>
        <p class="italic">“Our own online store gave us a quick, convenient medium for orders and client data management.”</p>
        <p class="mt-4 font-bold brand-green">– Aakash, Ecohac</p>
      </div>
    </div>

  </div>
</section>




  <!-- In the News -->
 <section class="py-16 bg-white" id="in-the-news">
  <div class="text-center mb-12">
    <h2 class="text-3xl font-bold brand-green">In the news</h2>
  </div>

  <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 items-center px-6">
    <!-- Logo 1 -->
    <div class="flex justify-center">
      <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9tZWRpYS90d2Vhay53ZWJwIn0=" alt="Tweak India Logo" class="h-16 object-contain">
    </div>

    <!-- Logo 2 -->
    <div class="flex justify-center">
      <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9tZWRpYS95b3Vyc3Rvcnkud2VicCJ9" alt="YourStory Logo" class="h-16 object-contain border px-4 py-2 rounded">
    </div>

    <!-- Logo 3 -->
    <div class="flex justify-center">
      <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9tZWRpYS90aGVoaW5kdS53ZWJwIn0=" alt="The Hindu Logo" class="h-16 object-contain">
    </div>
  </div>
</section>


  <!-- Blog Section -->
  <section class="p-12 bg-white" style="background-color: #90EE90;">
    <h2 class="text-3xl font-bold brand-green text-center">Visit our blog</h2>
    <p class="text-center text-gray-600 mb-8">Get the latest trends and expert tips to grow your online business.</p>
    <div class="grid md:grid-cols-4 gap-6">
      <div class="bg-gray-100 p-6 rounded-lg shadow text-center">
        <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9ibG9nLzEud2VicCJ9" alt="Blog 1" class="rounded mb-4 mx-auto">
        <h3 class="font-bold brand-green">Why selling products on your own platform is important</h3>
      </div>
      <div class="bg-gray-100 p-6 rounded-lg shadow text-center">
        <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9ibG9nLzIud2VicCJ9" alt="Blog 2" class="rounded mb-4 mx-auto">
        <h3 class="font-bold brand-green">How to set up your online store like a pro</h3>
      </div>
      <div class="bg-gray-100 p-6 rounded-lg shadow text-center">
        <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9ibG9nLzUud2VicCJ9" alt="Blog 3" class="rounded mb-4 mx-auto">
        <h3 class="font-bold brand-green">Having a clear online presence makes ordering seamless</h3>
      </div>
      <div class="bg-gray-100 p-6 rounded-lg shadow text-center">
        <img src="https://d1ng0pylk0lclb.cloudfront.net/eyJidWNrZXQiOiJ3aGF0c2FwcC1vcmRlciIsImtleSI6Im1hcmtldGluZy9ibG9nLzQud2VicCJ9" alt="Blog 4" class="rounded mb-4 mx-auto">
        <h3 class="font-bold brand-green">Expert tips to use social media correctly</h3>
      </div>
    </div>
  </section>



  <!-- FAQ -->
 <section class="py-16 bg-gray-50" id="faq">
  <div class="text-center mb-12">
    <h2 class="text-3xl font-bold brand-green">Frequently Asked Questions</h2>
  </div>

  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 px-6">

    <!-- Column 1 -->
    <div class="space-y-4">
      <!-- Question 1 -->
      <div class="border rounded-lg">
        <button onclick="toggleFAQ(this)" class="hover:text-brand-green w-full flex justify-between items-center p-4 font-semibold text-left">
          What kind of business can use MyEasyStore?
          <span class="text-xl hover:text-brand-green"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="float-right" height="1.8em" width="1.8em" xmlns="http://www.w3.org/2000/svg"><path d="M147.6 210.7c-7.5 7.5-7.5 19.8 0 27.3l95.7 95.4c7.3 7.3 19.1 7.5 26.6.6l94.3-94c3.8-3.8 5.7-8.7 5.7-13.7 0-4.9-1.9-9.9-5.6-13.6-7.5-7.5-19.7-7.6-27.3 0l-81 79.8-81.1-81.9c-7.5-7.5-19.7-7.5-27.3.1z"></path><path d="M48 256c0 114.9 93.1 208 208 208s208-93.1 208-208S370.9 48 256 48 48 141.1 48 256zm332.4-124.4C413.7 164.8 432 209 432 256s-18.3 91.2-51.6 124.4C347.2 413.7 303 432 256 432s-91.2-18.3-124.4-51.6C98.3 347.2 80 303 80 256s18.3-91.2 51.6-124.4C164.8 98.3 209 80 256 80s91.2 18.3 124.4 51.6z"></path></svg></span>
        </button>
        <div class="hidden p-4 text-gray-600">
          Anyone who’s looking to start and grow their ecommerce business.
        </div>
      </div>

      <!-- Question 2 -->
      <div class="border rounded-lg">
        <button onclick="toggleFAQ(this)" class="w-full flex justify-between items-center p-4 font-semibold text-left">
          Do I have to pay commissions on orders?
          <span class="text-xl"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="float-right" height="1.8em" width="1.8em" xmlns="http://www.w3.org/2000/svg"><path d="M147.6 210.7c-7.5 7.5-7.5 19.8 0 27.3l95.7 95.4c7.3 7.3 19.1 7.5 26.6.6l94.3-94c3.8-3.8 5.7-8.7 5.7-13.7 0-4.9-1.9-9.9-5.6-13.6-7.5-7.5-19.7-7.6-27.3 0l-81 79.8-81.1-81.9c-7.5-7.5-19.7-7.5-27.3.1z"></path><path d="M48 256c0 114.9 93.1 208 208 208s208-93.1 208-208S370.9 48 256 48 48 141.1 48 256zm332.4-124.4C413.7 164.8 432 209 432 256s-18.3 91.2-51.6 124.4C347.2 413.7 303 432 256 432s-91.2-18.3-124.4-51.6C98.3 347.2 80 303 80 256s18.3-91.2 51.6-124.4C164.8 98.3 209 80 256 80s91.2 18.3 124.4 51.6z"></path></svg></span>
        </button>
        <div class="hidden p-4 text-gray-600">
          No, you keep 100% of your sales revenue.
        </div>
      </div>

      <!-- Question 3 -->
      <div class="border rounded-lg">
        <button onclick="toggleFAQ(this)" class="w-full flex justify-between items-center p-4 font-semibold text-left">
          How do I accept online payments?
          <span class="text-xl"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="float-right" height="1.8em" width="1.8em" xmlns="http://www.w3.org/2000/svg"><path d="M147.6 210.7c-7.5 7.5-7.5 19.8 0 27.3l95.7 95.4c7.3 7.3 19.1 7.5 26.6.6l94.3-94c3.8-3.8 5.7-8.7 5.7-13.7 0-4.9-1.9-9.9-5.6-13.6-7.5-7.5-19.7-7.6-27.3 0l-81 79.8-81.1-81.9c-7.5-7.5-19.7-7.5-27.3.1z"></path><path d="M48 256c0 114.9 93.1 208 208 208s208-93.1 208-208S370.9 48 256 48 48 141.1 48 256zm332.4-124.4C413.7 164.8 432 209 432 256s-18.3 91.2-51.6 124.4C347.2 413.7 303 432 256 432s-91.2-18.3-124.4-51.6C98.3 347.2 80 303 80 256s18.3-91.2 51.6-124.4C164.8 98.3 209 80 256 80s91.2 18.3 124.4 51.6z"></path></svg></span>
        </button>
        <div class="hidden p-4 text-gray-600">
          You can integrate with multiple payment providers like Razorpay or Open.
        </div>
      </div>
    </div>

    <!-- Column 2 -->
    <div class="space-y-4">
      <!-- Question 4 -->
      <div class="border rounded-lg">
        <button onclick="toggleFAQ(this)" class="w-full flex justify-between items-center p-4 font-semibold text-left">
          How will I receive orders?
          <span class="text-xl"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="float-right" height="1.8em" width="1.8em" xmlns="http://www.w3.org/2000/svg"><path d="M147.6 210.7c-7.5 7.5-7.5 19.8 0 27.3l95.7 95.4c7.3 7.3 19.1 7.5 26.6.6l94.3-94c3.8-3.8 5.7-8.7 5.7-13.7 0-4.9-1.9-9.9-5.6-13.6-7.5-7.5-19.7-7.6-27.3 0l-81 79.8-81.1-81.9c-7.5-7.5-19.7-7.5-27.3.1z"></path><path d="M48 256c0 114.9 93.1 208 208 208s208-93.1 208-208S370.9 48 256 48 48 141.1 48 256zm332.4-124.4C413.7 164.8 432 209 432 256s-18.3 91.2-51.6 124.4C347.2 413.7 303 432 256 432s-91.2-18.3-124.4-51.6C98.3 347.2 80 303 80 256s18.3-91.2 51.6-124.4C164.8 98.3 209 80 256 80s91.2 18.3 124.4 51.6z"></path></svg></span>
        </button>
        <div class="hidden p-4 text-gray-600">
          Orders are received via your dashboard, email, and WhatsApp notifications.
        </div>
      </div>

      <!-- Question 5 -->
      <div class="border rounded-lg">
        <button onclick="toggleFAQ(this)" class="w-full flex justify-between items-center p-4 font-semibold text-left">
          Can I add and update products any time?
          <span class="text-xl"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="float-right" height="1.8em" width="1.8em" xmlns="http://www.w3.org/2000/svg"><path d="M147.6 210.7c-7.5 7.5-7.5 19.8 0 27.3l95.7 95.4c7.3 7.3 19.1 7.5 26.6.6l94.3-94c3.8-3.8 5.7-8.7 5.7-13.7 0-4.9-1.9-9.9-5.6-13.6-7.5-7.5-19.7-7.6-27.3 0l-81 79.8-81.1-81.9c-7.5-7.5-19.7-7.5-27.3.1z"></path><path d="M48 256c0 114.9 93.1 208 208 208s208-93.1 208-208S370.9 48 256 48 48 141.1 48 256zm332.4-124.4C413.7 164.8 432 209 432 256s-18.3 91.2-51.6 124.4C347.2 413.7 303 432 256 432s-91.2-18.3-124.4-51.6C98.3 347.2 80 303 80 256s18.3-91.2 51.6-124.4C164.8 98.3 209 80 256 80s91.2 18.3 124.4 51.6z"></path></svg></span>
        </button>
        <div class="hidden p-4 text-gray-600">
          Yes, you can manage your catalogue anytime from your admin panel.
        </div>
      </div>

      <!-- Question 6 -->
      <div class="border rounded-lg">
        <button onclick="toggleFAQ(this)" class="w-full flex justify-between items-center p-4 font-semibold text-left">
          How much does it cost to run an online store?
          <span class="text-xl"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="float-right" height="1.8em" width="1.8em" xmlns="http://www.w3.org/2000/svg"><path d="M147.6 210.7c-7.5 7.5-7.5 19.8 0 27.3l95.7 95.4c7.3 7.3 19.1 7.5 26.6.6l94.3-94c3.8-3.8 5.7-8.7 5.7-13.7 0-4.9-1.9-9.9-5.6-13.6-7.5-7.5-19.7-7.6-27.3 0l-81 79.8-81.1-81.9c-7.5-7.5-19.7-7.5-27.3.1z"></path><path d="M48 256c0 114.9 93.1 208 208 208s208-93.1 208-208S370.9 48 256 48 48 141.1 48 256zm332.4-124.4C413.7 164.8 432 209 432 256s-18.3 91.2-51.6 124.4C347.2 413.7 303 432 256 432s-91.2-18.3-124.4-51.6C98.3 347.2 80 303 80 256s18.3-91.2 51.6-124.4C164.8 98.3 209 80 256 80s91.2 18.3 124.4 51.6z"></path></svg></span>
        </button>
        <div class="hidden p-4 text-gray-600">
          Plans are affordable and flexible depending on your business needs.
        </div>
      </div>
    </div>

  </div>
</section>

<script>
  function toggleFAQ(button) {
    const answer = button.nextElementSibling;
    answer.classList.toggle("hidden");
  }
</script>


  <!-- Footer -->
  <footer class="bg-brand-green text-white p-12">
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
