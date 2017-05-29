<!doctype html>

<html lang="{{ config('app.locale') }}">
@include('layouts.head')

<body>

  @include('layouts.nav')

  <table class="highlight">

    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Tipo de investigacion<th>
      <th>Programas academicos<th>
    </tr>

      @forelse($groups as $group)
      <tr>
        <td>{{ $group->id }}</td>
        <td>{{ $group->name }}</td>
        <td>{{ $group->investigation_type }}</td>
        <td>{{ $group->academic_programs_id }}</td>
      </tr>
      @empty
      <p>No hay grupos en el sistema.</p>
      @endforelse

  </table>

</body>

</html>
