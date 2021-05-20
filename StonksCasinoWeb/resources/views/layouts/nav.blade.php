<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="nav-link navbar d-lg-none d-block" href="#">StonksCasino</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link @yield('nav-Home')" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('nav-Download')" href="#">Download</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('nav-Winkel') " href="#">Winkel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('nav-Bibliotheek')" href="#">Bibliotheek</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('nav-Overons')" href="#">Over ons</a>
        </li>
      </ul>
    </div>
  </nav>