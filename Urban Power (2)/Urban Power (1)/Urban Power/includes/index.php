<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyHomeCare - Trusted Home Services</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.5.0/remixicon.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Favicon -->
  <link rel="icon" href="favicon.ico">
</head>
<body class="bg-gray-900 text-white min-h-screen flex flex-col">
  <!-- Login Button -->
  <button id="loginBtn" class="fixed top-6 right-8 bg-blue-600 text-white px-5 py-2 rounded shadow hover:bg-blue-700 z-50">
    Login
  </button>

  <!-- Login Popup Form -->
  <div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white text-gray-900 rounded-lg p-8 w-full max-w-sm shadow-lg relative">
      <button id="closeModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl">&times;</button>
      <h2 class="text-2xl font-bold mb-4">Login</h2>
      <form>
        <div class="mb-4">
          <label class="block mb-1 font-semibold">Name</label>
          <input type="text" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
          <label class="block mb-1 font-semibold">Phone Number</label>
          <input type="tel" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
          <label class="block mb-1 font-semibold">Address</label>
          <input type="text" class="w-full border rounded px-3 py-2" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 w-full">Login</button>
      </form>
    </div>
  </div>

  <script>
    // Show modal
    document.getElementById('loginBtn').onclick = function() {
      document.getElementById('loginModal').classList.remove('hidden');
    };
    // Hide modal
    document.getElementById('closeModal').onclick = function() {
      document.getElementById('loginModal').classList.add('hidden');
    };
    // Optional: Hide modal when clicking outside the form
    document.getElementById('loginModal').onclick = function(e) {
      if (e.target === this) this.classList.add('hidden');
    };
  </script>

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>

  <!-- Services -->
  <?php include 'services.php'; ?>

  <!-- AMC Plans -->
  <?php include 'plans.php'; ?>

  <!-- Testimonials -->
  <?php include 'testimonials.php'; ?>

  <!-- Video/Promo Section -->
  <?php include 'video.php'; ?>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

</body>
</html>
