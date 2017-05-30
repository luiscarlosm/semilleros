@include('layouts.head')

@include('layouts.nav')

<br/>

<section class="row">
  <div class="col s6">
    <form action="/events/create" method="post">
      <div  clase = " input-field" >
        {{ csrf_field() }}
        <input type="text" name="name" class="form-control" placeholder="Nombre">
      </div>
      <div  clase = " input-field" >
        <input type="date" name="init_date" class="form-control" placeholder="dato inicial">
      </div>
       <div  clase = " input-field" >
        <input type="date" name="final_date" class="form-control" placeholder="dato final">
      </div>
       <div  clase = " input-field" >
        <input type="text" name="place" class="form-control" placeholder="lugar">
      </div>
       <div  clase = " input-field" >
        <input type="text" name="resource" class="form-control" placeholder="recurso">
      </div>

       <div  clase = " input-field" >
        <input type="text" name="event_type" class="form-control" placeholder="tipo de evento">
      </div>
       <div  clase = " input-field" >
        <input type="number" name="projects_id" class="form-control" placeholder="proyecto id">
      </div>
      <div class="input-field">
        <button type="submit" name="create" class="btn light-blue darken-4">Crear Events</button>
      </div>
    </form>
  </div>
</section>
