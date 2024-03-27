<header>
    <nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">LARAVEL 11 | Tugas PPL</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"></li>
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-grid-1x2"></i> My Dashboard</a></li>
                          <li><a class="dropdown-item" href="#">contact</a></li>
                          <li><a class="dropdown-item" href="#">Address</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                        </ul>
                      </li>
                    @endauth
                </ul>

            </div>
        </div>
    </nav>
</header>
