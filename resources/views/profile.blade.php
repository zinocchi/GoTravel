<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-2xl bg-white shadow-lg rounded-xl p-8 space-y-6">

            <h2 class="text-2xl font-bold border-b pb-4">👤 Your Profile</h2>

            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <form action="/profile" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                
                <div class="flex items-center space-x-4">
                    @if (Auth::user()->photo)
                        <img src="{{ asset('storage/' . Auth::user()->photo) }}" class="w-24 h-24 rounded-full object-cover border" alt="Profile Picture">
                    @else
                        <div class="w-24 h-24 rounded-full bg-gray-300 flex items-center justify-center text-2xl font-bold text-white">?</div>
                    @endif
                    <div>
                        <label class="block text-sm font-semibold mb-1">Change Photo</label>
                        <input type="file" name="photo" class="text-sm text-gray-600">
                    </div>
                </div>

              
                <div>
                    <label class="block text-sm font-semibold">Name</label>
                    <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" required class="w-full px-4 py-2 border rounded-md">
                </div>

              
                <div>
                    <label class="block text-sm font-semibold">Email</label>
                    <input type="email" value="{{ Auth::user()->email }}" readonly class="w-full px-4 py-2 bg-gray-100 border rounded-md cursor-not-allowed">
                </div>

              
                <div>
                    <label class="block text-sm font-semibold">Joined</label>
                    <p class="text-sm text-gray-500">{{ Auth::user()->created_at->format('F d, Y') }}</p>
                </div>

                
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-md">
                    Update Profile
                </button>
            </form>

            <div class="flex justify-between items-center pt-6 border-t">
                
                <a href="#" class="text-sm text-blue-500 hover:underline">Change Password</a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-red-500 hover:underline">Logout</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
