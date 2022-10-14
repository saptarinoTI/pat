<nav class="navbar-classic navbar navbar-expand-lg py-3">
  <a id="nav-toggle" href="#"><i data-feather="menu" class="nav-icon me-2 icon-xs"></i></a>

  <!--Navbar nav -->
  <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">

    <!-- List -->
    <li class="dropdown ms-2">
      <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <small class="fw-bold">{{ ucwords(auth()->user()->name) }}</small>
        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24"
          style="fill: rgba(110,89,255);transform: ;msFilter:;">
          <path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z">
          </path>
        </svg>
      </a>
      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
        <ul class="list-unstyled">
          <li>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="dropdown-item">
                <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>Sign Out
              </button>
            </form>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>