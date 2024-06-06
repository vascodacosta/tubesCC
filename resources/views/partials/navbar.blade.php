<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Olah.in" style="height: 25px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Kursus' ? 'active' : '' }}" href="/Kursus">Kursus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Marketplace' ? 'active' : '' }}" href="/Marketplace">Market Place</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/Keranjang" class="nav-link {{ $title === 'Keranjang' ? 'active' : '' }}"><i
                            class="bi bi-cart"></i></a>
                </li>
                <li class="nav-item ms-auto">
                    <a href="/Login" class="nav-link {{ $title === 'Login' ? 'active' : '' }}"><i
                            class="bi bi-box-arrow-in-right"></i>Login</a>
                </li>
                <li class="nav-item ms-auto">
                    <a class="nav-link {{ $title === 'Sign-up' ? 'active' : '' }}" href="/Sign-up">Sign-up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
