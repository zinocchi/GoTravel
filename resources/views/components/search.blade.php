<h2>Search Results</h2>

@forelse ($hotels as $hotel)
    <div class="p-4 border-b">
        <h3 class="text-lg font-bold">{{ $hotel->name }}</h3>
        <p>{{ $hotel->description }}</p>
    </div>
@empty
    <p>No hotels found.</p>
@endforelse
