<nav class="navbar">
    <div class="navbar-user-name">{{ Auth::user()->fullName() }}</div>
    <img class="navbar-user-avatar" src="{{ asset('assets/image/avatar.png') }}" alt="user avatar">

    <form action="{{ route('office-logout') }}" method="POST" class="logout-form">
        @csrf
        <input type="submit" value="Me Deconnecter">
    </form>
</nav>