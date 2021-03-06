@section('nav')
    
    @if (!Auth::guest())
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: black">
      <!-- Brand -->
      <a class="navbar-brand" href="/">
          <h1>Ofofo</h1>
      </a>

      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav mr-4">
              <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
              </li>
              <!-- Dropdown -->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      News
                  </a>
                  <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Local News</a>
                      <a class="dropdown-item" href="#">Entertainment News</a>
                      <a class="dropdown-item" href="#">Global News</a>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Gossips</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Opportunities</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Memes</a>
              </li>

          </ul>
          <form class="form-inline">
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              <button class="btn btn-light bg-transparent text-white" type="submit">Search</button>
          </form>
          <a class="" href="/logout">
              <button class="mx-2 btn btn-warning border-0 bg-transparent text-warning">Sign Out</button>
          </a>

      </div>
  </nav>
    @else
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: black">
      <!-- Brand -->
      <a class="navbar-brand" href="#">
          <h1>Ofofo</h1>
      </a>

      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav mr-4">
              <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
              </li>
              <!-- Dropdown -->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      News
                  </a>
                  <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Local News</a>
                      <a class="dropdown-item" href="#">Entertainment News</a>
                      <a class="dropdown-item" href="#">Global News</a>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Gossips</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Opportunities</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Memes</a>
              </li>

          </ul>
          <form class="form-inline">
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              <button class="btn btn-light bg-transparent text-white" type="submit">Search</button>
          </form>
          <a class="nav-link" href="/account/login">
              <button class="mx-2 btn btn-light border-0 bg-transparent text-white">Log in</button>
          </a>

          <a class="" href="/account/signup">
              <button class="mx-2 btn btn-warning border-0 bg-transparent text-warning">Sign up</button>
          </a>

      </div>
  </nav>
    @endif
@endsection
