{{-- <nav class="navbar-vertical navbar" style="background-color: #0ea14a !important; border: none;"> --}}
  <nav class="navbar-vertical navbar bg-success"
    style="border: none; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); z-index: 10">
    <div class="nav-scroller">
      <!-- Brand logo -->
      <a class="navbar-brand" href="{{ route('home.index') }}">
        <img src="{{ asset('images/logo.png') }}" alt="" /> <span class="text-white"
          style="font-size: 14px; font-weight: 600; letter-spacing: .6px;">SPP
          Hemodialisa</span>
      </a>
      <!-- Navbar nav -->
      <ul class="navbar-nav flex-column" id="sideNavbar">
        <li class="nav-item">
          <a class="nav-link has-arrow  active " href="{{ route('home.index') }}">
            <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
          </a>

        </li>

        @if (auth()->user()->level == 'admin')

        <!-- Nav item -->
        <li class="nav-item">
          <div class="navbar-heading" style="color: #f4f4f4;">Layouts & Pages</div>
        </li>


        <!-- Nav item -->
        <li class="nav-item">
          <a class="nav-link has-arrow active  collapsed " href="#!" data-bs-toggle="collapse"
            data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
            <i data-feather="grid" class="nav-icon icon-xs me-2">
            </i> Master
          </a>

          <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="active nav-link" href="{{ route('users.index') }}">
                  Data User Login
                </a>
              </li>
              <li class="nav-item">
                <a class="active nav-link" href="{{ route('pasien.index') }}">
                  Data Pasien
                </a>
              </li>
            </ul>
          </div>

        </li>


        <!-- Nav item -->
        <li class="nav-item">
          <a class="nav-link has-arrow active  collapsed " href="#!" data-bs-toggle="collapse"
            data-bs-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
            <i data-feather="monitor" class="nav-icon icon-xs me-2">
            </i> Pelayanan
          </a>
          <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="active nav-link" href="{{ route('traveling.index') }}"> Form Traveling Dialisis</a>
              </li>
              <li class="nav-item">
                <a class="active nav-link" href="{{ route('dialisis.index') }}"> Dialisis Book</a>
              </li>

            </ul>
          </div>
        </li>
        @endif

        @if (auth()->user()->level == 'pasien' or auth()->user()->level == 'perawat')
        <!-- Nav item -->
        <li class="nav-item">
          <div class="navbar-heading" style="color: #f4f4f4;">Layouts & Pages</div>
        </li>

        <li class="nav-item">
          <a class="nav-link has-arrow  active " href="{{ route('pasien.index') }}">
            <i data-feather="user" class="nav-icon icon-xs me-2"></i>Data Pasien
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link has-arrow  active " href="{{ route('dialisis.index') }}">
            <i data-feather="book-open" class="nav-icon icon-xs me-2"></i>Dialisis Book
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link has-arrow  active " href="{{ route('traveling.index') }}">
            <i data-feather="file-text" class="nav-icon icon-xs me-2"></i>Traveling Dialisis
          </a>
        </li>

        @endif
      </ul>

    </div>
  </nav>