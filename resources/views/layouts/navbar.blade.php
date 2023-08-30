<nav class="navbar navbar-dark navbar-expand-md bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active fw-bold' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('categories*') ? 'active fw-bold' : '' }}" href="/categories">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('posts*') ? 'active fw-bold' : '' }}" href="/posts">Blog</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <a href="admin" class="btn btn-outline-warning">
          <li class="nav-item fw-bold">Login</li>
        </a>
      </ul>
    </div>
  </div>
</nav>