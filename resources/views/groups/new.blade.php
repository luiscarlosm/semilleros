@include('layouts.head')

@include('layouts.nav')

<br/>

<section class="row">
  <div class="col s6">
    <form action="/groups/create" method="post">
      <div  clase = " input-field" >
        {{ csrf_field() }}
        <input type="text" name="name" class="form-control" placeholder="Nombre">
      </div>
       <div  clase = " input-field" >
        <input type="text" name="investigation_type" class="form-control" placeholder="Tipo de investigacion">
      </div>
      <div  clase = " input-field" >
        <input type="text" name="academic_programs_id" class="form-control" placeholder="Id programa academico">
      </div>
      <div class="input-field">
        <button type="submit" name="create" class="btn light-blue darken-4">Crear Grupo</button>
      </div>
    </form>
  </div>
</section>
