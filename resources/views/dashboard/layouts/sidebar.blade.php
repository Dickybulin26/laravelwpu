<div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebarMenuLabel">My Dashboard</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }} text-dark" aria-current="page" href="/dashboard">
            <i class="bi bi-house-door"></i>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/blog') ? 'active' : '' }} text-dark" href="/dashboard/blog">
            <i class="bi bi-card-text"></i>
            My Posts
          </a>
        </li>
      </ul>


      <hr class="my-3">

      <ul class="nav flex-column mb-auto">
        <li class="nav-item">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link px-3 mb-3">
                  <a href="" class="dropdown-item text-dark" class="dropdown-item"
                        style="text-decoration: none"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                </button>
              </form>
        </li>
      </ul>
    </div>
  </div>