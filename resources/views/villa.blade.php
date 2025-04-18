<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<header class="w-full border-b shadow-sm px-6 md:px-12 py-4">
  <div class="flex items-center justify-between w-full">
    
  <h1 class="text-2xl font-bold flex items-center">
            <span class="text-green-500">GO</span> Travel 
            <style>
                body {
                    font-family: 'Poppins', sans-serif;
                }
            </style>
        </h1>
        <div class="flex-1 px-6 hidden md:flex justify-center">
      <div class="relative w-full max-w-md">
        <input 
          type="text" 
          placeholder="Search" 
          class="w-full px-4 py-2 border rounded-full ml-1"
        />
        <svg class="absolute right-4 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoi10="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
      </div>
    </div>

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



<section class="px-6 md:px-12 py-6">
    <div class="text-sm text-gray-600 mb-2">
      <span class="text-black font-medium">Villa & Apt</span> &gt; Indonesia &gt; Bali
    </div>
    <div class="flex flex-col md:flex-row md:items-end justify-between">
      <div>
        <h1 class="text-4xl font-bold">
          <span class="text-pink-600">Bali</span> <span class="text-black">Villa & Apt</span>
        </h1>
        <p class="text-gray-600 mt-1">Villas and Vacation Rentals in Bali, Indonesia</p>
      </div>
    </div>
  </section>

  <div class="px-6 md:px-12 flex flex-col md:flex-row md:items-center justify-between mb-6">
    <div class="flex items-center gap-4">
      <button class="border rounded-full px-4 py-2 flex items-center gap-2 text-sm font-medium">
        📅 Enter Dates
      </button>
      <p class="text-sm font-semibold">See what other travelers like to do, based on ratings and number of bookings.</p>
    </div>
    <button class="border rounded-full px-4 py-2 flex items-center gap-1 text-sm mt-4 md:mt-0">
      Sort ⌄
    </button>
  </div>

  <div class="px-6 md:px-12 flex flex-col md:flex-row gap-8">

    <aside class="md:w-1/4 text-sm">
      <p class="mb-3">All things to-do</p>
      <p class="font-bold mb-2">Product Groups</p>
      <ul class="space-y-1 text-gray-700">
        <li>Outdoor Activities</li>
        <li>Tours & Sightseeing</li>
        <li>Day Trips & Execution</li>
      </ul>
    </aside>

    <div class="md:w-3/4 grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="rounded-xl overflow-hidden shadow-sm">
        <img src="ubud.jpg" alt="Ubud Villa" class="w-full h-56 object-cover"/>
        <div class="text-center py-2 font-semibold">Ubud</div>
      </div>
      <div class="rounded-xl overflow-hidden shadow-sm">
        <img src="uluwatu.jpg" alt="Uluwatu Villa" class="w-full h-56 object-cover"/>
        <div class="text-center py-2 font-semibold">Uluwatu</div>
      </div>
      <div class="rounded-xl overflow-hidden shadow-sm">
        <img src="canggu.jpg" alt="Canggu Villa" class="w-full h-56 object-cover"/>
        <div class="text-center py-2 font-semibold">Canggu</div>
      </div>
    </div>
  </div>

</body>
</html>