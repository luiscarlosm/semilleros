@include('layouts.head')

@include('layouts.nav')

<br/>

<section class="row">
  <div class="col s6">
    <form action="/faculties/create" method="post">
      <div  clase = " input-field" >
        {{ csrf_field() }}
        <input type="text" name="name" class="form-control" placeholder="Nombre">
      </div>
      <div  clase = " input-field" >
        <input type="text" name="sectionals_id" class="form-control" placeholder="Seccional">
      </div>
      <div class="input-field">
        <button type="submit" name="create" class="btn light-blue darken-4">Crear Facultad</button>
      </div>
    </form>
  </div>
</section>
