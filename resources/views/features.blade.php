@extends('layouts.app')

@section('title', 'About MyEasyStore')
@section('content')

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


@endsection






