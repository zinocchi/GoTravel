<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
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


  <main class="px-6 md:px-20 py-10">
    <div class="grid md:grid-cols-2 gap-10 items-start">
      <div class="border-[12px] border-cyan-200">
        <img src="japan.jpg" alt="Japan street view" class="w-full h-auto object-cover" />
      </div>

      <div>
        <h1 class="text-4xl font-bold mb-4">Things to-Do in Japan</h1>
        <p class="text-lg leading-relaxed text-gray-700">
          Create unforgettable memories with family and friends at incredible theme parks. 
          Enjoy thrilling rides, spectacular shows, and engaging attractions suitable for all ages. 
          From the legendary Tokyo Disneyland to the exciting Universal Studios Japan, there are numerous 
          theme park options that will make your vacation filled with joy and excitement.
        </p>
      </div>
    </div>

    <div class="mt-10">
      <h2 class="text-xl font-semibold mb-4">Explore popular experiences</h2>
      <div class="flex flex-wrap gap-4">
        <button class="px-4 py-2 border rounded-full flex items-center gap-2"><span>🎮</span> Fun & games</button>
        <button class="px-4 py-2 border rounded-full flex items-center gap-2"><span>🎢</span> Themes Park</button>
        <button class="px-4 py-2 border rounded-full flex items-center gap-2"><span>🚆</span> Rail Tours</button>
        <button class="px-4 py-2 border rounded-full flex items-center gap-2"><span>🧳</span> Days Trip</button>
        <button class="px-4 py-2 border rounded-full flex items-center gap-2"><span>🏯</span> Cultural Tours</button>
        <button class="px-4 py-2 border rounded-full flex items-center gap-2"><span>🎨</span> Art Tours</button>
        <button class="px-4 py-2 border rounded-full flex items-center gap-2"><span>🏰</span> Historic Sites</button>
        <button class="px-4 py-2 border rounded-full flex items-center gap-2"><span>🌆</span> City Tours</button>
      </div>
    </div>
  </main>

</body>
</html>
