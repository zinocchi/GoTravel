<x-layout>
  <x-slot:title>GoTravel</x-slot:title>

  <x-navbar></x-navbar>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <main class="text-center pt-20">
    <h2 id="changingText" class="text-5xl font-bold transition-opacity duration-1000 opacity-100 mb-4">
      Where to?
    </h2>
    <script>
      const phrases = [
        "Where to?",
        "Ready to explore?",
        "Find your dream trip!",
        "Let’s go somewhere new!"
      ];
    
      let index = 0;
      const textElement = document.getElementById('changingText');
    
      setInterval(() => {
        textElement.classList.remove('opacity-300');
        textElement.classList.add('opacity-0');
    
        setTimeout(() => {
          index = (index + 1) % phrases.length;
          textElement.textContent = phrases[index];
    
          textElement.classList.remove('opacity-0');
          textElement.classList.add('opacity-100');
        }, 500);
      }, 3500);
    </script>
  
  <div class="mt-4 flex flex-wrap md:flex-nowrap items-center justify-center gap-4 md:gap-6 px-4 py-3">
    <a href="#" class="group flex items-center space-x-2 py-2 border-b-2 border-transparent hover:border-black transition-all duration-200">
      <img src="{{ asset('search.png') }}" alt="Search" class="h-5 w-5 group-hover:scale-110 transition-transform duration-200" />
      <span class="text-sm md:text-base text-gray-800 group-hover:text-black font-medium">Search All</span>
    </a>
    <a href="fligths" class="group flex items-center space-x-2 py-2 border-b-2 border-transparent hover:border-black transition-all duration-200">
      <img src="{{ asset('plane.png') }}" alt="Flight" class="h-5 w-5 group-hover:scale-110 transition-transform duration-200" />
      <span class="text-sm md:text-base text-gray-800 group-hover:text-black">Flights</span>
    </a>
    <a href="hotel" class="group flex items-center space-x-2 py-2 border-b-2 border-transparent hover:border-black transition-all duration-200">
      <img src="{{ asset('hotel.png') }}" alt="Hotel" class="h-5 w-5 group-hover:scale-110 transition-transform duration-200" />
      <span class="text-sm md:text-base text-gray-800 group-hover:text-black">Hotels</span>
    </a>
    <a href="to-do" class="group flex items-center space-x-2 py-2 border-b-2 border-transparent hover:border-black transition-all duration-200">
      <img src="{{ asset('to-do.png') }}" alt="To Do" class="h-5 w-5 group-hover:scale-110 transition-transform duration-200" />
      <span class="text-sm md:text-base text-gray-800 group-hover:text-black">Things to Do</span>
    </a>
    <a href="villa" class="group flex items-center space-x-2 py-2 border-b-2 border-transparent hover:border-black transition-all duration-200">
      <img src="{{ asset('apt.png') }}" alt="Villa" class="h-5 w-5 group-hover:scale-110 transition-transform duration-200" />
      <span class="text-sm md:text-base text-gray-800 group-hover:text-black">Villa & Apt</span>
    </a>
  </div>
      
      <form action="{{ route('search') }}" method="GET" class="mt-6 flex justify-center">
        <div class="relative w-1/2 flex absolute left-0 pl-3">
          <input 
            type="text" 
            name="query" 
            placeholder="Places to go, things to do, hotels..." 
            class="w-full px-5 py-3 border rounded-full ml-2"
          >
          <button 
            type="submit" 
            class="absolute right-2 top-3 bg-[#33dfa1] text-black px-5 py-1 rounded-full text-sm hover:text-blue-500"
          >
            Search
          </button>   
        </div>
      </form>
      
      <div class="relative rounded-2xl overflow-hidden max-w-6xl mx-auto mt-10">
          <img src="index2.jpg" alt="Plan a trip" class="w-full h-auto object-cover">
          <div class="absolute inset-0 flex items-center justify-end p-6 md:p-10">
              <div class="bg-green-400 rounded-2xl p-6 md:p-10 max-w-md text-black">
                  <p class="font-semibold text-sm">
                      Powered by <span class="bg-black text-white px-2 py-1 rounded">AMBA</span>
                  </p>
                  <h2 class="text-3xl font-bold mt-2 leading-tight">Plan a trip that's so you</h2>
                  <p class="mt-2 text-lg">From farm tours to forest bathing—get custom recs for whatever you're into.</p>
                  <button class="mt-4 bg-black text-white font-semibold px-4 py-2 rounded-md hover:bg-gray-800 transition">
                      Start a trip with Amba
                  </button>
              </div>
          </div>
      </div>

      <section class="max-w-7xl mx-auto px-6 mt-20">
        <h2 class="text-3xl font-bold text-left text-black mb-6">Popular Destinations</h2>
        <div class="grid md:grid-cols-3 gap-6">
      
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 relative group">
            <div class="relative h-48">
              <img src="bali2.jpg" class="w-full h-full object-cover absolute opacity-100 transition-opacity duration-1000 ease-in-out dest-img" data-index="0">
              <img src="bali3.jpg" class="w-full h-full object-cover absolute opacity-0 transition-opacity duration-1000 ease-in-out dest-img" data-index="1">
            </div>
            <div class="p-4">
              <h3 class="text-lg font-semibold text-black">Bali, Indonesia</h3>
              <p class="text-sm text-gray-600">Discover serene beaches, lush jungles, and rich culture.</p>
            </div>
          </div>
      
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 relative group">
            <div class="relative h-48">
              <img src="tokyo.jpg" class="w-full h-full object-cover absolute opacity-100 transition-opacity duration-1000 ease-in-out dest-img" data-index="0">
              <img src="tokyo3.jpg" class="w-full h-full object-cover absolute opacity-0 transition-opacity duration-1000 ease-in-out dest-img" data-index="1">
            </div>
            <div class="p-4">
              <h3 class="text-lg font-semibold text-black">Tokyo, Japan</h3>
              <p class="text-sm text-gray-600">A perfect blend of tradition and technology awaits you.</p>
            </div>
          </div>
      
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 relative group">
            <div class="relative h-48">
              <img src="paris3.jpg" class="w-full h-full object-cover absolute opacity-100 transition-opacity duration-1000 ease-in-out dest-img" data-index="0">
              <img src="paris2.jpg" class="w-full h-full object-cover absolute opacity-0 transition-opacity duration-1000 ease-in-out dest-img" data-index="1">
            </div>
            <div class="p-4">
              <h3 class="text-lg font-semibold text-black">Paris, France</h3>
              <p class="text-sm text-gray-600">Enjoy world-class cuisine, art, and architecture.</p>
            </div>
          </div>
      
        </div>
      </section>
      
      <script>
        document.querySelectorAll('.group').forEach(group => {
          const imgs = group.querySelectorAll('.dest-img');
          let current = 0;
          setInterval(() => {
            imgs[current].classList.remove('opacity-100');
            imgs[current].classList.add('opacity-0');
            current = (current + 1) % imgs.length;
            imgs[current].classList.remove('opacity-0');
            imgs[current].classList.add('opacity-100');
          }, 3500); 
        });
      </script>

