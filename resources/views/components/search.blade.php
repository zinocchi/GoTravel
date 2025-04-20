<h2>Search results for: "{{ $query }}"</h2>

@if($hotels->count())
  <h3>Hotels</h3>
  <ul>
    @foreach($hotels as $hotel)
      <li>{{ $hotel->name }}</li>
    @endforeach
  </ul>
@endif

@if($villas->count())
  <h3>Villas</h3>
  <ul>
    @foreach($villas as $villa)
      <li>{{ $villa->name }}</li>
    @endforeach
  </ul>
@endif

@if($flights->count())
  <h3>Flights</h3>
  <ul>
    @foreach($flights as $flight)
      <li>{{ $flight->destination }}</li>
    @endforeach
  </ul>
@endif

@if($toDos->count())
  <h3>To Do</h3>
  <ul>
    @foreach($toDos as $todo)
      <li>{{ $todo->activity }}</li>
    @endforeach
  </ul>
@endif
