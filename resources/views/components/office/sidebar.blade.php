<div class="sidebar-container">
    <div class="sidebar-title">
        <h1>RestoSAF</h1>
    </div>

    <div class="menu-box">
        <ul class="menu-box-container">
            <li class="menu-item">
                <a href="{{ route('dashboard') }}" class="{{ $menu == 'dashboard' ? 'selected' : '' }}">
                    <i class="fa-solid fa-house"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('list-employee') }}" class="{{ $menu == 'employes' ? 'selected' : '' }}">
                    <i class="fa-solid fa-users"></i>
                    <span>Employés</span>
                </a>
            </li>
            
            <li class="menu-item">
                <a href="{{ route('list-role') }}" class="{{ $menu == 'roles' ? 'selected' : '' }}">
                    <i class="fa-solid fa-sliders"></i>
                    <span>Roles</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('list-categorie') }}" class="{{ $menu == 'categories' ? 'selected' : '' }}">
                    <i class="fa-solid fa-mug-saucer"> </i>
                    <span>Categorie</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('list-assiete') }}" class="{{ $menu == 'assietes' ? 'selected' : '' }}">
                    <i class="fa-solid fa-plate-wheat"></i>
                    <span>Assiete</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('list-reservation') }}" class="{{ $menu == 'reservation' ? 'selected' : '' }}">
                    <i class="fa-solid fa-plate-wheat"></i>
                    <span>Reservation</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('list-table') }}" class="{{ $menu == 'tables' ? 'selected' : '' }}">
                    <i class="fa-solid fa-chair"></i>
                    <span>Tables</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('list-product') }}" class="{{ $menu == 'products' ? 'selected' : '' }}">
                    <i class="fa-solid fa-landmark"></i>
                    <span>Produits</span>
                </a>
            </li>

        </ul>
    </div>
    
</div>