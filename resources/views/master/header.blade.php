<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href={{url('/')}}>
            <img src="https://logospng.org/download/tesla/logo-tesla-512.png" alt="" width="90" height="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{url('/gallery')}}>Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{url('/blog')}}>Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Shop
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item">Model 3</a></li>
                        <li><a class="dropdown-item">Model S</a></li>
                        <li><a class="dropdown-item">Model X</a></li>
                        <li><a class="dropdown-item">Model Y</a></li>
                        <li><a class="dropdown-item">Accessories</a></li>
                        <li><a class="dropdown-item">Solar Panels</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{url('/contact')}}>Contact Us</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-danger" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
