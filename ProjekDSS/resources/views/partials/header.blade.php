<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">DSS</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/#hero') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home<br></a></li>
          <li><a href="{{ url('/#about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
          <li><a href="{{ url('/hasil') }}" class="{{ request()->is('hasil') ? 'active' : '' }}">Data</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ url('/form') }}">Mulai</a>

    </div>
</header>