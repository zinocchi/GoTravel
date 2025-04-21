<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Go Travel - Flights</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="m-0 font-sans bg-cover bg-center h-screen" style="background-image: url('gambar/new york.jpg')">
  <div class="bg-white px-6 py-3 flex items-center justify-between">
    <div class="text-2xl font-bold">
      GO <span class="text-green-800">Travel</span>
    </div>
    <div class="bg-gray-200 rounded-full px-4 py-1 flex items-center w-64 max-sm:w-40">
      <input type="text" placeholder="New York" class="bg-transparent border-none outline-none w-full px-1 py-1 text-sm" />
    </div>
    <div class="hidden sm:flex gap-5 text-black font-medium">
      <a href="#">Discover</a>
      <a href="#">Trips</a>
      <a href="#">Review</a>
      <a href="#">More</a>
    </div>
    <button class="bg-black text-white px-5 py-2 rounded-full text-sm">Sign In</button>
  </div>

  <div class="bg-white w-[400px] max-sm:w-[90%] mx-12 my-12 max-sm:mx-auto rounded-xl p-6 shadow-md">
    <h3 class="text-xl font-semibold mb-4">Cheap Flights to New York City</h3>
    
    <div class="flex gap-4 mb-4">
      <span class="cursor-pointer font-bold border-b-2 border-black pb-1">Round Trip</span>
      <span class="cursor-pointer font-bold border-b-2 border-transparent pb-1">One Way</span>
      <span class="cursor-pointer font-bold border-b-2 border-transparent pb-1">Multi City</span>
    </div>

    <div class="mb-3">
      <label class="block mb-1 text-sm font-medium">From</label>
      <input type="text" name="from" value="Tokyo (HND)" class="w-full border border-gray-400 rounded-lg px-3 py-2 text-sm outline-none" />
    </div>

    <div class="mb-3">
      <label class="block mb-1 text-sm font-medium">To</label>
      <input type="text" name="to" value="New York (JFK)" class="w-full border border-gray-400 rounded-lg px-3 py-2 text-sm outline-none" />
    </div>

    <div class="mb-3">
      <label class="block mb-1 text-sm font-medium">Dates</label>
      <input type="text" name="dates" value="Mar 18 → Mar 29" class="w-full border border-gray-400 rounded-lg px-3 py-2 text-sm outline-none" />
    </div>

    <div class="mb-4">
      <label class="block mb-1 text-sm font-medium">Travelers</label>
      <input type="text" name="travelers" value="1, Economy" class="w-full border border-gray-400 rounded-lg px-3 py-2 text-sm outline-none" />
    </div>

    <button class="w-full bg-yellow-300 hover:bg-yellow-400 transition text-sm font-bold py-3 rounded-lg" onclick="alert('belom ada yah masih pengerjaan')">
      Find Flight
    </button>
  </div>
</body>
</html>
