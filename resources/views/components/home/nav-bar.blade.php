<div class="site-nav-bar">
    <a class="logo" href="#">
        <img src="{{ asset('assets/image/logo.png') }}" alt="Logo Xarala" />
    </a>

    <ul class="site-nav-bar-container">
        <div class="left-side">
            <li class="site-nav-bar-item"><a href="/">Accueil</a></li>
            <li class="site-nav-bar-item"><a href="{{ route('menu') }}">Menu</a></li>
            <li class="site-nav-bar-item"><a href="{{ route('create-reservation') }}">Résérvation</a></li>
            <li class="site-nav-bar-item"><a href="#">Contact</a></li>
        </div>

        <div class="right-side">
            <li class="site-nav-bar-item"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </li>
            <li class="site-nav-bar-item"><a href="#">Connexion</a></li>
            <li class="site-nav-bar-item"><a href="#">Inscription</a></li>
        </div>
    </ul>
</div>