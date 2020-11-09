<header class="text-center">
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark p-4">
    <div class="container">
      <a class="navbar-brand" href="/">Home</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbarCollapse" style="">
        <ul class="navbar-nav mr-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('products') }}">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('types', 'book') }}">Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('types', 'electronic') }}">Electronics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('types', 'furniture') }}">Furnitures</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>
