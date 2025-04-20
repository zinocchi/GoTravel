<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>


    <header class="flex justify-between items-center p-5 bg-white shadow-md">
        <h1 class="text-2xl font-bold flex items-center">
            <span class="text-green-500">GO</span> Travel
        </h1>
        <nav class="flex-1 text-center justify-center">
            <div class="inline-block space-x-6">
                <a href="#" class="text-gray-600 text-sm font-bold hover:text-blue-500">Discover </a>
                <a href="#" class="text-gray-600 text-sm font-bold hover:text-blue-500">Trips</a>
                <a href="#" class="text-gray-600 text-sm font-bold hover:text-blue-500">Review</a>
                <a href="#" class="text-gray-600 text-sm font-bold hover:text-blue-500">More</a>
            </div>
        </nav>
        @guest
    <div class="space-x-4 px-4 py-2 border rounded-lg bg-black text-white">
        <button onclick="toggleModal(true)" class="text-sm font-semibold text-white-700 hover:text-blue-500">
            Sign Up
        </button>

@endguest



    @if (session('login_success'))
    <div id="loginSuccessAlert" class="fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow-md z-50 transition-opacity duration-1000 opacity-100">
        Login successful!
    </div>
    @endif


@auth
<div class="relative" id="profileDropdown">
    <button onclick="toggleProfileMenu()" class="flex items-center space-x-2 cursor-pointer">
        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=33dfa1&color=fff&rounded=true&size=32"
            alt="Avatar" class="w-8 h-8 rounded-full" />
        <span class="text-sm font-semibold text-gray-700">{{ Auth::user()->name }}</span>
    </button>

    <div id="profileMenu" class="absolute right-0 mt-2 bg-white border rounded-lg shadow-lg py-2 w-40 hidden z-50">
        <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-700 hover:bg-gray-100">
                Logout
            </button>
        </form>
    </div>
    </div>
</div>
@endauth
    </header>


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
                <input type="text" name="name" id="name" required
                    class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-300"
                    placeholder="Enter your name" />
            </div>

            <div>
                <label class="block text-sm text-gray-700 mb-1" for="email">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-300"
                    placeholder="Enter your email" />
            </div>

            <div>
                <label class="block text-sm text-gray-700 mb-1" for="password">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-300"
                    placeholder="Enter your password" />
            </div>

            <div>
                <label class="block text-sm text-gray-700 mb-1" for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-300"
                    placeholder="Confirm your password" />
            </div>

            <button type="submit"
                class="w-full py-3 rounded-full bg-[#33dfa1] text-black font-semibold hover:bg-[#2cc893] transition">
                Sign Up
            </button>
        </form>

        <p class="text-sm text-center text-gray-600 mt-6">
            Already have an account?
            <button href="#" class="text-blue-600 hover:underline" onclick="toggleModalLogin(true)">Log
                in</button>
        </p>
    </div>
</div>

<div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white w-[95%] max-w-sm md:max-w-md rounded-2xl py-10 px-6 md:px-10 shadow-xl relative">

        <button onclick="toggleModalLogin(false)" class="absolute top-4 right-5 text-gray-500 hover:text-black text-xl">
            &times;
        </button>

        <h2 class="text-lg md:text-xl text-center font-semibold mb-6">
            Login your account
        </h2>

        <form id="loginForm" action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm text-gray-700 mb-1" for="email">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-300"
                    placeholder="Enter your email" />
            </div>

            <div>
                <label class="block text-sm text-gray-700 mb-1" for="password">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-300"
                    placeholder="Enter your password" />
            </div>

            <button type="submit"
                class="w-full py-3 rounded-full bg-[#33dfa1] text-black font-semibold hover:bg-[#2cc893] transition">
                Login
            </button>
        </form>
        <p class="text-sm text-center text-gray-600 mt-6">
            Don’t have an account?
            <button onclick="switchToRegister()" class="text-blue-600 hover:underline">Sign up</button>
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

    function toggleModalLogin(show) {
        const modalRegis = document.getElementById('authModal');
        modalRegis.classList.add('hidden');

        const modal = document.getElementById('loginModal');
        if (modal) {
            show ? modal.classList.remove('hidden') : modal.classList.add('hidden');
        }
    }

    // document.addEventListener("DOMContentLoaded", function() {
    //     const form = document.getElementById('registerForm');
    //     if (form) {
    //         form.addEventListener('submit', async function(e) {
    //             e.preventDefault();

    //             const formData = new FormData(form);

    //             try {
    //                 const response = await fetch(form.action, {
    //                     method: "POST",
    //                     headers: {
    //                         "X-CSRF-TOKEN": document.querySelector('input[name="_token"]')
    //                             .value,
    //                         "Accept": "application/json"
    //                     },
    //                     body: formData
    //                 });

    //                 if (response.ok) {
    //                     toggleModal(false);
    //                     const notif = document.createElement('div');
    //                     notif.className =
    //                         'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow-md z-50';
    //                     notif.innerText = 'Sign up successful!';
    //                     document.body.appendChild(notif);
    //                     setTimeout(() => notif.remove(), 4000);
    //                     form.reset();
    //                 } else {
    //                     const errorData = await response.json();
    //                     alert(Object.values(errorData.errors).flat().join('\n'));
    //                 }
    //             } catch (err) {
    //                 alert('Something went wrong.' . err);
    //             }
    //         });
    //     }
    // });
</script>

<script>

document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', async function (e) {
            e.preventDefault();

            const formData = new FormData(loginForm);

            // try {
            //     const response = await fetch(loginForm.action, {
            //         method: "POST",
            //         headers: {
            //             "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
            //             "Accept": "application/json"
            //         },
            //         body: formData
            //     });

            //     if (response.ok) {
            //         window.location.href = "/";
            //     } else {
            //         const errorData = await response.json();
            //         alert(Object.values(errorData.errors).flat().join('\n'));
            //     }
            // } catch (err) {
            //     alert('Something went wrong.' . err);
            //     console.error(err);
            // }
        });
    }
});
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const alertBox = document.getElementById('loginSuccessAlert');
        if (alertBox) {
            setTimeout(() => {
                alertBox.remove();
            }, 4000);
        }
    });
</script>


<script>
    function toggleProfileMenu() {
        const menu = document.getElementById('profileMenu');
        if (menu) {
            menu.classList.toggle('hidden');
        }
    }

    document.addEventListener('click', function (event) {
        const dropdown = document.getElementById('profileDropdown');
        const menu = document.getElementById('profileMenu');

        if (dropdown && !dropdown.contains(event.target)) {
            menu.classList.add('hidden');
        }
    });
</script>

<script>
    if (response.ok) {
    window.location.href = "/";
}
</script>
<script>
    function switchToRegister() {
        document.getElementById('loginModal').classList.add('hidden');
        document.getElementById('authModal').classList.remove('hidden');
    }
</script>


