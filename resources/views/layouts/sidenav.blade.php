<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
            <h2 class="text-primary">
            <i class="ni ni-books text-primary"></i>
            GeslBil
            </h2>
        </a>
        </div>
        <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Nav items -->
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{route("dashboard")}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('users_book.index')}}">
                <i class="ni ni-books text-primary"></i>
                <span class="nav-link-text">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="livre.html">
                <i class="ni ni-books text-primary"></i>
                <span class="nav-link-text">Livre</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="emprunt.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Emprunt</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Réservation</span>
                </a>
            </li>
            @role('admin')
            <li>
                <a class="nav-link" href="{{route('admin.index')}}">
                    <i class="ni ni-single-02 text-yellow"></i>
                    <span class="nav-link-text">Gestion Administrative</span>
                </a>
            </li>
            @endrole
            
                    
                    
            </ul>
        </div>
        </div>
    </div>
</nav>