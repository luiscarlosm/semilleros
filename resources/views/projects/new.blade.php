@include('layouts.head')

<body>
  
  @include('layouts.nav')

<br/>

<section class="row">
  <div class="col s6">
    <form action="/projects/create" method="post">
      {{ csrf_field() }}
      <div class="input-field">
        <input type="text" name="name" class="form-control" placeholder="Nombre">
      </div>
      <div class="input-field">
        <input type="date" name="init_date" class="form-control" placeholder="Fecha de Inicio">
      </div>
      <div class="input-field">
        <input type="text" name="observation" class="form-control" placeholder="Observacion">
      </div>
      <div class="input-field">
        <input type="text" name="type_project" class="form-control" placeholder="tipo de proyecto">
      </div>
      <div class="input-field">
        <input type="text" name="research_centers_id" class="form-control" placeholder="id Semillero">
      </div>

      <div class="input-field">
        <button type="submit" name="create" class="btn light-blue darken-4">Crear Proyecto</button>
      </div>
    </form>
  </div>
</section>

<section class="row">
  <p>hola</p>
</section>

</body>
