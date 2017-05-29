<!doctype html>

<html lang="{{ config('app.locale') }}">
@include('layouts.head')

<body>

  @include('layouts.nav')

  <table class="highlight">

    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Facultades</th>
      </tr>


      @forelse($academicPrograms as $academicProgram)
      <tr>
        <td>{{ $meacademicProgrammber->id }}</td>
        <td>{{ $academicProgram->names }}</td>
        <td>{{ $academicProgram->faculties_id }}</td>
      </tr>
      @empty
      <p>No hay seccionales en el sistema.</p>
      @endforelse

  </table>

</body>

</html>