<nav class="navbar navbar-expand-lg navbar-dark bg-info ">
    <div class="container">
      <a class="navbar-brand" href="/">Dicky Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home" ? 'active' : '') }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "about" ? 'active' : '') }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "blog" ? 'active' : '') }}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "categories" ? 'active' : '') }}" href="/categories">categories</a>
          </li>
        </ul>

        <ul class="navbar-nav">
          @auth
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                welcome back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" class="dropdown-item" href="/dashboard" style="text-decoration: none">
                  <i class="bi bi-layout-text-window-reverse"></i> Dashboard</a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">
                      <a href="" class="dropdown-item" class="dropdown-item"
                            style="text-decoration: none"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                    </button>
                  </form>

              </ul>
            </li>
          @else
            <li class="nav-item">
              <a href="/login" class="nav-link {{ ($active === "login" ? 'active' : '') }}">
                <i class="bi bi-box-arrow-in-right"></i>Login</a>
            </li>
          @endauth
        </ul>

      </div>
    </div>
  </nav>