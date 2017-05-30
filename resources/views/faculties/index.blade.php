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


      @forelse($faculties as $faculty)
      <tr>
        <td>{{ $faculty->id }}</td>
        <td>{{$faculty->name }}</td>

      </tr>
      @empty
      <p>No hay facultades en el sistema.</p>
      @endforelse

  </table>
  <br />
  <div class="center">
    <a href="/faculties/new" class="btn light-blue darken-4">Crear Facultades</a>


</body>

</body>

</html>
