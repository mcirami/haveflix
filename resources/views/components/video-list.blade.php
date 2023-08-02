<div>
    @php //dd($videoList)
        $authUser = \Illuminate\Support\Facades\Auth::user();
    @endphp

    <section class="spot-section first-spot-sec">
        <div class="section-spotlite">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 spotlight">
                        <h3>Featured Flix</h3>
                    </div>
                    @guest
                        <div class="col-md-6 See-all ">
                            <a href="#" class="popup">
                                <h3>See all</h3>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </section>
    <section class="center slider">
        @php $count = 0 @endphp
        @foreach($videoList['FeaturedFlix']['videos'] as $value)
            @php ++$count @endphp
            @if (($value['page'] == 'member' && $authUser) || $value['page'] == 'all')
                <div class="main-sli">
                    <div class="sli-div">
                        <a href="#" class="popup" @auth data-video="{{ $value['video_url'] }}" @endauth>
                            <img src="{{ asset('images/' . $videoList['FeaturedFlix']['image_directory'] . $count . '.jpg') }}" alt="slider-image">
                            <div class="play-icon">
                                <img src="{{ asset('images/play-button.png') }}" alt="play-button">
                            </div>
                        </a>
                    </div>
                    <div class="movie-title">
                        <h6>{{$value['name']}}</h6>
                    </div>
                </div>
            @endif
        @endforeach
    </section>

    @guest
        <section class="free-account-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="free-account">
                            <div class="list-col-1">
                                <h2>Create  your free account</h2>
                                <ul>
                                    <li><i class="fa-solid fa-circle-check"></i>Manage parental controls for kids and teens</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Build your own free watchlist</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Save your watch progress</li>
                                </ul>
                            </div>
                            <div class="btn-col-2">
                                <div class="button-create-account">
                                    <a href="#" class="button-C popup">Create Account</a>
                                </div>
                                <div class="button-sign-in">
                                    <a href="{{route("login")}}" class="button-s">Sign in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endguest

    <section class="spot-section first-spot-sec" id="teens">
        <div class="section-spotlite">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 spotlight">
                        <h3>Teen Flix</h3>
                    </div>
                    @guest
                        <div class="col-md-6 See-all ">
                            <a href="#" class="popup">
                                <h3>See all</h3>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </section>
    <section class="center slider">
        @php $count = 0 @endphp
        @foreach($videoList['TeenFlix']['videos'] as $value)
            @php ++$count @endphp
            @if (($value['page'] == 'member' && $authUser) || $value['page'] == 'all')
                <div class="main-sli">
                    <div class="sli-div">
                        <a href="#" class="popup" @auth data-video="{{ $value['video_url'] }}" @endauth>
                            <img src="{{ asset('images/' . $videoList['TeenFlix']['image_directory'] . $count . '.jpg') }}" alt="slider-image">
                            <div class="play-icon">
                                <img src="{{ asset('images/play-button.png') }}" alt="play-button">
                            </div>
                        </a>
                    </div>
                    <div class="movie-title">
                        <h6>{{$value['name']}}</h6>
                    </div>
                </div>
            @endif
        @endforeach
    </section>

    <section class="spot-section first-spot-sec" id="groupsex">
        <div class="section-spotlite">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 spotlight">
                        <h3>Group Sex Flix</h3>
                    </div>
                    @guest
                        <div class="col-md-6 See-all ">
                            <a href="#" class="popup">
                                <h3>See all</h3>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </section>
    <section class="center slider">
        @php $count = 0 @endphp
        @foreach($videoList['GroupFlix']['videos'] as $value)
            @php ++$count @endphp
            @if (($value['page'] == 'member' && $authUser) || $value['page'] == 'all')
                <div class="main-sli">
                    <div class="sli-div">
                        <a href="#" class="popup" @auth data-video="{{ $value['video_url'] }}" @endauth>
                            <img src="{{ asset('images/' . $videoList['GroupFlix']['image_directory'] . $count . '.jpg') }}" alt="slider-image">
                            <div class="play-icon">
                                <img src="{{ asset('images/play-button.png') }}" alt="play-button">
                            </div>
                        </a>
                    </div>
                    <div class="movie-title">
                        <h6>{{$value['name']}}</h6>
                    </div>
                </div>
            @endif
        @endforeach
    </section>

    <section class="spot-section first-spot-sec" id="anal">
        <div class="section-spotlite">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 spotlight">
                        <h3>Anal Flix</h3>
                    </div>
                    @guest
                        <div class="col-md-6 See-all ">
                            <a href="#" class="popup">
                                <h3>See all</h3>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </section>
    <section class="center slider">
        @php $count = 0 @endphp
        @foreach($videoList['AnalFlix']['videos'] as $value)
            @php ++$count @endphp
            @if (($value['page'] == 'member' && $authUser) || $value['page'] == 'all')
                <div class="main-sli">
                    <div class="sli-div">
                        <a href="#" class="popup" @auth data-video="{{ $value['video_url'] }}" @endauth>
                            <img src="{{ asset('images/' . $videoList['AnalFlix']['image_directory'] . $count . '.jpg') }}" alt="slider-image">
                            <div class="play-icon">
                                <img src="{{ asset('images/play-button.png') }}" alt="play-button">
                            </div>
                        </a>
                    </div>
                    <div class="movie-title">
                        <h6>{{$value['name']}}</h6>
                    </div>
                </div>
            @endif
        @endforeach
    </section>
</div>
