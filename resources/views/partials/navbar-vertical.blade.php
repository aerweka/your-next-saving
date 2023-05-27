<!-- Sidebar -->
<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="{{asset('index')}}">
            <img src="{{asset('assets/images/brand/logo/logo.svg')}}" alt=""/>
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
{{--                <a class="nav-link has-arrow @if (context.page ===  'dashboard') { active }"--}}
                <a class="nav-link has-arrow active"
                   href="{{route('dashboard')}}">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                </a>

            </li>


            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Layouts & Pages</div>
            </li>


            <li class="nav-item">
{{--                <a class="nav-link @if (context.page === 'layouts') { active }" href="{{asset('pages/layout')}}">--}}
                <a class="nav-link active" href="{{route('ir.index')}}">
                    <i
                        data-feather="sidebar"

                        class="nav-icon icon-xs me-2"
                    >
                    </i
                    >
                    IR
                </a>
            </li>


        </ul>

    </div>
</nav>
