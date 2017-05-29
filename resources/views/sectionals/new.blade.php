@include('layouts.head')

@include('layouts.nav')

<section class="row">
  <div class="col s6">
    <form action="/sectionals/create" method="post">
    	<div class="input-field">
    		{{ csrf_field() }}
    		<input type="text" name="name" class="form-control" placeholder="Nombre">
    	</div>
      <div class="input-field">
        <button type="submit" name="create" class="btn light-blue darken-4">Crear Seccional</button>
      </div>
    </form>
  </div>
</section>
