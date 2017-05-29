@include('layouts.head')

@include('layouts.nav')

<br/>

<section class="row">
  <div class="col s6">
    <form action="/research_centers/create" method="post">
    	<div class="input-field">
    		{{ csrf_field() }}
    		<input type="text" name="name" class="form-control" placeholder="Nombre">
    	</div>
      <div class="input-field">
    		{{ csrf_field() }}
    		<input type="date" name="init_date" class="form-control" placeholder="Fecha de inicio">
    	</div>
      <div class="input-field">
    		{{ csrf_field() }}
    		<input type="text" name="observation" class="form-control" placeholder="Observaciones">
    	</div>
      <div class="input-field">
    		{{ csrf_field() }}
    		<input type="number" name="groups_id" class="form-control" placeholder="ID grupo">
    	</div>
      <div class="input-field">
        <button type="submit" name="create" class="btn light-blue darken-4">Crear semillero</button>
      </div>
    </form>
  </div>
</section>
