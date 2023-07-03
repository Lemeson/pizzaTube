<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar red">
    <div class="container">
      <a class="navbar-brand" href="{{route('index')}}">
       <img height="25" class="" src="{{asset('/img/logo.png')}}" >
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('index')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('cardapio')}}">Cardapio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('sobre-nos')}}">Sobre Nós</a>
          </li>
          <li class="nav-item">
            @guest
                <a class="nav-link" href="{{ route('login') }}">Faça login</a>
          </li>
          <li class="nav-item">
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">Registre-se</a>
                @endif
          <li class="nav-item">
            @else
                <p class="nav-link">Bem-vindo, {{ auth()->user()->name }}</p>
          </li>
          <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <button type="submit" class="nav-link bg-transparent" style="border: none;">Logout</button>
                </form>
            @endguest
        </li>
        <li class="nav-item">
          @guest
          @if (Route::has('register'))
          
          @endif
          @else
          <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
          @endguest
</li>
        </ul>
        
      </div>
    </div>
  </nav>
