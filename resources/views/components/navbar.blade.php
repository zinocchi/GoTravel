<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
<style>
  body {
    font-family: 'Poppins', sans-serif;
  }
</style>

<div>
  <header class="flex justify-between items-center p-5 bg-white shadow-md">
    <h1 class="text-2xl font-bold flex items-center">
      <span class="text-green-500">GO</span> Travel
    </h1>

    <nav class="space-x-4 text-xl cursor-pointer transition duration-500">
      <a href="#" class="text-gray-600 text-sm font-bold hover:text-blue-500">Discover Trips</a>
      <a href="#" class="text-gray-600 text-sm font-bold hover:text-blue-500">Review</a>
      <a href="#" class="text-gray-600 text-sm font-bold hover:text-blue-500">More</a>
    </nav>

    @if(session('registered'))
      <div class="fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow-md z-50">
        Sign up successful!
      </div>
    @endif

    @auth
    <div class="flex items-center space-x-3">
      <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>

      <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=33dfa1&color=fff&rounded=true&size=32" 
           alt="Avatar" class="w-8 h-8 rounded-full" />
      <span class="text-sm font-semibold text-gray-700">{{ Auth::user()->name }}</span>
    </div>
  @else
  @auth
  <div class="relative group">
    <div class="flex items-center space-x-2 cursor-pointer">
      <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=33dfa1&color=fff&rounded=true&size=32" 
           alt="Avatar" class="w-8 h-8 rounded-full" />
      <span class="text-sm font-semibold text-gray-700">{{ Auth::user()->name }}</span>
    </div>

    <div class="absolute right-0 mt-2 bg-white border rounded-lg shadow-lg py-2 w-40 hidden group-hover:block z-50">
      <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
          Logout
        </button>
      </form>
    </div>
  </div>
@else
  <button onclick="toggleModal(true)" class="bg-black text-white px-4 py-2 rounded-full hover:bg-black transition">
    Sign Up
  </button>
@endauth

  @endauth
  
  </header>
</div>

<div id="authModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-white w-[95%] max-w-sm md:max-w-md rounded-2xl py-10 px-6 md:px-10 shadow-xl relative">
    
    <button onclick="toggleModal(false)" class="absolute top-4 right-5 text-gray-500 hover:text-black text-xl">
      &times;
    </button>

    <h2 class="text-lg md:text-xl text-center font-semibold mb-6">
      Create your GoTravel account
    </h2>

    <form id="registerForm" action="{{ route('register') }}" method="POST" class="space-y-4">
      @csrf

      <div>
        <label class="block text-sm text-gray-700 mb-1" for="name">Full Name</label>
        <input type="text" name="name" id="name" required class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Enter your name" />
      </div>

      <div>
        <label class="block text-sm text-gray-700 mb-1" for="email">Email</label>
        <input type="email" name="email" id="email" required class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Enter your email" />
      </div>

      <div>
        <label class="block text-sm text-gray-700 mb-1" for="password">Password</label>
        <input type="password" name="password" id="password" required class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Enter your password" />
      </div>

      <div>
        <label class="block text-sm text-gray-700 mb-1" for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Confirm your password" />
      </div>

      <button type="submit" class="w-full py-3 rounded-full bg-[#33dfa1] text-black font-semibold hover:bg-[#2cc893] transition">
        Sign Up
      </button>
    </form>

    <p class="text-sm text-center text-gray-600 mt-6">
      Already have an account?
      <a href="#" class="text-blue-600 hover:underline">Log in</a>
    </p>
  </div>
</div>

<script> 
  function toggleModal(show) {
    const modal = document.getElementById('authModal');
    if (modal) {
      show ? modal.classList.remove('hidden') : modal.classList.add('hidden');
    }
  }

  document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById('registerForm');
    if (form) {
      form.addEventListener('submit', async function (e) {
        e.preventDefault();

        const formData = new FormData(form);

        try {
          const response = await fetch(form.action, {
            method: "POST",
            headers: {
              "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
              "Accept": "application/json"
            },
            body: formData
          });

          if (response.ok) {
            toggleModal(false);
            const notif = document.createElement('div');
            notif.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow-md z-50';
            notif.innerText = 'Sign up successful!';
            document.body.appendChild(notif);
            setTimeout(() => notif.remove(), 4000);
            form.reset();
          } else {
            const errorData = await response.json();
            alert(Object.values(errorData.errors).flat().join('\n'));
          }
        } catch (err) {
          alert('Something went wrong.');
          console.error(err);
        }
      });
    }
  });
</script>
