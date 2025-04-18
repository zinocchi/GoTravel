@extends('layouts.app')

@section('content')
  <div class="max-w-6xl mx-auto px-6 mt-10">
    <h2 class="text-2xl font-bold mb-4">Search results for: <span class="text-green-600">{{ $query }}</span></h2>

    @if($results->count())
      <div class="grid md:grid-cols-3 gap-6">
        @foreach($results as $item)
          <div class="bg-white rounded-2xl shadow hover:shadow-xl transition">
            <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" class="w-full h-48 object-cover">
            <div class="p-4">
              <h3 class="text-lg font-semibold">{{ $item->name }}</h3>
              <p class="text-sm text-gray-600">{{ $item->description }}</p>
            </div>
          </div>
        @endforeach
      </div>
    @else
      <p class="text-gray-600">No results found.</p>
    @endif
  </div>
@endsection
