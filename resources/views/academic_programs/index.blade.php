<!doctype html>

<html lang="{{ config('app.locale') }}">
@include('layouts.head')

<body>

  @include('layouts.nav')

  <table class="highlight">

    <tr>
      <th>ID</th>
      <th>Nombre</th>

      </tr>


      @forelse($academicPrograms as $academicProgram)
      <tr>
        <td>{{ $academicProgram->id }}</td>
        <td>{{ $academicProgram->name }}</td>


      </tr>

      @empty
      <p>No hay Programas Academicos en el sistema.</p>
      @endforelse

  </table>

</body>

</html>
