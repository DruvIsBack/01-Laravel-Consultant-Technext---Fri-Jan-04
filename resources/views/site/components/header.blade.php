<header id="header" class="header">
    <div class="header-nav navbar-fixed-top header-dark navbar-white navbar-transparent bg-transparent-1 navbar-sticky-animated animated-active">
        <div class="header-nav-wrapper">
            <div class="container">
                <nav id="menuzord-right" class="menuzord default no-bg">
                    <a class="menuzord-brand pull-left flip" href="{{ route('home') }}"">
                        <h2>
                            LOGO
                        </h2>
                    </a>
                    <ul class="menuzord-menu">
                        <li class="active">
                            <a href="#">Find Therapist</a>
                            <ul class="dropdown">
                                <li>
                                    <a href="#">Questionnaire</a>
                                </li>
                                <li>
                                    <a href="#">Matches</a>
                                </li>
                                <li>
                                    <a href="#">Favorites</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Insurance</a>
                            <ul class="dropdown">
                                <li><a href="#">Benefits</a></li>
                                <li><a href="#">Reimbursements</a></li>
                            </ul>
                        </li>
                        @if (Auth::guest())
                            <li>
                                <a href="{{ route('login') }}">
                                    Login
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">
                                    Register
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('logout') }}">
                                    Logout
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>