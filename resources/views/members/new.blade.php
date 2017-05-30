@include('layouts.head')

@include('layouts.nav')

<br/>

<section class="row">
  <div class="col s6">
    <form action="/members/create" method="post">

      <div class="input-field">
        {{ csrf_field() }}
        <input type="text" name="names" class="form-control" placeholder="Nombre">
        <input type="text" name="lastnames" class="form-control" placeholder="Apellidos">
        <input type="text" name="email" class="form-control" placeholder="Email">
        <input type="text" name="movil" class="form-control" placeholder="Movil">
        <input type="text" name="doc_type" class="form-control" placeholder="Tipo de Documento">
        <input type="text" name="type" class="form-control" placeholder="Tipo">
        <input type="text" name="projects_id" class="form-control" placeholder="Id del Proyecto">
        <input type="text" name="academic_programs_id" class="form-control" placeholder="Id del Programa Academico">
      </div>
      <div  clase = " input-field" >
        <input type="text" name="sectionals_id" class="form-control" placeholder="Integrantes">
      </div>
      <div class="input-field">
        <button type="submit" name="create" class="btn light-blue darken-4">Crear Integrantes</button>
      </div>
    </form>
  </div>
</section>
