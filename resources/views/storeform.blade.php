<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Easy Ecommerce Website Builder - Start selling online | MyEasyStore</title>
  <link rel="icon" type="image/png" href="/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <style>
    .brand-green { color: #005200; }
    .bg-brand-green { background-color: #005200; }
  </style>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50 font-sans" style=" font-family: Poppins;">

  <!-- Header -->
  <nav class="bg-brand-green text-white p-4 flex justify-between">
    <div class="font-bold text-xl">MyEasyStore</div>
  </nav>

  <!-- Banner Block -->
  <section class="bg-brand-green text-white max-w-3xl mx-auto mt-8 rounded-lg shadow text-center p-8" style="background-color:#008f00;">
    <h1 class="text-4xl font-bold">Start Your 14-Day Free Trial</h1>
    <p class="mt-2 text-lg">Create your ecommerce website now, pick a plan later.</p>
  </section>

  <!-- Form Section -->

<section class="max-w-4xl mx-auto p-8">
  <form action="{{ route('store.create') }}" id="storeForm" method="POST" class="space-y-10 bg-white p-10 rounded-lg shadow">
    @csrf

    <!-- Store URL -->
    <div>
      <div class="flex items-center space-x-3 mb-4">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg" style="color:#008f00;">
          <path d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z"></path>
        </svg>
        <h3 class="text-2xl font-semibold" style="color:#008f00;">Store URL</h3>
      </div>
      <label class="block font-semibold" style="color:#5e5e5e;">Pick a Username</label>
      <input type="text" name="username" id="username" value="{{ old('username') }}"
             class="w-full border rounded p-2 focus:ring focus:ring-green-300" style="color:#070505;">

       <p id="urlPreview" class="mt-1 text-sm font-semibold" style="color:#008f00;"></p>

        <!-- Validation errors -->
        <span id="usernameError" class="text-red-600 text-sm"></span>
        @error('username') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror

    </div>

    <!-- Store Details -->
    <div>
      <div class="flex items-center space-x-3 mb-4">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg" style="color:#008f00;">
          <path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path>
        </svg>
        <h3 class="text-2xl font-semibold" style="color:#008f00;">Store Details</h3>
      </div>
      <label class="block font-semibold" style="color:#5e5e5e;">Store Name</label>
      <input type="text" name="store_name" value="{{ old('store_name') }}"
             class="w-full border rounded p-2 focus:ring focus:ring-green-300">
      @error('store_name') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
      <span id="store_nameError" class="text-red-600 text-sm"></span>
        <!-- Flat  -->
      <label class="block font-semibold mt-4" style="color:#5e5e5e;">Flat / Apartment / Unit</label>
      <input type="text" name="flat" value="{{ old('flat') }}"
             class="w-full border rounded p-2 focus:ring focus:ring-green-300" >
      @error('flat') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
       <span id="flatError" class="text-red-600 text-sm"></span>
       <!-- Store Address -->
      <label class="block font-semibold mt-4" style="color:#5e5e5e;">Store Address</label>
      <input type="text" name="address"
             class="w-full border rounded p-2 focus:ring focus:ring-green-300" placeholder="Start typing your building name..">
      @error('address') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
     <span id="addressError" class="text-red-600 text-sm"></span>
      <!-- Store Category -->
      <label class="block font-semibold mt-4" style="color:#5e5e5e;">Store Category</label>
      <select name="category" class="w-full border rounded p-2 focus:ring focus:ring-green-300">
        <option value=""></option>
        <option>Arts, Crafts & Handmade Products</option>
        <option>Baby & Children's Products</option>
        <option>Beauty & Personal Care Products</option>
        <option>Clothing & Fashion</option>
        <option>Jewellery & Accessories</option>
        <option>Electronics & Appliances</option>
        <option>Food & Beverage Products</option>
        <option>Grocery & Convenience Store</option>
        <option>Restaurants & Cloud Kitchens</option>
        <option>Home & Office Products</option>
        <option>Industrial Products</option>
        <option>Medical & Healthcare</option>
        <option>Sports & Fitness Products</option>
        <option>Property & Real Estate</option>
        <option>NGO & Non-Profit Organisation</option>
        <option>Others</option>
      </select>
      @error('category') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
      <span id="categoryError" class="text-red-600 text-sm"></span>
    </div>

    <!-- Store Owner -->
    <div>
      <div class="flex items-center space-x-3 mb-4">
        <svg class="w-8 h-8" fill="#008f00" viewBox="0 0 24 24">
          <path d="M12 12c2.7 0 4.9-2.2 4.9-4.9S14.7 2.2 12 2.2 7.1 4.4 7.1 7.1 9.3 12 12 12zm0 2c-3.3 0-9.9 1.7-9.9 5v2h19.8v-2c0-3.3-6.6-5-9.9-5z"/>
        </svg>
        <h3 class="text-2xl font-semibold" style="color:#008f00;">Store Owner</h3>
      </div>
       <!-- Owner Name -->
      <label class="block font-semibold" style="color:#5e5e5e;">Full Name</label>
      <input type="text" name="owner_name" value="{{ old('owner_name') }}"
             class="w-full border rounded p-2 focus:ring focus:ring-green-300">
      @error('owner_name') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
      <span id="owner_nameError" class="text-red-600 text-sm"></span>
      <label class="block font-semibold mt-4" style="color:#5e5e5e;">WhatsApp Phone Number</label>
       <!-- Country Code -->
    <input type="text" name="phone" id="phone"        class="w-full border rounded p-2 focus:ring focus:ring-green-300"
       style="color:#5e5e5e;"        placeholder="">

      @error('phone') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
      <span id="phoneError" class="text-red-600 text-sm"></span>
      <!-- Email -->
      <label class="block font-semibold mt-4" style="color:#5e5e5e;">Email Address</label>

      <input type="text" name="email" value="{{ old('email') }}"
             class="w-full border rounded p-2 focus:ring focus:ring-green-300">
      @error('email') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
      <span id="emailError" class="text-red-600 text-sm"></span>
    </div>

    <!-- Terms -->
    <div>
      <label class="inline-flex items-center" style="color:#5e5e5e;">
        <input type="checkbox" name="terms" class="mr-2"> I agree to the Terms & Conditions
      </label>
      @error('terms') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
     <br>  <span id="termsError" class="text-red-600 text-sm"></span>
    </div>

   <button type="submit"
        class="px-6 py-3 rounded font-semibold w-full"
        style="background-color:#008f00; color:white;font-size:20px;">
    Create Online Store
</button>

  </form>
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

<script>
  const usernameInput = document.getElementById('username');
  const urlPreview = document.getElementById('urlPreview');

  if(usernameInput){
    usernameInput.addEventListener('input', function() {
      if(this.value.length > 0) {
        urlPreview.textContent = this.value + ".myeasystore.in";
      } else {
        urlPreview.textContent = "";
      }
    });
  }
</script>
<script>
const usernameInput = document.getElementById("username");
const urlPreview = document.getElementById("urlPreview");

usernameInput.addEventListener("input", function() {
    if(this.value.trim().length > 0) {
        urlPreview.textContent = this.value.trim() + ".myeasystore.in";
    } else {
        urlPreview.textContent = "";
    }
});
</script>
<script>
document.getElementById("storeForm").addEventListener("submit", function(e) {
    let valid = true;

    // Clear previous errors
    document.querySelectorAll("span[id$='Error']").forEach(el => el.textContent = "");

    // Username validation
    let username = document.getElementById("username").value.trim();
    if (username.length < 4 || username.length > 35 || !/^[a-zA-Z0-9]+$/.test(username)) {
        document.getElementById("usernameError").textContent =
          "Invalid username: 4–35 chars, only letters/numbers.";
        valid = false;
    }

    // Store Name validation
    let storeName = document.querySelector("input[name='store_name']").value.trim();
    if (storeName.length < 3) {
        document.getElementById("store_nameError").textContent =
          "Store name must be at least 3 characters.";
        valid = false;
    }

    // Address validation
    let address = document.querySelector("input[name='address']").value.trim();
    if (address.length < 5) {
        document.getElementById("addressError").textContent =
          "Address must be at least 5 characters.";
        valid = false;
    }

    // Category validation
    let category = document.querySelector("select[name='category']").value;
    if (category === "") {
        document.getElementById("categoryError").textContent =
          "Please select a store category.";
        valid = false;
    }

    // Owner Name validation
    let ownerName = document.querySelector("input[name='owner_name']").value.trim();
    if (ownerName.length < 4) {
        document.getElementById("owner_nameError").textContent =
          "Owner name must be at least 4 characters.";
        valid = false;
    }

    // Phone validation
    let phone = document.querySelector("input[name='phone']").value.trim();
    if (!/^\d{10}$/.test(phone)) {
        document.getElementById("phoneError").textContent =
          "Phone number must be exactly 10 digits.";
        valid = false;
    }

    // Email validation
    let email = document.querySelector("input[name='email']").value.trim();
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        document.getElementById("emailError").textContent =
          "Please enter a valid email address.";
        valid = false;
    }

    // Terms validation
    let terms = document.querySelector("input[name='terms']").checked;
    if (!terms) {
        document.getElementById("termsError").textContent =
          "You must agree to the Terms & Conditions.";
        valid = false;
    }

    if (!valid) e.preventDefault(); // stop form submission

})
</script>
