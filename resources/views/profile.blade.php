<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <div class="flex justify-center">
    <div class="max-w-xl bg-white shadow-md rounded-lg p-6 mt-8">
      <div class="mx-auto py-12">
        <h2 class="text-xl font-bold mb-4">Your Profile</h2>

        @if (session('success'))
          <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
        @endif

        <form action="/profile" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium">Name</label>
                <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" required class="w-full px-4 py-2 border rounded">
            </div>

            <div>
                <label class="block text-sm font-medium">Photo</label>
                <input type="file" name="photo" class="w-full">
                @if (Auth::user()->photo)
                    <img src="{{ asset('storage/' . Auth::user()->photo) }}" class="w-24 h-24 rounded-full mt-2">
                @endif
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Profile</button>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="mt-6">
            @csrf
            <button type="submit" class="text-red-500 hover:underline">Logout</button>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
