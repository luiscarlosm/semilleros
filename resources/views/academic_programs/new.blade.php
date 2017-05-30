@include('layouts.head')

@include('layouts.nav')

<br/>

<section class="row">
  <div class="col s6">
    <form action="/academic_programs/create" method="post">

      <div class="input-field">
    		{{ csrf_field() }}
    		<input type="text" name="id" class="form-control" placeholder="Id">
        <input type="text" name="names" class="form-control" placeholder="Nombre">
        <input type="text" name="faculties_id" class="form-control" placeholder="ID Facultades">
    	</div>
      <div  clase = " input-field" >
        <input type="text" name="sectionals_id" class="form-control" placeholder="Seccional">
      </div>
      <div class="input-field">
        <button type="submit" name="create" class="btn light-blue darken-4">crear Progamas Academicos</button>
      </div>
    </form>
  </div>
</section>