<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-white text-gray-800">

  <header class="w-full border-b shadow-sm px-6 md:px-12 py-4">
    <div class="flex items-center justify-between w-full">
      <h1 class="text-2xl font-bold flex items-center">
        <span class="text-green-500">GO</span> Travel 
      </h1>
      <form action="{{ route('search') }}" method="GET" class="w-full">
        <div class="relative w-full max-w-md">
          <input 
            type="text" 
            name="q"
            placeholder="Search" 
            class="w-full px-4 py-2 border rounded-full ml-1"
          />
          <button type="submit" class="absolute right-4 top-2.5">
            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </button>
        </div>
      </form>
      

      <div class="flex items-center space-x-6 font-medium text-sm">
        <a href="#" class="hover:text-green-600">Discover</a>
        <a href="#" class="hover:text-green-600">Trips</a>
        <a href="#" class="hover:text-green-600">Review</a>
        <a href="#" class="hover:text-green-600">More</a>
        <button class="bg-black text-white px-4 py-2 rounded-full text-sm">Sign In</button>
      </div>
    </div>
  </header>   

  <nav class="bg-white px-6 md:px-12 py-2">
    <div class="max-w-7xl flex space-x-6 text-sm font-semibold text-gray-700">
      <a href="flight" class="hover:text-green-600">Flights</a>
      <a href="hotel" class="hover:text-green-600">Hotels</a>
      <a href="to-do" class="hover:text-green-600">Things To-Do</a>
    </div>
  </nav>

  <main class="flex flex-col md:flex-row px-6 md:px-12 py-8 space-y-8 md:space-y-0 md:space-x-8">

    <aside class="md:w-1/3 lg:w-1/4 space-y-6">
      
      <div class="border-2 border-purple-500 rounded-md overflow-hidden relative">
        <img src="https://via.placeholder.com/300x200.png?text=Map+View" alt="Map" class="w-full" />
        <button class="bg-white border px-4 py-1 rounded-full text-sm font-semibold shadow absolute bottom-3 left-3">View Map</button>
      </div>

      <div>
        <h3 class="font-bold text-lg mb-2">Popular</h3>
        <div class="space-y-2 text-sm text-gray-700">
          <label><input type="checkbox" class="mr-2">5 Star</label><br>
          <label><input type="checkbox" class="mr-2">★★★★☆ & Up</label><br>
          <label><input type="checkbox" class="mr-2">Breakfast Included</label><br>
          <label><input type="checkbox" class="mr-2">Mid-range</label>
        </div>
      </div>

      <div class="mt-4">
        <h3 class="font-bold text-lg mb-2">Property types</h3>
        <div class="space-y-2 text-sm text-gray-700">
          <label><input type="checkbox" class="mr-2">Hotels</label><br>
          <label><input type="checkbox" class="mr-2">Specialty lodgings</label><br>
          <label><input type="checkbox" class="mr-2">Free WiFi</label><br>
          <label><input type="checkbox" class="mr-2">Pool</label>
        </div>
      </div>
    </aside>

    <section class="md:w-2/3 lg:w-3/4">
      <h2 class="text-xl font-bold mb-4">Popular hotels in New York City right now</h2>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <img src="hotel1.jpg" class="rounded-lg" alt="Hotel 1" />
        <img src="hotel2.jpg" class="rounded-lg" alt="Hotel 2" />
        <img src="hotel3.jpg" class="rounded-lg" alt="Hotel 3" />
        <img src="hotel4.jpg" class="rounded-lg" alt="Hotel 4" />
        <img src="hotel5.jpg" class="rounded-lg" alt="Hotel 5" />
        <img src="hotel6.jpg" class="rounded-lg" alt="Hotel 6" />
      </div>
    </section>

  </main>

</body>
</html>
