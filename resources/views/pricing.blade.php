@extends('layouts.app')

@section('title', 'About MyEasyStore')
@section('content')

<section id="pricing" class="py-16 px-6 bg-gray-50">
  <div class="max-w-7xl mx-auto text-center mb-12">
    <h2 class="text-3xl font-bold text-green-700" style="color:#005200;font-size:40px;">Pricing Plans</h2>
    <p class="text-white-600 mt-2" style="font-size:20px;color:#929292"">
      A quick, easy and affordable solution to take your business online.
    </p>
  </div>
<div class="flex justify-center">
  <!-- Grid for plans -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-1/2 flex ">
    <!-- BASIC Plan -->

    <div class="bg-white rounded-lg shadow p-8 border border-black"  >
      <h3 class="text-2xl font-bold mb-4" style="color:#005200;">BASIC</h3>
      <p class="text-4xl font-bold text-green-700 mb-6" style="color:#005200;">₹399 <span class="text-lg font-medium">/month</span></p>
      <ul class="text-gray-700 space-y-2 text-left">
        <li>✔ Online Store</li>
        <li>✔ Store Dashboard</li>
        <li>✔ Unlimited Products</li>
        <li>✔ Unlimited In‑Store Promotions</li>
        <li>✔ Unlimited Coupon Codes</li>
        <li>✔ Online Payment</li>
        <li>✔ Hyperlocal Delivery</li>
        <li>✔ Reports & Analytics</li>
        <li>✔ Email & WhatsApp Notifications</li>
        <li>✔ Multiple Store Layouts</li>
        <li>✔ Custom Domain*</li>
      </ul>
    </div>

    <!-- PREMIUM Plan -->

    <div class="bg-white rounded-lg shadow p-8 border border-black" >
      <h3 class="text-2xl font-bold mb-4" style="color:#005200;">PREMIUM</h3>
      <p class="text-4xl font-bold text-green-700 mb-6" style="color:#005200;">₹699 <span class="text-lg font-medium">/month</span></p>
      <ul class="text-gray-700 space-y-2 text-left">
        <li>✔ Online Store</li>
        <li>✔ Store Dashboard</li>
        <li>✔ Unlimited Products</li>
        <li>✔ Unlimited In‑Store Promotions</li>
        <li>✔ Unlimited Coupon Codes</li>
        <li>✔ Online Payment</li>
        <li>✔ Hyperlocal Delivery</li>
        <li>✔ Reports & Analytics</li>
        <li>✔ Email & WhatsApp Notifications</li>
        <li>✔ Multiple Store Layouts</li>
        <li>✔ Custom Domain*</li>
        <li>✔ Staff Member Access</li>
        <li>✔ Product Addons</li>
        <li>✔ Stock Management</li>
        <li>✔ Availability Date & Time</li>
        <li>✔ Pre Orders</li>
        <li>✔ Cover Photos</li>
        <li>✔ Bulk Upload</li>
      </ul>
    </div>
  </div>
</div>
  <!-- Centered Button BELOW the blocks -->
  <div class="mt-10 text-center">
    <button class="bg-brand-green text-white px-8 py-2 rounded font-semibold hover:bg-green-800 transition">
      Start 14‑day free trial
    </button>
  </div>

  <!-- Note -->
  <p class="text-sm text-gray-500 mt-6 text-center">
    * Linking your custom domain to your online store is free on annual plans. A one‑time setup fee applies on 3‑month or 6‑month plans.
  </p>
</section>
@endsection


