<!doctype html>

<html lang="{{ config('app.locale') }}">
@include('layouts.head')

<body>

  @include('layouts.nav')

  <table class="highlight">

    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Fecha inicio</th>
      <th>Fecha fin</th>
      <th>Lugar</th>
      <th>Recursos</th>
      <th>Tipo de evento</th>
    </tr>


      @forelse($events as $event)
      <tr>
        <td>{{ $event->id }}</td>
        <td>{{$event->name }}</td>
        <td>{{$event->init_date }}</td>
        <td>{{$event->final_date }}</td>
        <td>{{$event->place }}</td>
        <td>{{$event->resource }}</td>
        <td>{{$event->even_type }}</td>

      </tr>
      @empty
      <p>No hay eventoss en el sistema.</p>
      @endforelse

  </table>
<br />
  <div class="center">
    <a href="/events/new" class="btn light-blue darken-4">Crear Eventos</a>

</body>

</html>
