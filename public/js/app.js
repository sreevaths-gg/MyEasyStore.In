
document.addEventListener("DOMContentLoaded", function() {
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("overlay");
  const menuBtn = document.getElementById("menuBtn");
  const openSidebarBtn = document.getElementById("openSidebarBtn");
  const closeBtn = document.getElementById("closeBtn");

  // Open sidebar
  if (menuBtn) {
    menuBtn.onclick = function() {
      sidebar.style.width = "250px";
      overlay.style.display = "block";
    };
  }
  if (openSidebarBtn) {
    openSidebarBtn.onclick = function() {
      sidebar.style.width = "250px";
      overlay.style.display = "block";
    };
  }

  // Close sidebar with X button
  if (closeBtn) {
    closeBtn.onclick = function() {
      sidebar.style.width = "0";
      overlay.style.display = "none";
    };
  }

  // Close sidebar when clicking outside (overlay)
  overlay.onclick = function() {
    sidebar.style.width = "0";
    overlay.style.display = "none";
  };

  // Smooth scroll + close sidebar when clicking a link
  document.querySelectorAll(".sidebar a").forEach(link => {
    link.addEventListener("click", function(e) {
  //    e.preventDefault();
      const targetId = this.getAttribute("href"); // e.g. "#faq"
      const target = document.querySelector(targetId);
      if (target) {
        target.scrollIntoView({ behavior: "smooth" });
      }
      sidebar.style.width = "0";
      overlay.style.display = "none";
    });
  });
});





const usernameInput = document.getElementById("username");
const urlPreview = document.getElementById("urlPreview");

usernameInput.addEventListener("input", function() {
    if(this.value.trim().length > 0) {
        urlPreview.textContent = this.value.trim() + ".myeasystore.in";
    } else {
        urlPreview.textContent = "";
    }
});

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

// document.querySelectorAll(".sidebar a").forEach(link => {
//   link.addEventListener("click", function(e) {
//     const href = this.getAttribute("href");

//     // If it's an anchor (#something), smooth scroll
//     if (href.startsWith("#")) {
//       e.preventDefault();
//       const target = document.querySelector(href);
//       if (target) {
//         target.scrollIntoView({ behavior: "smooth" });
//       }
//       sidebar.style.width = "0";
//       overlay.style.display = "none";
//     }
//     // If it's a Laravel route (/about), let it navigate normally
//   });
// });

