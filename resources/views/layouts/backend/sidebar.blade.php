  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
      </div>


      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/adminpanel/dashboard">
              <i class="menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/adminpanel/hero">
              <i class="menu-icon"></i>
              <span class="menu-title">Hero</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/adminpanel/about">
              <i class="menu-icon"></i>
              <span class="menu-title">About Us</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/adminpanel/services">
              <i class="menu-icon"></i>
              <span class="menu-title">Services</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/adminpanel/gallery">
              <i class="menu-icon"></i>
              <span class="menu-title">Galery</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/adminpanel/testimonials">
              <i class="menu-icon"></i>
              <span class="menu-title">Testimonials</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/adminpanel/sejarah">
              <i class="menu-icon"></i>
              <span class="menu-title">Sejarah</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/adminpanel/tenagakerja">
              <i class="menu-icon"></i>
              <span class="menu-title">Tenaga Kerja</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/adminpanel/partners">
              <i class="menu-icon"></i>
              <span class="menu-title">Partners</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="menu-icon"></i>
              <span class="menu-title">Contact Us</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="menu-icon"></i>
              <span class="menu-title">Partners</span>
            </a>
          </li>

        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">

              </div>
            </div>
          </div>
          <div class="row">

<script>
  // Ambil URL path aktif (tanpa query string)
  const currentPath = window.location.pathname;

  // Loop semua link nav di sidebar
  document.querySelectorAll('#sidebar .nav-link').forEach(link => {
    let linkPath = link.getAttribute('href');

    // Jika link sama dengan path aktif → kasih class active
    if (linkPath === currentPath) {
      link.classList.add('active');
      link.closest('.nav-item').classList.add('active');
    }
  });
</script>

