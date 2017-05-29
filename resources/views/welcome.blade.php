<!doctype html>
<html lang="{{ config('app.locale') }}">

@include('layouts.head');

<body>

  @include('layouts.nav');

  <div class="row">
    @forelse($researchCenters as $research_center)
    <div class="col-6">
      <p class="card-text">
        <h1>{{ $research_center->id }}</h1>
        <h3>{{ $research_center->name }}</h3>
      </p>
    </div>
    @empty
    <p>No hay mensajes destacados.</p>
    @endforelse
  </div>
  <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
      @if (Auth::check())
      <a href="{{ url('/home') }}">Home</a>
      @else
      <a href="{{ url('/login') }}">Login</a>
      <a href="{{ url('/register') }}">Register</a>
      @endif
    </div>
    @endif

    <div class="content">
      <div class="title m-b-md">
        Laravel
      </div>

      <div class="links">
        <a href="https://laravel.com/docs">Documentation</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://github.com/laravel/laravel">GitHub</a>
      </div>
    </div>
  </div>
  <script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
  <script type="text/javascript">
    $(".button-collapse").sideNav();
  </script>
</body>
</html>
