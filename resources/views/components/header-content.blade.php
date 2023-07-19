<header id="myHeader" class="main-header-1">
    <div class="container">
        <nav class="navbar navbar-expand-lg w-100">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="/">
                    <img src="{{asset('images/haveflix.png')}}" alt="haveflix" title="haveflix" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="{{ asset('images/menu.png') }}" alt=""/>
                </button>
                @php $name = Route::currentRouteName(); @endphp
                <div class="collapse navbar-collapse @if ($name == 'login') justify-content-end @endif @auth justify-content-end @endauth" id="navbarSupportedContent">
                    @if ($name != 'login')
                        <ul class="navbar-nav @guest mx-auto @endguest mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#teens">Teens</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#groupsex">Group Sex</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#anal">Anal</a>
                            </li>
                            @auth
                                <li class="nav-item">
                                    <form class="logout" method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                         onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </li>
                            @endauth
                        </ul>
                    @endif
                    @guest
                        <div class="d-flex justify-end">
                            <a href="#" class="button-create popup">Create Account</a>
                            <a href="{{route("login")}}" class="button-sign">Sign in</a>
                        </div>
                    @endguest
                </div>
            </div>
        </nav>
    </div>
</header>
