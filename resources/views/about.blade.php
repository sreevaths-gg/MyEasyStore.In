@extends('layouts.app')

@section('title', 'About MyEasyStore')
@section('content')
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

@endsection
