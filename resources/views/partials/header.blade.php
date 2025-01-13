<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if(request()->is('/')){{ 'active' }}@endif" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->is('logbook')){{ 'active' }}@endif" href="/logbook">Logbook</a>
                </li>
            </ul>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="navbarModeToggle" data-mode="light"><i class="fa-solid fa-moon"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTools" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span><i class="fa-solid fa-wrench"></i></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownTools">
                            <li><a class="dropdown-item" href="{{ route('tools.metar') }}">Metar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownSettings" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span><i class="fa-solid fa-gear fa-lg"></i></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownSettings">
                            <li><a class="dropdown-item" href="{{ route('logbook.settings.index') }}">Logbook Settings</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<script>
    $('#navbarModeToggle').on('click', function() {
        if ($(this).data('mode') === 'light') {
            $(this).html('<i class="fa-solid fa-sun"></i>');
            $(this).data('mode', 'dark')
        } else {
            $(this).html('<i class="fa-solid fa-moon"></i>');
            $(this).data('mode', 'light')
        }
    });
</script>
