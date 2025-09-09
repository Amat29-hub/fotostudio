    <!-- Navbar Start -->
    <div class="container-fluid bg-light sticky-top p-0">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a href="index.html" class="navbar-brand py-4 px-5 me-0" style="background-color:#008080;">
                <h1 class="mb-0"><i class="bi bi-camera-fill"></i> Photo Magic</h1>
            </a>

            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
              <div class="navbar-nav mx-auto">
                  <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                  <a href="/about" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                  <a href="/testimonial" class="nav-item nav-link {{ request()->is('testimonial') ? 'active' : '' }}">Testimonial</a>
                  <a href="/service" class="nav-item nav-link {{ request()->is('service') ? 'active' : '' }}">Service</a>
                  <a href="/contact" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
              </div>

            </div>
        </nav>
    </div>
    <!-- Navbar End -->
