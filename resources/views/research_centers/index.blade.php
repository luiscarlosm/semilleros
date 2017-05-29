<!doctype html>

<html lang="{{ config('app.locale') }}">
@include('layouts.head')

<body>

  @include('layouts.nav')

  <table class="highlight">

    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Fecha de inicio</th>
      <th>Observaciones</th>
      <th>id grupo</th>
    </tr>


      @forelse($researchCenters as $researchCenter)
      <tr>
        <td>{{ $researchCenter->id }}</td>
        <td>{{ $researchCenter->name }}</td>
        <td>{{ $researchCenter->init_date }}</td>
        <td>{{ $researchCenter->observation }}</td>
        <td>{{ $researchCenter->groups_id}}</td>
      </tr>
      @empty
      <p>No hay semilleros en el sistema.</p>
      @endforelse

  </table>

</body>

</html>
