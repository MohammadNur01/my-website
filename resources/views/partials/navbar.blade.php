
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark m-0 p-0">
    <div class="container">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="/"><img src="/img/logo.png" width="80" alt=""></a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/"><b>Home</b> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about"><b>About</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "All Portfolio") ? 'active' : '' }}" href="/portfolios"><b>Portfolio</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "All Posts") ? 'active' : '' }}" href="/posts"><b>Blog</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "All Services") ? 'active' : '' }}" href="/services"><b>Services</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Contact Us") ? 'active' : '' }}" href="/contact"><b>Contact Us</b></a>
          </li>
        </ul>
        <form action="/posts" class="d-flex">
          @if(request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if(request('author'))
              <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
          <input class="form-control me-2" type="text" placeholder="Search" name="search" value="{{ request('search') }}">
          <button class="btn btn-secondary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
  </nav>

