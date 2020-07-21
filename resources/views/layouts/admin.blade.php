<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="{{ url('style/main.css') }}" rel="stylesheet" />
     @stack('addon-style')
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/admin.png" class="my-4" width="100" />
          </div>
          <div class="list-group list-group-flush">
            <a
              href=""
              class="list-group-item list-group-item-action"
            >
              Dashboard
            </a>
            <a
              href=""
              class="list-group-item list-group-item-action"
            >
             Products
            </a>
             <a
              href=""
              class="list-group-item list-group-item-action"
            >
             Categories
            </a>
            <a
              href="/dashboard-transactions.html"
              class="list-group-item list-group-item-action"
            >
              Transactions
            </a>
            <a
              href="/dashboard-settings.html"
              class="list-group-item list-group-item-action"
            >
              Users
            </a>
            <a
              href="/dashboard-account.html"
              class="list-group-item list-group-item-action"
            >
              My Account
            </a>
            <a
              href="/index.html"
              class="list-group-item list-group-item-action"
            >
              Sign Out
            </a>
          </div>
        </div>
        <!-- End Of Sidebar -->

        <!-- Page Content -->
    <div id="page-content-wrapper">
          <!-- Navbar -->
        <nav
            class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
            data-aos="fade-down"
          >
            <div class="container-fluid">
              <button
                class="btn btn-secondary d-md-none mr-auto mr-2"
                id="menu-toggle"
              >
                &laquo; Menu
              </button>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Desktop Menu -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                  <li class="nav-item dropdown">
                    <a
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                      class="nav-link"
                    >
                      <img
                        src="images/icon-user.png"
                        alt=""
                        class="rounded-circle mr-2 profile-picture"
                      />
                      Hi, Admin
                    </a>
                    <div class="dropdown-menu">
                      <a href="#" class="dropdown-item">Logout</a>
                    </div>
                  </li>
                
                </ul>
                <!-- End Of Desktop Menu -->

              
              </div>
            </div>
        </nav>
          <!-- End Of Navbar -->

        {{-- Content --}}
        @yield('content')
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    <script src="{{ url('vendor/jquery/jquery.slim.min.js') }}"></script>
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    @stack('addon-script')
  </body>
</html>
