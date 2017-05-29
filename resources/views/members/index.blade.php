<!doctype html>

<html lang="{{ config('app.locale') }}">
@include('layouts.head')

<body>

  @include('layouts.nav')

  <table class="highlight">

    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Email</th>
      <th>Movil</th>
      <th>Tipo Documento</th>
      <th>Tipo</th>
      <th>Id Proyecto</th>
      <th>Id Academico</th>
      <th>Id Usuario</th>
      </tr>


      @forelse($members as $member)
      <tr>
        <td>{{ $member->id }}</td>
        <td>{{ $member->names }}</td>
        <td>{{ $member->lastnames }}</td>
        <td>{{ $member->email }}</td>
        <td>{{ $member->movil }}</td>
        <td>{{ $member->doc_type }}</td>
        <td>{{ $member->type }}</td>
        <td>{{ $member->project_id }}</td>
        <td>{{ $member->academic_prograns_id }}</td>
        <td>{{ $member->user_id }}</td>
      </tr>
      @empty
      <p>No hay seccionales en el sistema.</p>
      @endforelse

  </table>

</body>

</html>