<section class="max-w-7xl mx-auto px-6 mt-16">
    <h2 class="text-2xl font-bold text-black mb-4">Featured Experiences</h2>
    <p class="text-gray-600 mb-6">Explore unforgettable tours and activities in your favorite destinations.</p>
  
    <div class="grid md:grid-cols-4 gap-6">
      <div class="bg-white rounded-2xl shadow hover:shadow-lg transition duration-300 overflow-hidden">
        <img src="localmarket.jpg" alt="Local Market Tour" class="h-44 w-full object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-black">Local Market Tour</h3>
          <p class="text-sm text-gray-600 mt-1 mb-2">Get a taste of authentic local life.</p>
          <div class="flex items-center text-green-600 text-sm font-medium">⭐ 4.8 · from $72</div>
        </div>
      </div>
  
      <div class="bg-white rounded-2xl shadow hover:shadow-lg transition duration-300 overflow-hidden">
        <img src="citytour.jpg" alt="City Highlights" class="h-44 w-full object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-black">City Highlights Tour</h3>
          <p class="text-sm text-gray-600 mt-1 mb-2">Visit iconic spots with a local guide.</p>
          <div class="flex items-center text-green-600 text-sm font-medium">⭐ 4.9 · from $55</div>
        </div>
      </div>
  
      <div class="bg-white rounded-2xl shadow hover:shadow-lg transition duration-300 overflow-hidden">
        <img src="mount.jpg" alt="Volcano Adventure" class="h-44 w-full object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-black">Mount Adventure</h3>
          <p class="text-sm text-gray-600 mt-1 mb-2">Experience nature’s raw power.</p>
          <div class="flex items-center text-green-600 text-sm font-medium">⭐ 5.0 · from $143</div>
        </div>
      </div>
  
      <div class="bg-white rounded-2xl shadow hover:shadow-lg transition duration-300 overflow-hidden">
        <img src="tea.jpg" alt="Tea & Nature" class="h-44 w-full object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-black">Tea & Nature Escape</h3>
          <p class="text-sm text-gray-600 mt-1 mb-2">Relax among plantations and hills.</p>
          <div class="flex items-center text-green-600 text-sm font-medium">⭐ 4.7 · from $100</div>
        </div>
      </div>
    </div>
  </section>

  
  
  </main>
</x-layout>
