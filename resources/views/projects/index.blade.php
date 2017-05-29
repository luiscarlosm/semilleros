<!doctype html>

<html lang="{{ config('app.locale') }}">
@include('layouts.head')

<body>

  @include('layouts.nav')

  <table class="highlight">

    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Fecha_ini</th>
      <th>Observacion</th>
      <th>Tipo_proyecto</th>
      <th>Semillero</th>
    </tr>


      @forelse($projects as $project)
      <tr>
        <td>{{ $project->id }}</td>
        <td>{{ $project->name }}</td>
        <td>{{ $project->init_date }}</td>
        <td>{{ $project->observation }}</td>
        <td>{{ $project->type_proyect }}</td>
        <td>{{ $project->research_centers_id }}</td>
      </tr>
      @empty
      <p>No hay Proyectos en el sistema.</p>
      @endforelse

  </table>

</body>

</html>