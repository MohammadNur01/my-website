<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text"></span>
            My Post
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/portfolios*') ? 'active' : '' }}" href="/dashboard/portfolios">
            <span data-feather="layers"></span>
            My Portfolio
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/services*') ? 'active' : '' }}" href="/dashboard/services">
            <span data-feather="settings"></span>
            My Service
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/abouts*') ? 'active' : '' }}" href="/dashboard/abouts">
            <span data-feather="alert-circle"></span>
            About
          </a>
        </li>
      </ul>
    </div>
  </nav>