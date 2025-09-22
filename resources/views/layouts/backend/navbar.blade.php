<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href="/adminpanel/dashboard">
      <img src="{{ asset('assetsbackend/images/logo.svg') }}" class="mr-2" alt="logo"/>
    </a>
    <a class="navbar-brand brand-logo-mini" href="/adminpanel/dashboard">
      <img src="{{ asset('assetsbackend/images/logo-mini.svg') }}" alt="logo"/>
    </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>

    <ul class="navbar-nav mr-lg-2"></ul>

    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="{{ asset('assetsbackend/images/faces/face28.jpg') }}" alt="profile"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <form action="{{ route('logout') }}" method="POST" class="m-0">
            @csrf
            <button type="submit" class="dropdown-item">
              <i class="ti-power-off text-primary"></i> Logout
            </button>
          </form>
        </div>
      </li>
    </ul>
  </div>
</nav>
